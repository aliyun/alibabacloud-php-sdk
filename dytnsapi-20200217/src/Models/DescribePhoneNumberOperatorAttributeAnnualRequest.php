<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dytnsapi\V20200217\Models;

use AlibabaCloud\Dara\Model;

class DescribePhoneNumberOperatorAttributeAnnualRequest extends Model
{
    /**
     * @var string
     */
    public $authCode;
    /**
     * @var string
     */
    public $mask;
    /**
     * @var string
     */
    public $number;
    protected $_name = [
        'authCode' => 'AuthCode',
        'mask'     => 'Mask',
        'number'   => 'Number',
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

        if (null !== $this->mask) {
            $res['Mask'] = $this->mask;
        }

        if (null !== $this->number) {
            $res['Number'] = $this->number;
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

        if (isset($map['Mask'])) {
            $model->mask = $map['Mask'];
        }

        if (isset($map['Number'])) {
            $model->number = $map['Number'];
        }

        return $model;
    }
}
