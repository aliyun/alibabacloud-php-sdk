<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudcontrol\V20220830\Models\GetPriceResponseBody\price;

use AlibabaCloud\Dara\Model;

class moduleDetails extends Model
{
    /**
     * @var float
     */
    public $costAfterDiscount;

    /**
     * @var float
     */
    public $invoiceDiscount;

    /**
     * @var string
     */
    public $moduleCode;

    /**
     * @var string
     */
    public $moduleName;

    /**
     * @var float
     */
    public $originalCost;

    /**
     * @var string
     */
    public $priceType;
    protected $_name = [
        'costAfterDiscount' => 'costAfterDiscount',
        'invoiceDiscount' => 'invoiceDiscount',
        'moduleCode' => 'moduleCode',
        'moduleName' => 'moduleName',
        'originalCost' => 'originalCost',
        'priceType' => 'priceType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->costAfterDiscount) {
            $res['costAfterDiscount'] = $this->costAfterDiscount;
        }

        if (null !== $this->invoiceDiscount) {
            $res['invoiceDiscount'] = $this->invoiceDiscount;
        }

        if (null !== $this->moduleCode) {
            $res['moduleCode'] = $this->moduleCode;
        }

        if (null !== $this->moduleName) {
            $res['moduleName'] = $this->moduleName;
        }

        if (null !== $this->originalCost) {
            $res['originalCost'] = $this->originalCost;
        }

        if (null !== $this->priceType) {
            $res['priceType'] = $this->priceType;
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
        if (isset($map['costAfterDiscount'])) {
            $model->costAfterDiscount = $map['costAfterDiscount'];
        }

        if (isset($map['invoiceDiscount'])) {
            $model->invoiceDiscount = $map['invoiceDiscount'];
        }

        if (isset($map['moduleCode'])) {
            $model->moduleCode = $map['moduleCode'];
        }

        if (isset($map['moduleName'])) {
            $model->moduleName = $map['moduleName'];
        }

        if (isset($map['originalCost'])) {
            $model->originalCost = $map['originalCost'];
        }

        if (isset($map['priceType'])) {
            $model->priceType = $map['priceType'];
        }

        return $model;
    }
}
