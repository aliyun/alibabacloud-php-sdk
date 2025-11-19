<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wuyingpersonalpc\V20251111\Models\GetProductListResponseBody\displayInfo;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Wuyingpersonalpc\V20251111\Models\GetProductListResponseBody\displayInfo\productList\skuList;

class productList extends Model
{
    /**
     * @var string
     */
    public $displayAttribute;

    /**
     * @var string
     */
    public $displayConfig;

    /**
     * @var string
     */
    public $dynamicAttribute;

    /**
     * @var bool
     */
    public $isEnable;

    /**
     * @var int
     */
    public $modificationLevel;

    /**
     * @var string
     */
    public $productCode;

    /**
     * @var string
     */
    public $productDesc;

    /**
     * @var string
     */
    public $productGroup;

    /**
     * @var string
     */
    public $productName;

    /**
     * @var string
     */
    public $productType;

    /**
     * @var skuList[]
     */
    public $skuList;
    protected $_name = [
        'displayAttribute' => 'DisplayAttribute',
        'displayConfig' => 'DisplayConfig',
        'dynamicAttribute' => 'DynamicAttribute',
        'isEnable' => 'IsEnable',
        'modificationLevel' => 'ModificationLevel',
        'productCode' => 'ProductCode',
        'productDesc' => 'ProductDesc',
        'productGroup' => 'ProductGroup',
        'productName' => 'ProductName',
        'productType' => 'ProductType',
        'skuList' => 'SkuList',
    ];

    public function validate()
    {
        if (\is_array($this->skuList)) {
            Model::validateArray($this->skuList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->displayAttribute) {
            $res['DisplayAttribute'] = $this->displayAttribute;
        }

        if (null !== $this->displayConfig) {
            $res['DisplayConfig'] = $this->displayConfig;
        }

        if (null !== $this->dynamicAttribute) {
            $res['DynamicAttribute'] = $this->dynamicAttribute;
        }

        if (null !== $this->isEnable) {
            $res['IsEnable'] = $this->isEnable;
        }

        if (null !== $this->modificationLevel) {
            $res['ModificationLevel'] = $this->modificationLevel;
        }

        if (null !== $this->productCode) {
            $res['ProductCode'] = $this->productCode;
        }

        if (null !== $this->productDesc) {
            $res['ProductDesc'] = $this->productDesc;
        }

        if (null !== $this->productGroup) {
            $res['ProductGroup'] = $this->productGroup;
        }

        if (null !== $this->productName) {
            $res['ProductName'] = $this->productName;
        }

        if (null !== $this->productType) {
            $res['ProductType'] = $this->productType;
        }

        if (null !== $this->skuList) {
            if (\is_array($this->skuList)) {
                $res['SkuList'] = [];
                $n1 = 0;
                foreach ($this->skuList as $item1) {
                    $res['SkuList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['DisplayAttribute'])) {
            $model->displayAttribute = $map['DisplayAttribute'];
        }

        if (isset($map['DisplayConfig'])) {
            $model->displayConfig = $map['DisplayConfig'];
        }

        if (isset($map['DynamicAttribute'])) {
            $model->dynamicAttribute = $map['DynamicAttribute'];
        }

        if (isset($map['IsEnable'])) {
            $model->isEnable = $map['IsEnable'];
        }

        if (isset($map['ModificationLevel'])) {
            $model->modificationLevel = $map['ModificationLevel'];
        }

        if (isset($map['ProductCode'])) {
            $model->productCode = $map['ProductCode'];
        }

        if (isset($map['ProductDesc'])) {
            $model->productDesc = $map['ProductDesc'];
        }

        if (isset($map['ProductGroup'])) {
            $model->productGroup = $map['ProductGroup'];
        }

        if (isset($map['ProductName'])) {
            $model->productName = $map['ProductName'];
        }

        if (isset($map['ProductType'])) {
            $model->productType = $map['ProductType'];
        }

        if (isset($map['SkuList'])) {
            if (!empty($map['SkuList'])) {
                $model->skuList = [];
                $n1 = 0;
                foreach ($map['SkuList'] as $item1) {
                    $model->skuList[$n1] = skuList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
