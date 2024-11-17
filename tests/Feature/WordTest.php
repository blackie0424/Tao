<?php

test('allows the user to access the create page', function () {
    $response = $this->get('/word/create');

    $response->assertStatus(200)->assertSee('create a word page');
});
