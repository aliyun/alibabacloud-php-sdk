<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudauthintl\V20220809\Models;

use AlibabaCloud\Dara\Model;

class AddressCompareIntlRequest extends Model
{
    /**
     * @var string
     */
    public $defaultCountry;

    /**
     * @var string
     */
    public $productCode;

    /**
     * @var string
     */
    public $text1;

    /**
     * @var string
     */
    public $text2;
    protected $_name = [
        'defaultCountry' => 'DefaultCountry',
        'productCode' => 'ProductCode',
        'text1' => 'Text1',
        'text2' => 'Text2',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->defaultCountry) {
            $res['DefaultCountry'] = $this->defaultCountry;
        }

        if (null !== $this->productCode) {
            $res['ProductCode'] = $this->productCode;
        }

        if (null !== $this->text1) {
            $res['Text1'] = $this->text1;
        }

        if (null !== $this->text2) {
            $res['Text2'] = $this->text2;
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
        if (isset($map['DefaultCountry'])) {
            $model->defaultCountry = $map['DefaultCountry'];
        }

        if (isset($map['ProductCode'])) {
            $model->productCode = $map['ProductCode'];
        }

        if (isset($map['Text1'])) {
            $model->text1 = $map['Text1'];
        }

        if (isset($map['Text2'])) {
            $model->text2 = $map['Text2'];
        }

        return $model;
    }
}
