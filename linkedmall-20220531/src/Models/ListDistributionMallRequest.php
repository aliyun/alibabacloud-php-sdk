<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20220531\Models;

use AlibabaCloud\Tea\Model;

class ListDistributionMallRequest extends Model
{
    /**
     * @example 113428528
     *
     * @var string
     */
    public $channelSupplierId;

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
     * @example 2021-10-26 10:29:13
     *
     * @var string
     */
    public $endDate;

    /**
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @example 20
     *
     * @var int
     */
    public $pageSize;

    /**
     * @example 2021-10-24 15:29:38
     *
     * @var string
     */
    public $startDate;

    /**
     * @var string
     */
    public $tenantId;
    protected $_name = [
        'channelSupplierId'    => 'ChannelSupplierId',
        'distributionMallId'   => 'DistributionMallId',
        'distributionMallName' => 'DistributionMallName',
        'distributorId'        => 'DistributorId',
        'endDate'              => 'EndDate',
        'pageNumber'           => 'PageNumber',
        'pageSize'             => 'PageSize',
        'startDate'            => 'StartDate',
        'tenantId'             => 'TenantId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->channelSupplierId) {
            $res['ChannelSupplierId'] = $this->channelSupplierId;
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
        if (null !== $this->endDate) {
            $res['EndDate'] = $this->endDate;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->startDate) {
            $res['StartDate'] = $this->startDate;
        }
        if (null !== $this->tenantId) {
            $res['TenantId'] = $this->tenantId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListDistributionMallRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ChannelSupplierId'])) {
            $model->channelSupplierId = $map['ChannelSupplierId'];
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
        if (isset($map['EndDate'])) {
            $model->endDate = $map['EndDate'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['StartDate'])) {
            $model->startDate = $map['StartDate'];
        }
        if (isset($map['TenantId'])) {
            $model->tenantId = $map['TenantId'];
        }

        return $model;
    }
}
