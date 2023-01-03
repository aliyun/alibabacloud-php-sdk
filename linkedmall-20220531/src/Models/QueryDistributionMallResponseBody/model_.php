<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20220531\Models\QueryDistributionMallResponseBody;

use AlibabaCloud\Tea\Model;

class model_ extends Model
{
    /**
     * @var string
     */
    public $channelSupplierId;

    /**
     * @example 1
     *
     * @var string
     */
    public $distributionMallId;

    /**
     * @var string
     */
    public $distributionMallName;

    /**
     * @example SaaS
     *
     * @var string
     */
    public $distributionMallType;

    /**
     * @example 1
     *
     * @var string
     */
    public $distributorId;

    /**
     * @example 2022-10-31 23:59:59
     *
     * @var string
     */
    public $endDate;

    /**
     * @example 2021-12-10 00:00:00
     *
     * @var string
     */
    public $startDate;

    /**
     * @example ""
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'channelSupplierId'    => 'ChannelSupplierId',
        'distributionMallId'   => 'DistributionMallId',
        'distributionMallName' => 'DistributionMallName',
        'distributionMallType' => 'DistributionMallType',
        'distributorId'        => 'DistributorId',
        'endDate'              => 'EndDate',
        'startDate'            => 'StartDate',
        'status'               => 'Status',
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
        if (null !== $this->distributionMallType) {
            $res['DistributionMallType'] = $this->distributionMallType;
        }
        if (null !== $this->distributorId) {
            $res['DistributorId'] = $this->distributorId;
        }
        if (null !== $this->endDate) {
            $res['EndDate'] = $this->endDate;
        }
        if (null !== $this->startDate) {
            $res['StartDate'] = $this->startDate;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return model_
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
        if (isset($map['DistributionMallType'])) {
            $model->distributionMallType = $map['DistributionMallType'];
        }
        if (isset($map['DistributorId'])) {
            $model->distributorId = $map['DistributorId'];
        }
        if (isset($map['EndDate'])) {
            $model->endDate = $map['EndDate'];
        }
        if (isset($map['StartDate'])) {
            $model->startDate = $map['StartDate'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
