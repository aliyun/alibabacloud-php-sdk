<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudcontrol\V20220830\Models\PriceComponentsValue;

use AlibabaCloud\Dara\Model;

class usageCharges extends Model
{
    /**
     * @var string
     */
    public $moduleCode;

    /**
     * @var string
     */
    public $unit;

    /**
     * @var float
     */
    public $pricePerUnit;

    /**
     * @var float
     */
    public $originalPricePerUnit;

    /**
     * @var float
     */
    public $assumedQuantity;

    /**
     * @var float
     */
    public $assumedQuantityCost;
    protected $_name = [
        'moduleCode' => 'moduleCode',
        'unit' => 'unit',
        'pricePerUnit' => 'pricePerUnit',
        'originalPricePerUnit' => 'originalPricePerUnit',
        'assumedQuantity' => 'assumedQuantity',
        'assumedQuantityCost' => 'assumedQuantityCost',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->moduleCode) {
            $res['moduleCode'] = $this->moduleCode;
        }

        if (null !== $this->unit) {
            $res['unit'] = $this->unit;
        }

        if (null !== $this->pricePerUnit) {
            $res['pricePerUnit'] = $this->pricePerUnit;
        }

        if (null !== $this->originalPricePerUnit) {
            $res['originalPricePerUnit'] = $this->originalPricePerUnit;
        }

        if (null !== $this->assumedQuantity) {
            $res['assumedQuantity'] = $this->assumedQuantity;
        }

        if (null !== $this->assumedQuantityCost) {
            $res['assumedQuantityCost'] = $this->assumedQuantityCost;
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
        if (isset($map['moduleCode'])) {
            $model->moduleCode = $map['moduleCode'];
        }

        if (isset($map['unit'])) {
            $model->unit = $map['unit'];
        }

        if (isset($map['pricePerUnit'])) {
            $model->pricePerUnit = $map['pricePerUnit'];
        }

        if (isset($map['originalPricePerUnit'])) {
            $model->originalPricePerUnit = $map['originalPricePerUnit'];
        }

        if (isset($map['assumedQuantity'])) {
            $model->assumedQuantity = $map['assumedQuantity'];
        }

        if (isset($map['assumedQuantityCost'])) {
            $model->assumedQuantityCost = $map['assumedQuantityCost'];
        }

        return $model;
    }
}
