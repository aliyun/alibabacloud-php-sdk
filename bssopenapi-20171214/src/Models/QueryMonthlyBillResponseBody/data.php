<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryMonthlyBillResponseBody;

use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryMonthlyBillResponseBody\data\items;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var float
     */
    public $outstandingAmount;

    /**
     * @var string
     */
    public $billingCycle;

    /**
     * @var float
     */
    public $totalOutstandingAmount;

    /**
     * @var float
     */
    public $newInvoiceAmount;

    /**
     * @var items
     */
    public $items;
    protected $_name = [
        'outstandingAmount'      => 'OutstandingAmount',
        'billingCycle'           => 'BillingCycle',
        'totalOutstandingAmount' => 'TotalOutstandingAmount',
        'newInvoiceAmount'       => 'NewInvoiceAmount',
        'items'                  => 'Items',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->outstandingAmount) {
            $res['OutstandingAmount'] = $this->outstandingAmount;
        }
        if (null !== $this->billingCycle) {
            $res['BillingCycle'] = $this->billingCycle;
        }
        if (null !== $this->totalOutstandingAmount) {
            $res['TotalOutstandingAmount'] = $this->totalOutstandingAmount;
        }
        if (null !== $this->newInvoiceAmount) {
            $res['NewInvoiceAmount'] = $this->newInvoiceAmount;
        }
        if (null !== $this->items) {
            $res['Items'] = null !== $this->items ? $this->items->toMap() : null;
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
        if (isset($map['OutstandingAmount'])) {
            $model->outstandingAmount = $map['OutstandingAmount'];
        }
        if (isset($map['BillingCycle'])) {
            $model->billingCycle = $map['BillingCycle'];
        }
        if (isset($map['TotalOutstandingAmount'])) {
            $model->totalOutstandingAmount = $map['TotalOutstandingAmount'];
        }
        if (isset($map['NewInvoiceAmount'])) {
            $model->newInvoiceAmount = $map['NewInvoiceAmount'];
        }
        if (isset($map['Items'])) {
            $model->items = items::fromMap($map['Items']);
        }

        return $model;
    }
}
