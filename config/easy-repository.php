<?php
declare(strict_types=1);

use App\Repositories\Doctrine\AccountRepository;
use App\Repositories\Doctrine\UserRepository;
use App\Repositories\Interfaces\AccountRepositoryInterface;
use App\Repositories\Interfaces\UserRepositoryInterface;


return [
    /*
    |--------------------------------------------------------------------------
    | Repositories List
    |--------------------------------------------------------------------------
    |
    | Here you will define all your application's repositories to be registered
    | as services in the container.
    | Repositories list must be an associative array where the keys are the
    | abstraction of your repositories (most likely an interface) and the values
    | the concrete class of your repositories.
    |
    | Example:
    | \App\Repositories\PostRepositoryInterface::class => \App\Repositories\PostRepository::class,
    | \App\Repositories\CommentRepositoryInterface::class => \App\Repositories\CommentRepository::class
    |
    */
    'repositories' => [
        UserRepositoryInterface::class => UserRepository::class,
        AccountRepositoryInterface::class => AccountRepository::class,

    ]
];
