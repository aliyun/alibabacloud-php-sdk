<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20230930\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\BssOpenApi\V20230930\Models\ListInvoiceCandidateRequest\ecIdAccountIds;

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
     * @var int
     */
    public $currentPage;

    /**
     * @var ecIdAccountIds[]
     */
    public $ecIdAccountIds;

    /**
     * @var string
     */
    public $endTime;

    /**
     * @var string[]
     */
    public $invoiceIssuers;

    /**
     * @var string
     */
    public $nbid;

    /**
     * @var int
     */
    public $pageSize;

    /**
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

    public function validate()
    {
        if (\is_array($this->billingCycles)) {
            Model::validateArray($this->billingCycles);
        }
        if (\is_array($this->businessIds)) {
            Model::validateArray($this->businessIds);
        }
        if (\is_array($this->ecIdAccountIds)) {
            Model::validateArray($this->ecIdAccountIds);
        }
        if (\is_array($this->invoiceIssuers)) {
            Model::validateArray($this->invoiceIssuers);
        }
        if (\is_array($this->status)) {
            Model::validateArray($this->status);
        }
        if (\is_array($this->types)) {
            Model::validateArray($this->types);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->billingCycles) {
            if (\is_array($this->billingCycles)) {
                $res['BillingCycles'] = [];
                $n1 = 0;
                foreach ($this->billingCycles as $item1) {
                    $res['BillingCycles'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->businessIds) {
            if (\is_array($this->businessIds)) {
                $res['BusinessIds'] = [];
                $n1 = 0;
                foreach ($this->businessIds as $item1) {
                    $res['BusinessIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }

        if (null !== $this->ecIdAccountIds) {
            if (\is_array($this->ecIdAccountIds)) {
                $res['EcIdAccountIds'] = [];
                $n1 = 0;
                foreach ($this->ecIdAccountIds as $item1) {
                    $res['EcIdAccountIds'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }

        if (null !== $this->invoiceIssuers) {
            if (\is_array($this->invoiceIssuers)) {
                $res['InvoiceIssuers'] = [];
                $n1 = 0;
                foreach ($this->invoiceIssuers as $item1) {
                    $res['InvoiceIssuers'][$n1] = $item1;
                    ++$n1;
                }
            }
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
            if (\is_array($this->status)) {
                $res['Status'] = [];
                $n1 = 0;
                foreach ($this->status as $item1) {
                    $res['Status'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->types) {
            if (\is_array($this->types)) {
                $res['Types'] = [];
                $n1 = 0;
                foreach ($this->types as $item1) {
                    $res['Types'][$n1] = $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['BillingCycles'])) {
            if (!empty($map['BillingCycles'])) {
                $model->billingCycles = [];
                $n1 = 0;
                foreach ($map['BillingCycles'] as $item1) {
                    $model->billingCycles[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['BusinessIds'])) {
            if (!empty($map['BusinessIds'])) {
                $model->businessIds = [];
                $n1 = 0;
                foreach ($map['BusinessIds'] as $item1) {
                    $model->businessIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }

        if (isset($map['EcIdAccountIds'])) {
            if (!empty($map['EcIdAccountIds'])) {
                $model->ecIdAccountIds = [];
                $n1 = 0;
                foreach ($map['EcIdAccountIds'] as $item1) {
                    $model->ecIdAccountIds[$n1] = ecIdAccountIds::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }

        if (isset($map['InvoiceIssuers'])) {
            if (!empty($map['InvoiceIssuers'])) {
                $model->invoiceIssuers = [];
                $n1 = 0;
                foreach ($map['InvoiceIssuers'] as $item1) {
                    $model->invoiceIssuers[$n1] = $item1;
                    ++$n1;
                }
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
                $model->status = [];
                $n1 = 0;
                foreach ($map['Status'] as $item1) {
                    $model->status[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Types'])) {
            if (!empty($map['Types'])) {
                $model->types = [];
                $n1 = 0;
                foreach ($map['Types'] as $item1) {
                    $model->types[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
