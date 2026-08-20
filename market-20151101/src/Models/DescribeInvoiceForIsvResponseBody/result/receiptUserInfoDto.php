<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Market\V20151101\Models\DescribeInvoiceForIsvResponseBody\result;

use AlibabaCloud\Dara\Model;

class receiptUserInfoDto extends Model
{
    /**
     * @var string
     */
    public $bankAccount;

    /**
     * @var string
     */
    public $bankName;

    /**
     * @var string
     */
    public $regAddress;

    /**
     * @var string
     */
    public $regPhone;

    /**
     * @var string
     */
    public $taxNumber;
    protected $_name = [
        'bankAccount' => 'BankAccount',
        'bankName' => 'BankName',
        'regAddress' => 'RegAddress',
        'regPhone' => 'RegPhone',
        'taxNumber' => 'TaxNumber',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bankAccount) {
            $res['BankAccount'] = $this->bankAccount;
        }

        if (null !== $this->bankName) {
            $res['BankName'] = $this->bankName;
        }

        if (null !== $this->regAddress) {
            $res['RegAddress'] = $this->regAddress;
        }

        if (null !== $this->regPhone) {
            $res['RegPhone'] = $this->regPhone;
        }

        if (null !== $this->taxNumber) {
            $res['TaxNumber'] = $this->taxNumber;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BankAccount'])) {
            $model->bankAccount = $map['BankAccount'];
        }

        if (isset($map['BankName'])) {
            $model->bankName = $map['BankName'];
        }

        if (isset($map['RegAddress'])) {
            $model->regAddress = $map['RegAddress'];
        }

        if (isset($map['RegPhone'])) {
            $model->regPhone = $map['RegPhone'];
        }

        if (isset($map['TaxNumber'])) {
            $model->taxNumber = $map['TaxNumber'];
        }

        return $model;
    }
}
