<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20230930\Models;

use AlibabaCloud\SDK\BssOpenApi\V20230930\Models\ListInvoiceCandidateRequest\ecIdAccountIds;
use AlibabaCloud\Tea\Model;

class ListInvoiceCandidateRequest extends Model
{
    /**
     * @var int[]
     */
    public $billingCycles;

    /**
     * @var string[]
     */
    public $businessIds;

    /**
     * @example 1
     *
     * @var int
     */
    public $currentPage;

    /**
     * @var ecIdAccountIds[]
     */
    public $ecIdAccountIds;

    /**
     * @example 2025-07-01 00:00:00
     *
     * @var string
     */
    public $endTime;

    /**
     * @var string[]
     */
    public $invoiceIssuers;

    /**
     * @example 2684201000001
     *
     * @var string
     */
    public $nbid;

    /**
     * @example 20
     *
     * @var int
     */
    public $pageSize;

    /**
     * @example 2025-06-01 00:00:00
     *
     * @var string
     */
    public $startTime;

    /**
     * @var int[]
     */
    public $status;

    /**
     * @var int[]
     */
    public $types;
    protected $_name = [
        'billingCycles' => 'BillingCycles',
        'businessIds' => 'BusinessIds',
        'currentPage' => 'CurrentPage',
        'ecIdAccountIds' => 'EcIdAccountIds',
        'endTime' => 'EndTime',
        'invoiceIssuers' => 'InvoiceIssuers',
        'nbid' => 'Nbid',
        'pageSize' => 'PageSize',
        'startTime' => 'StartTime',
        'status' => 'Status',
        'types' => 'Types',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->billingCycles) {
            $res['BillingCycles'] = $this->billingCycles;
        }
        if (null !== $this->businessIds) {
            $res['BusinessIds'] = $this->businessIds;
        }
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }
        if (null !== $this->ecIdAccountIds) {
            $res['EcIdAccountIds'] = [];
            if (null !== $this->ecIdAccountIds && \is_array($this->ecIdAccountIds)) {
                $n = 0;
                foreach ($this->ecIdAccountIds as $item) {
                    $res['EcIdAccountIds'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->invoiceIssuers) {
            $res['InvoiceIssuers'] = $this->invoiceIssuers;
        }
        if (null !== $this->nbid) {
            $res['Nbid'] = $this->nbid;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->types) {
            $res['Types'] = $this->types;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListInvoiceCandidateRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BillingCycles'])) {
            if (!empty($map['BillingCycles'])) {
                $model->billingCycles = $map['BillingCycles'];
            }
        }
        if (isset($map['BusinessIds'])) {
            if (!empty($map['BusinessIds'])) {
                $model->businessIds = $map['BusinessIds'];
            }
        }
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }
        if (isset($map['EcIdAccountIds'])) {
            if (!empty($map['EcIdAccountIds'])) {
                $model->ecIdAccountIds = [];
                $n = 0;
                foreach ($map['EcIdAccountIds'] as $item) {
                    $model->ecIdAccountIds[$n++] = null !== $item ? ecIdAccountIds::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['InvoiceIssuers'])) {
            if (!empty($map['InvoiceIssuers'])) {
                $model->invoiceIssuers = $map['InvoiceIssuers'];
            }
        }
        if (isset($map['Nbid'])) {
            $model->nbid = $map['Nbid'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['Status'])) {
            if (!empty($map['Status'])) {
                $model->status = $map['Status'];
            }
        }
        if (isset($map['Types'])) {
            if (!empty($map['Types'])) {
                $model->types = $map['Types'];
            }
        }

        return $model;
    }
}
