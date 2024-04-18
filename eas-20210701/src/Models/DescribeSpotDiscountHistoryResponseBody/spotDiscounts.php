<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eas\V20210701\Models\DescribeSpotDiscountHistoryResponseBody;

use AlibabaCloud\Tea\Model;

class spotDiscounts extends Model
{
    /**
     * @example ecs.c7.large
     *
     * @var string
     */
    public $instanceType;

    /**
     * @example 0.1
     *
     * @var string
     */
    public $spotDiscount;

    /**
     * @example 2024-04-10T10:00:00Z
     *
     * @var string
     */
    public $timestamp;

    /**
     * @example cn-hangzhou-i
     *
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'instanceType' => 'InstanceType',
        'spotDiscount' => 'SpotDiscount',
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
        if (null !== $this->spotDiscount) {
            $res['SpotDiscount'] = $this->spotDiscount;
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
     * @return spotDiscounts
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }
        if (isset($map['SpotDiscount'])) {
            $model->spotDiscount = $map['SpotDiscount'];
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
