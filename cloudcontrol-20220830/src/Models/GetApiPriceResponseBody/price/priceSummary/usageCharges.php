<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudcontrol\V20220830\Models\GetApiPriceResponseBody\price\priceSummary;

use AlibabaCloud\Dara\Model;

class usageCharges extends Model
{
    /**
     * @var float
     */
    public $assumedQuantity;

    /**
     * @var float
     */
    public $assumedQuantityCost;

    /**
     * @var string
     */
    public $moduleCode;

    /**
     * @var float
     */
    public $originalPricePerUnit;

    /**
     * @var float
     */
    public $pricePerUnit;

    /**
     * @var string
     */
    public $unit;
    protected $_name = [
        'assumedQuantity' => 'assumedQuantity',
        'assumedQuantityCost' => 'assumedQuantityCost',
        'moduleCode' => 'moduleCode',
        'originalPricePerUnit' => 'originalPricePerUnit',
        'pricePerUnit' => 'pricePerUnit',
        'unit' => 'unit',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->assumedQuantity) {
            $res['assumedQuantity'] = $this->assumedQuantity;
        }

        if (null !== $this->assumedQuantityCost) {
            $res['assumedQuantityCost'] = $this->assumedQuantityCost;
        }

        if (null !== $this->moduleCode) {
            $res['moduleCode'] = $this->moduleCode;
        }

        if (null !== $this->originalPricePerUnit) {
            $res['originalPricePerUnit'] = $this->originalPricePerUnit;
        }

        if (null !== $this->pricePerUnit) {
            $res['pricePerUnit'] = $this->pricePerUnit;
        }

        if (null !== $this->unit) {
            $res['unit'] = $this->unit;
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
        if (isset($map['assumedQuantity'])) {
            $model->assumedQuantity = $map['assumedQuantity'];
        }

        if (isset($map['assumedQuantityCost'])) {
            $model->assumedQuantityCost = $map['assumedQuantityCost'];
        }

        if (isset($map['moduleCode'])) {
            $model->moduleCode = $map['moduleCode'];
        }

        if (isset($map['originalPricePerUnit'])) {
            $model->originalPricePerUnit = $map['originalPricePerUnit'];
        }

        if (isset($map['pricePerUnit'])) {
            $model->pricePerUnit = $map['pricePerUnit'];
        }

        if (isset($map['unit'])) {
            $model->unit = $map['unit'];
        }

        return $model;
    }
}
