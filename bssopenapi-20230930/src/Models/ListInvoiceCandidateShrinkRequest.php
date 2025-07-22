<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20230930\Models;

use AlibabaCloud\Tea\Model;

class ListInvoiceCandidateShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $billingCyclesShrink;

    /**
     * @var string
     */
    public $businessIdsShrink;

    /**
     * @example 1
     *
     * @var int
     */
    public $currentPage;

    /**
     * @var string
     */
    public $ecIdAccountIdsShrink;

    /**
     * @example 2025-07-01 00:00:00
     *
     * @var string
     */
    public $endTime;

    /**
     * @var string
     */
    public $invoiceIssuersShrink;

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
     * @var string
     */
    public $statusShrink;

    /**
     * @var string
     */
    public $typesShrink;
    protected $_name = [
        'billingCyclesShrink' => 'BillingCycles',
        'businessIdsShrink' => 'BusinessIds',
        'currentPage' => 'CurrentPage',
        'ecIdAccountIdsShrink' => 'EcIdAccountIds',
        'endTime' => 'EndTime',
        'invoiceIssuersShrink' => 'InvoiceIssuers',
        'nbid' => 'Nbid',
        'pageSize' => 'PageSize',
        'startTime' => 'StartTime',
        'statusShrink' => 'Status',
        'typesShrink' => 'Types',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->billingCyclesShrink) {
            $res['BillingCycles'] = $this->billingCyclesShrink;
        }
        if (null !== $this->businessIdsShrink) {
            $res['BusinessIds'] = $this->businessIdsShrink;
        }
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }
        if (null !== $this->ecIdAccountIdsShrink) {
            $res['EcIdAccountIds'] = $this->ecIdAccountIdsShrink;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->invoiceIssuersShrink) {
            $res['InvoiceIssuers'] = $this->invoiceIssuersShrink;
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
        if (null !== $this->statusShrink) {
            $res['Status'] = $this->statusShrink;
        }
        if (null !== $this->typesShrink) {
            $res['Types'] = $this->typesShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListInvoiceCandidateShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BillingCycles'])) {
            $model->billingCyclesShrink = $map['BillingCycles'];
        }
        if (isset($map['BusinessIds'])) {
            $model->businessIdsShrink = $map['BusinessIds'];
        }
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }
        if (isset($map['EcIdAccountIds'])) {
            $model->ecIdAccountIdsShrink = $map['EcIdAccountIds'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['InvoiceIssuers'])) {
            $model->invoiceIssuersShrink = $map['InvoiceIssuers'];
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
            $model->statusShrink = $map['Status'];
        }
        if (isset($map['Types'])) {
            $model->typesShrink = $map['Types'];
        }

        return $model;
    }
}
