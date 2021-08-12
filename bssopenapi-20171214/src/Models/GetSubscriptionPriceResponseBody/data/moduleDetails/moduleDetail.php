<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models\GetSubscriptionPriceResponseBody\data\moduleDetails;

use AlibabaCloud\Tea\Model;

class moduleDetail extends Model
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
     * @var float
     */
    public $unitPrice;

    /**
     * @var float
     */
    public $originalCost;

    /**
     * @var string
     */
    public $moduleCode;
    protected $_name = [
        'costAfterDiscount' => 'CostAfterDiscount',
        'invoiceDiscount'   => 'InvoiceDiscount',
        'unitPrice'         => 'UnitPrice',
        'originalCost'      => 'OriginalCost',
        'moduleCode'        => 'ModuleCode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->costAfterDiscount) {
            $res['CostAfterDiscount'] = $this->costAfterDiscount;
        }
        if (null !== $this->invoiceDiscount) {
            $res['InvoiceDiscount'] = $this->invoiceDiscount;
        }
        if (null !== $this->unitPrice) {
            $res['UnitPrice'] = $this->unitPrice;
        }
        if (null !== $this->originalCost) {
            $res['OriginalCost'] = $this->originalCost;
        }
        if (null !== $this->moduleCode) {
            $res['ModuleCode'] = $this->moduleCode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return moduleDetail
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CostAfterDiscount'])) {
            $model->costAfterDiscount = $map['CostAfterDiscount'];
        }
        if (isset($map['InvoiceDiscount'])) {
            $model->invoiceDiscount = $map['InvoiceDiscount'];
        }
        if (isset($map['UnitPrice'])) {
            $model->unitPrice = $map['UnitPrice'];
        }
        if (isset($map['OriginalCost'])) {
            $model->originalCost = $map['OriginalCost'];
        }
        if (isset($map['ModuleCode'])) {
            $model->moduleCode = $map['ModuleCode'];
        }

        return $model;
    }
}
