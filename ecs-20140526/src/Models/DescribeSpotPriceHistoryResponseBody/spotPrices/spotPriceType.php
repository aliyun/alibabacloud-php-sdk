<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeSpotPriceHistoryResponseBody\spotPrices;

use AlibabaCloud\Tea\Model;

class spotPriceType extends Model
{
    /**
     * @example ecs.g5.large
     *
     * @var string
     */
    public $instanceType;

    /**
     * @description Details about the price history of the preemptible instance.
     *
     * @example optimized
     *
     * @var string
     */
    public $ioOptimized;

    /**
     * @description The time that corresponds to the queried spot price. The time is in the `yyyy-MM-ddTHH:mm:ssZ` format.
     *
     * @example vpc
     *
     * @var string
     */
    public $networkType;

    /**
     * @example 0.354
     *
     * @var float
     */
    public $originPrice;

    /**
     * @description The zone ID of the preemptible instance.
     *
     * @example 0.036
     *
     * @var float
     */
    public $spotPrice;

    /**
     * @description The spot price (market price) of the preemptible instance.
     *
     * @example 2019-11-19T06:00:00Z
     *
     * @var string
     */
    public $timestamp;

    /**
     * @description Indicates whether the preemptible instance is I/O optimized.
     *
     * @example cn-hangzhou-c
     *
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'instanceType' => 'InstanceType',
        'ioOptimized'  => 'IoOptimized',
        'networkType'  => 'NetworkType',
        'originPrice'  => 'OriginPrice',
        'spotPrice'    => 'SpotPrice',
        'timestamp'    => 'Timestamp',
        'zoneId'       => 'ZoneId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }
        if (null !== $this->ioOptimized) {
            $res['IoOptimized'] = $this->ioOptimized;
        }
        if (null !== $this->networkType) {
            $res['NetworkType'] = $this->networkType;
        }
        if (null !== $this->originPrice) {
            $res['OriginPrice'] = $this->originPrice;
        }
        if (null !== $this->spotPrice) {
            $res['SpotPrice'] = $this->spotPrice;
        }
        if (null !== $this->timestamp) {
            $res['Timestamp'] = $this->timestamp;
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return spotPriceType
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }
        if (isset($map['IoOptimized'])) {
            $model->ioOptimized = $map['IoOptimized'];
        }
        if (isset($map['NetworkType'])) {
            $model->networkType = $map['NetworkType'];
        }
        if (isset($map['OriginPrice'])) {
            $model->originPrice = $map['OriginPrice'];
        }
        if (isset($map['SpotPrice'])) {
            $model->spotPrice = $map['SpotPrice'];
        }
        if (isset($map['Timestamp'])) {
            $model->timestamp = $map['Timestamp'];
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}
