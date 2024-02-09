<?php
//token todo
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\User;
use Doctrine\Persistence\ManagerRegistry;
 class LoginController extends AbstractController
{
    #[Route('/login', name: 'app_login', methods: ['POST'])]
    public function login(Request $request, ManagerRegistry $doctrine): JsonResponse
    {
        $data = json_decode($request->getContent(), true);

        $user = $doctrine->getRepository(User::class)->findOneBy(['username' => $data['username']]);

        if (!$user) {
            return new JsonResponse(['message' => 'Username not found'], 401);
        }

        if ($user->getPassword() !== $data['password']) {
            return new JsonResponse(['message' => 'Incorrect password'], 401);
        }

        // Implement any additional logic (e.g., setting up a token, session)

        return new JsonResponse(['message' => 'Login successful']);
    }
 
    #[Route('/logout', name: 'app_logout', methods: ['POST'])]
    public function logout(): void
    {
        // Implement logout logic if needed
        // Note: Symfony handles logout through its firewall configuration, no need for explicit logout logic here.
        throw new \LogicException('This method can be blank - it will be intercepted by the logout key on your firewall.');
    }
}
