<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20220531\Models;

use AlibabaCloud\Tea\Model;

class QueryDistributionBillDetailRequest extends Model
{
    /**
     * @var string
     */
    public $billId;

    /**
     * @var string
     */
    public $billPeriod;

    /**
     * @var string
     */
    public $billStatus;

    /**
     * @var string
     */
    public $distributionMallId;

    /**
     * @var string
     */
    public $distributionMallName;

    /**
     * @var string
     */
    public $distributorId;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $tenantId;
    protected $_name = [
        'billId'               => 'BillId',
        'billPeriod'           => 'BillPeriod',
        'billStatus'           => 'BillStatus',
        'distributionMallId'   => 'DistributionMallId',
        'distributionMallName' => 'DistributionMallName',
        'distributorId'        => 'DistributorId',
        'pageNumber'           => 'PageNumber',
        'pageSize'             => 'PageSize',
        'tenantId'             => 'TenantId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->billId) {
            $res['BillId'] = $this->billId;
        }
        if (null !== $this->billPeriod) {
            $res['BillPeriod'] = $this->billPeriod;
        }
        if (null !== $this->billStatus) {
            $res['BillStatus'] = $this->billStatus;
        }
        if (null !== $this->distributionMallId) {
            $res['DistributionMallId'] = $this->distributionMallId;
        }
        if (null !== $this->distributionMallName) {
            $res['DistributionMallName'] = $this->distributionMallName;
        }
        if (null !== $this->distributorId) {
            $res['DistributorId'] = $this->distributorId;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->tenantId) {
            $res['TenantId'] = $this->tenantId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryDistributionBillDetailRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BillId'])) {
            $model->billId = $map['BillId'];
        }
        if (isset($map['BillPeriod'])) {
            $model->billPeriod = $map['BillPeriod'];
        }
        if (isset($map['BillStatus'])) {
            $model->billStatus = $map['BillStatus'];
        }
        if (isset($map['DistributionMallId'])) {
            $model->distributionMallId = $map['DistributionMallId'];
        }
        if (isset($map['DistributionMallName'])) {
            $model->distributionMallName = $map['DistributionMallName'];
        }
        if (isset($map['DistributorId'])) {
            $model->distributorId = $map['DistributorId'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['TenantId'])) {
            $model->tenantId = $map['TenantId'];
        }

        return $model;
    }
}
