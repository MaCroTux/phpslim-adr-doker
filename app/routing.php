<?php

use SlimADR\Action\DashboardAction;

$app
    ->get('/[{name}]', DashboardAction::class)
    ->setName('dashboard');
