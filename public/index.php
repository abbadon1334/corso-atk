<?php

declare(strict_types=1);

use Atk4\Ui\App;

require_once __DIR__ . '/../bootstrap.php';

$app = new App([
    'cdn' => [
        'atk' => 'http://127.0.0.1:8000/assets/atk',
        'jquery' => 'http://127.0.0.1:8000/assets/atk/external/jquery/dist',
        'fomantic-ui' => 'http://127.0.0.1:8000/assets/atk/external/fomantic-ui/dist',
        'flatpickr' => 'http://127.0.0.1:8000/assets/atk/external/flatpickr/dist',
        'chart.js' => 'http://127.0.0.1:8000/assets/atk/external/chart.js/dist', // for atk4/chart
    ],
]);

$app->initLayout([Atk4\Ui\Layout::class]);

\Atk4\Ui\View::addTo($app, ['test'])->addClass('ui segment');
