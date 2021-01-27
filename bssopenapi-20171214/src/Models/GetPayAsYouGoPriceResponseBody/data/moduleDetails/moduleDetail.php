<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models\GetPayAsYouGoPriceResponseBody\data\moduleDetails;

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
     * @var string
     */
    public $moduleCode;

    /**
     * @var float
     */
    public $originalCost;

    /**
     * @var float
     */
    public $unitPrice;
    protected $_name = [
        'costAfterDiscount' => 'CostAfterDiscount',
        'invoiceDiscount'   => 'InvoiceDiscount',
        'moduleCode'        => 'ModuleCode',
        'originalCost'      => 'OriginalCost',
        'unitPrice'         => 'UnitPrice',
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
        if (null !== $this->moduleCode) {
            $res['ModuleCode'] = $this->moduleCode;
        }
        if (null !== $this->originalCost) {
            $res['OriginalCost'] = $this->originalCost;
        }
        if (null !== $this->unitPrice) {
            $res['UnitPrice'] = $this->unitPrice;
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
        if (isset($map['ModuleCode'])) {
            $model->moduleCode = $map['ModuleCode'];
        }
        if (isset($map['OriginalCost'])) {
            $model->originalCost = $map['OriginalCost'];
        }
        if (isset($map['UnitPrice'])) {
            $model->unitPrice = $map['UnitPrice'];
        }

        return $model;
    }
}
