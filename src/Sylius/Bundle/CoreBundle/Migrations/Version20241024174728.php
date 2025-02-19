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

namespace Sylius\Bundle\CoreBundle\Migrations;

use Doctrine\DBAL\Schema\Schema;
use Sylius\Bundle\CoreBundle\Doctrine\Migrations\AbstractMigration;

final class Version20241024174728 extends AbstractMigration
{
    public function getDescription(): string
    {
        return 'Add a way to distinguish PaymentRequest gateway from Payum one.';
    }

    public function up(Schema $schema): void
    {
        $this->addSql('ALTER TABLE sylius_gateway_config ADD use_payum TINYINT(1) DEFAULT 1 NOT NULL');
    }

    public function down(Schema $schema): void
    {
        $this->addSql('ALTER TABLE sylius_gateway_config DROP use_payum');
    }
}
