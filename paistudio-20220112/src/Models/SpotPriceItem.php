<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiStudio\V20220112\Models;

use AlibabaCloud\Tea\Model;

class SpotPriceItem extends Model
{
    /**
     * @example ml.gu8xf.8xlarge-gu108
     *
     * @var string
     */
    public $instanceType;

    /**
     * @example 0.1
     *
     * @var float
     */
    public $spotDiscount;

    /**
     * @example 2024-01-17T06:00:00Z
     *
     * @var string
     */
    public $timestamp;

    /**
     * @example cn-wulanchabu-a
     *
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'instanceType' => 'InstanceType',
        'spotDiscount' => 'SpotDiscount',
        'timestamp' => 'Timestamp',
        'zoneId' => 'ZoneId',
    ];

    public function validate() {}

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
     * @return SpotPriceItem
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
