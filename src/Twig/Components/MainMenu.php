<?php

namespace App\Twig\Components;

use Symfony\UX\TwigComponent\Attribute\AsTwigComponent;

#[AsTwigComponent]
final class MainMenu
{
  public array $menu = [
    ['label' => 'Home', 'route' => 'app_home'],
    ['label' => 'Resume', 'route' => 'app_resume'],
    ['label' => 'Blog', 'route' => 'app_blog'],
    ['label' => 'About', 'route' => 'app_about'],
    ['label' => 'Contact', 'route' => 'app_contact'],
  ];
}
