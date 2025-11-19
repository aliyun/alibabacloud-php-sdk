<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wuyingpersonalpc\V20251111\Models\GetProductListResponseBody\displayInfo\productList;

use AlibabaCloud\Dara\Model;

class skuList extends Model
{
    /**
     * @var string
     */
    public $appleSkuCode;

    /**
     * @var string
     */
    public $attribute;

    /**
     * @var string
     */
    public $purchaseMode;

    /**
     * @var string
     */
    public $skuCode;

    /**
     * @var string
     */
    public $skuDesc;

    /**
     * @var string
     */
    public $skuName;
    protected $_name = [
        'appleSkuCode' => 'AppleSkuCode',
        'attribute' => 'Attribute',
        'purchaseMode' => 'PurchaseMode',
        'skuCode' => 'SkuCode',
        'skuDesc' => 'SkuDesc',
        'skuName' => 'SkuName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appleSkuCode) {
            $res['AppleSkuCode'] = $this->appleSkuCode;
        }

        if (null !== $this->attribute) {
            $res['Attribute'] = $this->attribute;
        }

        if (null !== $this->purchaseMode) {
            $res['PurchaseMode'] = $this->purchaseMode;
        }

        if (null !== $this->skuCode) {
            $res['SkuCode'] = $this->skuCode;
        }

        if (null !== $this->skuDesc) {
            $res['SkuDesc'] = $this->skuDesc;
        }

        if (null !== $this->skuName) {
            $res['SkuName'] = $this->skuName;
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
        if (isset($map['AppleSkuCode'])) {
            $model->appleSkuCode = $map['AppleSkuCode'];
        }

        if (isset($map['Attribute'])) {
            $model->attribute = $map['Attribute'];
        }

        if (isset($map['PurchaseMode'])) {
            $model->purchaseMode = $map['PurchaseMode'];
        }

        if (isset($map['SkuCode'])) {
            $model->skuCode = $map['SkuCode'];
        }

        if (isset($map['SkuDesc'])) {
            $model->skuDesc = $map['SkuDesc'];
        }

        if (isset($map['SkuName'])) {
            $model->skuName = $map['SkuName'];
        }

        return $model;
    }
}
