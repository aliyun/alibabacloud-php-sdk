<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryMonthlyBillResponseBody;

use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryMonthlyBillResponseBody\data\items;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $billingCycle;

    /**
     * @var items
     */
    public $items;

    /**
     * @var float
     */
    public $newInvoiceAmount;

    /**
     * @var float
     */
    public $outstandingAmount;

    /**
     * @var float
     */
    public $totalOutstandingAmount;
    protected $_name = [
        'billingCycle'           => 'BillingCycle',
        'items'                  => 'Items',
        'newInvoiceAmount'       => 'NewInvoiceAmount',
        'outstandingAmount'      => 'OutstandingAmount',
        'totalOutstandingAmount' => 'TotalOutstandingAmount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->billingCycle) {
            $res['BillingCycle'] = $this->billingCycle;
        }
        if (null !== $this->items) {
            $res['Items'] = null !== $this->items ? $this->items->toMap() : null;
        }
        if (null !== $this->newInvoiceAmount) {
            $res['NewInvoiceAmount'] = $this->newInvoiceAmount;
        }
        if (null !== $this->outstandingAmount) {
            $res['OutstandingAmount'] = $this->outstandingAmount;
        }
        if (null !== $this->totalOutstandingAmount) {
            $res['TotalOutstandingAmount'] = $this->totalOutstandingAmount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BillingCycle'])) {
            $model->billingCycle = $map['BillingCycle'];
        }
        if (isset($map['Items'])) {
            $model->items = items::fromMap($map['Items']);
        }
        if (isset($map['NewInvoiceAmount'])) {
            $model->newInvoiceAmount = $map['NewInvoiceAmount'];
        }
        if (isset($map['OutstandingAmount'])) {
            $model->outstandingAmount = $map['OutstandingAmount'];
        }
        if (isset($map['TotalOutstandingAmount'])) {
            $model->totalOutstandingAmount = $map['TotalOutstandingAmount'];
        }

        return $model;
    }
}
