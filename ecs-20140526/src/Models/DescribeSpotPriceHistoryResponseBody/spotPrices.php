<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeSpotPriceHistoryResponseBody;

use AlibabaCloud\Tea\Model;

class spotPrices extends Model
{
    /**
     * @var string
     */
    public $ioOptimized;

    /**
     * @var string
     */
    public $zoneId;

    /**
     * @var float
     */
    public $spotPrice;

    /**
     * @var string
     */
    public $timestamp;

    /**
     * @var string
     */
    public $networkType;

    /**
     * @var string
     */
    public $instanceType;

    /**
     * @var float
     */
    public $originPrice;
    protected $_name = [
        'ioOptimized'  => 'IoOptimized',
        'zoneId'       => 'ZoneId',
        'spotPrice'    => 'SpotPrice',
        'timestamp'    => 'Timestamp',
        'networkType'  => 'NetworkType',
        'instanceType' => 'InstanceType',
        'originPrice'  => 'OriginPrice',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ioOptimized) {
            $res['IoOptimized'] = $this->ioOptimized;
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }
        if (null !== $this->spotPrice) {
            $res['SpotPrice'] = $this->spotPrice;
        }
        if (null !== $this->timestamp) {
            $res['Timestamp'] = $this->timestamp;
        }
        if (null !== $this->networkType) {
            $res['NetworkType'] = $this->networkType;
        }
        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }
        if (null !== $this->originPrice) {
            $res['OriginPrice'] = $this->originPrice;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return spotPrices
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IoOptimized'])) {
            $model->ioOptimized = $map['IoOptimized'];
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }
        if (isset($map['SpotPrice'])) {
            $model->spotPrice = $map['SpotPrice'];
        }
        if (isset($map['Timestamp'])) {
            $model->timestamp = $map['Timestamp'];
        }
        if (isset($map['NetworkType'])) {
            $model->networkType = $map['NetworkType'];
        }
        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }
        if (isset($map['OriginPrice'])) {
            $model->originPrice = $map['OriginPrice'];
        }

        return $model;
    }
}
