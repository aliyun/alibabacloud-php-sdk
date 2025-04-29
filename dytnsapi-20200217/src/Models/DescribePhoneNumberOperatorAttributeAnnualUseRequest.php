<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dytnsapi\V20200217\Models;

use AlibabaCloud\Dara\Model;

class DescribePhoneNumberOperatorAttributeAnnualUseRequest extends Model
{
    /**
     * @var string
     */
    public $authCode;

    /**
     * @var string
     */
    public $inputNumber;

    /**
     * @var string
     */
    public $mask;
    protected $_name = [
        'authCode' => 'AuthCode',
        'inputNumber' => 'InputNumber',
        'mask' => 'Mask',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->authCode) {
            $res['AuthCode'] = $this->authCode;
        }

        if (null !== $this->inputNumber) {
            $res['InputNumber'] = $this->inputNumber;
        }

        if (null !== $this->mask) {
            $res['Mask'] = $this->mask;
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
        if (isset($map['AuthCode'])) {
            $model->authCode = $map['AuthCode'];
        }

        if (isset($map['InputNumber'])) {
            $model->inputNumber = $map['InputNumber'];
        }

        if (isset($map['Mask'])) {
            $model->mask = $map['Mask'];
        }

        return $model;
    }
}
