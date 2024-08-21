<?php

it('can render')
    ->expect('<x-link href="https://google.com.br" />')
    ->render()
    ->toContain('<a href="https://google.com.br"');
