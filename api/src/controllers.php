<?php

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;

$app->get('/', function () use ($app) {
    return new JsonResponse('Please enter valid api path.', 404);
});

$app->post('/', function () use ($app) {
    return new JsonResponse('Please enter valid api path.', 404);
});

