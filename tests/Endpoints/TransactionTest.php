<?php
declare(strict_types=1);

namespace Tests\EoneoPay\PhpSdk\Endpoints;

use EoneoPay\PhpSdk\Endpoints\Transaction;
use Tests\EoneoPay\PhpSdk\TestCases\ValidationEnabledTestCase;

/**
 * @covers \EoneoPay\PhpSdk\Endpoints\Transaction
 */
class TransactionTest extends ValidationEnabledTestCase
{
    /**
     * Gets the data scenarios that should cause one or more validation failures.
     *
     * @return mixed[]
     *
     * @SuppressWarnings(PHPMD.ExcessiveMethodLength) Long method required to define all scenarios.
     */
    public function getInvalidDataScenarios(): iterable
    {
        yield 'Null values' => [
            'input' => [
                'action' => null,
                'allocation' => null,
                'amount' => null,
                'approved' => null,
                'createdAt' => null,
                'finalisedAt' => null,
                'fundingSource' => null,
                'metadata' => null,
                'parent' => null,
                'paymentDestination' => null,
                'paymentSource' => null,
                'response' => null,
                'security' => null,
                'state' => null,
                'status' => null,
                'transactionId' => null,
                'updatedAt' => null,
                'user' => null,
            ],
            'expected' => <<<'ERR'
Object(EoneoPay\PhpSdk\Endpoints\Transaction).action:
    This value should not be blank. (code c1051bb4-d103-4f74-8988-acbcafc7fdc3)
Object(EoneoPay\PhpSdk\Endpoints\Transaction).amount:
    This value should not be blank. (code c1051bb4-d103-4f74-8988-acbcafc7fdc3)
Object(EoneoPay\PhpSdk\Endpoints\Transaction).state:
    This value should not be blank. (code c1051bb4-d103-4f74-8988-acbcafc7fdc3)

ERR,
        ];

        yield 'Invalid values' => [
            'input' => [
                'action' => false,
                'allocation' => [],
                'amount' => false,
                'approved' => 'hello',
                'createdAt' => false,
                'finalisedAt' => false,
                'fundingSource' => false,
                'metadata' => false,
                'parent' => false,
                'paymentDestination' => false,
                'paymentSource' => false,
                'response' => false,
                'security' => false,
                'state' => false,
                'status' => false,
                'transactionId' => false,
                'updatedAt' => false,
                'user' => false,
            ],
            'expected' => <<<'ERR'
Object(EoneoPay\PhpSdk\Endpoints\Transaction).action:
    This value should not be blank. (code c1051bb4-d103-4f74-8988-acbcafc7fdc3)
Object(EoneoPay\PhpSdk\Endpoints\Transaction).action:
    This value should be of type string. (code ba785a8c-82cb-4283-967c-3cf342181b40)
Object(EoneoPay\PhpSdk\Endpoints\Transaction).amount:
    This value should not be blank. (code c1051bb4-d103-4f74-8988-acbcafc7fdc3)
Object(EoneoPay\PhpSdk\Endpoints\Transaction).amount:
    This value should be of type \EoneoPay\PhpSdk\Endpoints\Amount. (code ba785a8c-82cb-4283-967c-3cf342181b40)
Object(EoneoPay\PhpSdk\Endpoints\Transaction).approved:
    This value should be of type bool. (code ba785a8c-82cb-4283-967c-3cf342181b40)
Object(EoneoPay\PhpSdk\Endpoints\Transaction).createdAt:
    This value is not a valid datetime. (code 1a9da513-2640-4f84-9b6a-4d99dcddc628)
Object(EoneoPay\PhpSdk\Endpoints\Transaction).createdAt:
    This value should be of type string. (code ba785a8c-82cb-4283-967c-3cf342181b40)
Object(EoneoPay\PhpSdk\Endpoints\Transaction).finalisedAt:
    This value is not a valid datetime. (code 1a9da513-2640-4f84-9b6a-4d99dcddc628)
Object(EoneoPay\PhpSdk\Endpoints\Transaction).finalisedAt:
    This value should be of type string. (code ba785a8c-82cb-4283-967c-3cf342181b40)
Object(EoneoPay\PhpSdk\Endpoints\Transaction).fundingSource:
    This value should be of type \EoneoPay\PhpSdk\Endpoints\PaymentSource. (code ba785a8c-82cb-4283-967c-3cf342181b40)
Object(EoneoPay\PhpSdk\Endpoints\Transaction).metadata:
    This value should be of type array. (code ba785a8c-82cb-4283-967c-3cf342181b40)
Object(EoneoPay\PhpSdk\Endpoints\Transaction).parent:
    This value should be of type \EoneoPay\PhpSdk\Endpoints\Transaction. (code ba785a8c-82cb-4283-967c-3cf342181b40)
Object(EoneoPay\PhpSdk\Endpoints\Transaction).paymentDestination:
    This value should be of type \EoneoPay\PhpSdk\Endpoints\PaymentSource. (code ba785a8c-82cb-4283-967c-3cf342181b40)
Object(EoneoPay\PhpSdk\Endpoints\Transaction).paymentSource:
    This value should be of type \EoneoPay\PhpSdk\Endpoints\PaymentSource. (code ba785a8c-82cb-4283-967c-3cf342181b40)
Object(EoneoPay\PhpSdk\Endpoints\Transaction).response:
    This value should be of type array. (code ba785a8c-82cb-4283-967c-3cf342181b40)
Object(EoneoPay\PhpSdk\Endpoints\Transaction).security:
    This value should be of type \EoneoPay\PhpSdk\Endpoints\Security. (code ba785a8c-82cb-4283-967c-3cf342181b40)
Object(EoneoPay\PhpSdk\Endpoints\Transaction).state:
    This value should not be blank. (code c1051bb4-d103-4f74-8988-acbcafc7fdc3)
Object(EoneoPay\PhpSdk\Endpoints\Transaction).state:
    This value should be positive. (code 778b7ae0-84d3-481a-9dec-35fdb64b1d78)
Object(EoneoPay\PhpSdk\Endpoints\Transaction).state:
    This value should be of type int. (code ba785a8c-82cb-4283-967c-3cf342181b40)
Object(EoneoPay\PhpSdk\Endpoints\Transaction).status:
    This value should be of type string. (code ba785a8c-82cb-4283-967c-3cf342181b40)
Object(EoneoPay\PhpSdk\Endpoints\Transaction).transactionId:
    This value should be of type string. (code ba785a8c-82cb-4283-967c-3cf342181b40)
Object(EoneoPay\PhpSdk\Endpoints\Transaction).updatedAt:
    This value is not a valid datetime. (code 1a9da513-2640-4f84-9b6a-4d99dcddc628)
Object(EoneoPay\PhpSdk\Endpoints\Transaction).updatedAt:
    This value should be of type string. (code ba785a8c-82cb-4283-967c-3cf342181b40)
Object(EoneoPay\PhpSdk\Endpoints\Transaction).user:
    This value should be of type \EoneoPay\PhpSdk\Endpoints\User. (code ba785a8c-82cb-4283-967c-3cf342181b40)

ERR,
        ];
    }

    /**
     * Validates that the validation failures from various scenarios matches the expected output string from the
     * validator.
     *
     * @param mixed[] $input
     * @param string $expectedErrors
     *
     * @dataProvider getInvalidDataScenarios
     *
     * @return void
     */
    public function testTransactionValidationFailureCases(array $input, string $expectedErrors): void
    {
        $validator = $this->getValidator();
        $entity = new Transaction($input);

        $result = $validator->validate($entity);

        $this->assertConstraints($expectedErrors, $result);
    }
}
