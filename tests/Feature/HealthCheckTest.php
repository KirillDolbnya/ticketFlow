<?php

namespace Tests\Feature;

use function Pest\Laravel\get;

it('returns a successful health response', function () {
    get('/up')->assertStatus(200);
});
