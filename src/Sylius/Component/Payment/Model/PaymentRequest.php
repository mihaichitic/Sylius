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

namespace Sylius\Component\Payment\Model;

use Sylius\Component\Resource\Model\TimestampableTrait;
use Symfony\Component\Uid\Uuid;

/** @experimental */
class PaymentRequest implements PaymentRequestInterface
{
    use TimestampableTrait;

    protected ?Uuid $hash = null;

    protected string $state = PaymentRequestInterface::STATE_NEW;

    protected string $action = PaymentRequestInterface::ACTION_CAPTURE;

    protected mixed $payload = null;

    /** @var array<string, mixed> */
    protected array $responseData = [];

    public function __construct(
        protected PaymentInterface $payment,
        protected PaymentMethodInterface $method,
    ) {
        $this->createdAt = new \DateTime();
    }

    public function getId(): ?string
    {
        return $this->getHash()?->__toString();
    }

    public function getHash(): ?Uuid
    {
        return $this->hash;
    }

    public function getPayment(): PaymentInterface
    {
        return $this->payment;
    }

    public function getState(): string
    {
        return $this->state;
    }

    public function setState(string $state): void
    {
        $this->state = $state;
    }

    public function getAction(): string
    {
        return $this->action;
    }

    public function setAction(string $action): void
    {
        $this->action = $action;
    }

    public function getPayload(): mixed
    {
        return $this->payload;
    }

    public function setPayload(#[\SensitiveParameter] mixed $payload): void
    {
        $this->payload = $payload;
    }

    public function getResponseData(): array
    {
        return $this->responseData;
    }

    public function setResponseData(#[\SensitiveParameter] array $responseData): void
    {
        $this->responseData = $responseData;
    }

    public function setPayment(PaymentInterface $payment): void
    {
        $this->payment = $payment;
    }

    public function getMethod(): PaymentMethodInterface
    {
        return $this->method;
    }

    public function setMethod(PaymentMethodInterface $method): void
    {
        $this->method = $method;
    }
}
