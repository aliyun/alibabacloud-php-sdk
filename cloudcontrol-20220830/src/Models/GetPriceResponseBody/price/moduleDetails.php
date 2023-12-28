<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudcontrol\V20220830\Models\GetPriceResponseBody\price;

use AlibabaCloud\Tea\Model;

class moduleDetails extends Model
{
    /**
     * @example 0.02
     *
     * @var float
     */
    public $costAfterDiscount;

    /**
     * @example 0.0
     *
     * @var float
     */
    public $invoiceDiscount;

    /**
     * @example InstanceRent
     *
     * @var string
     */
    public $moduleCode;

    /**
     * @example InstanceRent
     *
     * @var string
     */
    public $moduleName;

    /**
     * @example 1000.0
     *
     * @var float
     */
    public $originalCost;

    /**
     * @example 1.0
     *
     * @var float
     */
    public $priceType;
    protected $_name = [
        'costAfterDiscount' => 'costAfterDiscount',
        'invoiceDiscount'   => 'invoiceDiscount',
        'moduleCode'        => 'moduleCode',
        'moduleName'        => 'moduleName',
        'originalCost'      => 'originalCost',
        'priceType'         => 'priceType',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return moduleDetails
     */
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
