<?php

/*
 * This file is part of the Sylius package.
 *
 * (c) Sylius Sp. z o.o.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

return [
    Symfony\Bundle\FrameworkBundle\FrameworkBundle::class => ['all' => true],
    Symfony\Bundle\SecurityBundle\SecurityBundle::class => ['all' => true],
    Symfony\Bundle\TwigBundle\TwigBundle::class => ['all' => true],
    Symfony\WebpackEncoreBundle\WebpackEncoreBundle::class => ['all' => true],
    Doctrine\Bundle\DoctrineBundle\DoctrineBundle::class => ['all' => true],
    Sylius\Abstraction\StateMachine\SyliusStateMachineAbstractionBundle::class => ['all' => true],
    Sylius\Bundle\OrderBundle\SyliusOrderBundle::class => ['all' => true],
    Sylius\Bundle\MoneyBundle\SyliusMoneyBundle::class => ['all' => true],
    Sylius\Bundle\CurrencyBundle\SyliusCurrencyBundle::class => ['all' => true],
    Sylius\Bundle\LocaleBundle\SyliusLocaleBundle::class => ['all' => true],
    Sylius\Bundle\ProductBundle\SyliusProductBundle::class => ['all' => true],
    Sylius\Bundle\ChannelBundle\SyliusChannelBundle::class => ['all' => true],
    Sylius\Bundle\AttributeBundle\SyliusAttributeBundle::class => ['all' => true],
    Sylius\Bundle\TaxationBundle\SyliusTaxationBundle::class => ['all' => true],
    Sylius\Bundle\ShippingBundle\SyliusShippingBundle::class => ['all' => true],
    Sylius\Bundle\PaymentBundle\SyliusPaymentBundle::class => ['all' => true],
    Sylius\Bundle\MailerBundle\SyliusMailerBundle::class => ['all' => true],
    Sylius\Bundle\PromotionBundle\SyliusPromotionBundle::class => ['all' => true],
    Sylius\Bundle\AddressingBundle\SyliusAddressingBundle::class => ['all' => true],
    Sylius\Bundle\InventoryBundle\SyliusInventoryBundle::class => ['all' => true],
    Sylius\Bundle\TaxonomyBundle\SyliusTaxonomyBundle::class => ['all' => true],
    Sylius\Bundle\UserBundle\SyliusUserBundle::class => ['all' => true],
    Sylius\Bundle\CustomerBundle\SyliusCustomerBundle::class => ['all' => true],
    Sylius\Bundle\UiBundle\SyliusUiBundle::class => ['all' => true],
    Sylius\Bundle\ReviewBundle\SyliusReviewBundle::class => ['all' => true],
    Sylius\Bundle\CoreBundle\SyliusCoreBundle::class => ['all' => true],
    Sylius\Bundle\ResourceBundle\SyliusResourceBundle::class => ['all' => true],
    Sylius\Bundle\GridBundle\SyliusGridBundle::class => ['all' => true],
    Knp\Bundle\GaufretteBundle\KnpGaufretteBundle::class => ['all' => true],
    League\FlysystemBundle\FlysystemBundle::class => ['all' => true],
    Liip\ImagineBundle\LiipImagineBundle::class => ['all' => true],
    Stof\DoctrineExtensionsBundle\StofDoctrineExtensionsBundle::class => ['all' => true],
    BabDev\PagerfantaBundle\BabDevPagerfantaBundle::class => ['all' => true],
    Sylius\Bundle\FixturesBundle\SyliusFixturesBundle::class => ['all' => true],
    Payum\Bundle\PayumBundle\PayumBundle::class => ['all' => true],
    Sylius\Bundle\PayumBundle\SyliusPayumBundle::class => ['all' => true],
    Doctrine\Bundle\MigrationsBundle\DoctrineMigrationsBundle::class => ['all' => true],
    SyliusLabs\DoctrineMigrationsExtraBundle\SyliusLabsDoctrineMigrationsExtraBundle::class => ['all' => true],
    Knp\Bundle\MenuBundle\KnpMenuBundle::class => ['all' => true],
    Sylius\Bundle\AdminBundle\SyliusAdminBundle::class => ['all' => true],
    Symfony\UX\TwigComponent\TwigComponentBundle::class => ['all' => true],
    Symfony\UX\StimulusBundle\StimulusBundle::class => ['all' => true],
    Symfony\UX\LiveComponent\LiveComponentBundle::class => ['all' => true],
    Symfony\UX\Autocomplete\AutocompleteBundle::class => ['all' => true],
];
