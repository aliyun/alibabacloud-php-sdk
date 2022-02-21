<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vs\V20181212\Models\DescribeVsStorageTrafficUsageDataResponseBody\trafficUsage;

use AlibabaCloud\Tea\Model;

class trafficUsageDataModule extends Model
{
    /**
     * @var string
     */
    public $bucket;

    /**
     * @var float
     */
    public $lanBandwidthInDataValue;

    /**
     * @var float
     */
    public $lanBandwidthOutDataValue;

    /**
     * @var int
     */
    public $lanTrafficInDataValue;

    /**
     * @var int
     */
    public $lanTrafficOutDataValue;

    /**
     * @var string
     */
    public $timeStamp;

    /**
     * @var float
     */
    public $wanBandwidthInDataValue;

    /**
     * @var float
     */
    public $wanBandwidthOutDataValue;

    /**
     * @var int
     */
    public $wanTrafficInDataValue;

    /**
     * @var int
     */
    public $wanTrafficOutDataValue;
    protected $_name = [
        'bucket'                   => 'Bucket',
        'lanBandwidthInDataValue'  => 'LanBandwidthInDataValue',
        'lanBandwidthOutDataValue' => 'LanBandwidthOutDataValue',
        'lanTrafficInDataValue'    => 'LanTrafficInDataValue',
        'lanTrafficOutDataValue'   => 'LanTrafficOutDataValue',
        'timeStamp'                => 'TimeStamp',
        'wanBandwidthInDataValue'  => 'WanBandwidthInDataValue',
        'wanBandwidthOutDataValue' => 'WanBandwidthOutDataValue',
        'wanTrafficInDataValue'    => 'WanTrafficInDataValue',
        'wanTrafficOutDataValue'   => 'WanTrafficOutDataValue',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bucket) {
            $res['Bucket'] = $this->bucket;
        }
        if (null !== $this->lanBandwidthInDataValue) {
            $res['LanBandwidthInDataValue'] = $this->lanBandwidthInDataValue;
        }
        if (null !== $this->lanBandwidthOutDataValue) {
            $res['LanBandwidthOutDataValue'] = $this->lanBandwidthOutDataValue;
        }
        if (null !== $this->lanTrafficInDataValue) {
            $res['LanTrafficInDataValue'] = $this->lanTrafficInDataValue;
        }
        if (null !== $this->lanTrafficOutDataValue) {
            $res['LanTrafficOutDataValue'] = $this->lanTrafficOutDataValue;
        }
        if (null !== $this->timeStamp) {
            $res['TimeStamp'] = $this->timeStamp;
        }
        if (null !== $this->wanBandwidthInDataValue) {
            $res['WanBandwidthInDataValue'] = $this->wanBandwidthInDataValue;
        }
        if (null !== $this->wanBandwidthOutDataValue) {
            $res['WanBandwidthOutDataValue'] = $this->wanBandwidthOutDataValue;
        }
        if (null !== $this->wanTrafficInDataValue) {
            $res['WanTrafficInDataValue'] = $this->wanTrafficInDataValue;
        }
        if (null !== $this->wanTrafficOutDataValue) {
            $res['WanTrafficOutDataValue'] = $this->wanTrafficOutDataValue;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return trafficUsageDataModule
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Bucket'])) {
            $model->bucket = $map['Bucket'];
        }
        if (isset($map['LanBandwidthInDataValue'])) {
            $model->lanBandwidthInDataValue = $map['LanBandwidthInDataValue'];
        }
        if (isset($map['LanBandwidthOutDataValue'])) {
            $model->lanBandwidthOutDataValue = $map['LanBandwidthOutDataValue'];
        }
        if (isset($map['LanTrafficInDataValue'])) {
            $model->lanTrafficInDataValue = $map['LanTrafficInDataValue'];
        }
        if (isset($map['LanTrafficOutDataValue'])) {
            $model->lanTrafficOutDataValue = $map['LanTrafficOutDataValue'];
        }
        if (isset($map['TimeStamp'])) {
            $model->timeStamp = $map['TimeStamp'];
        }
        if (isset($map['WanBandwidthInDataValue'])) {
            $model->wanBandwidthInDataValue = $map['WanBandwidthInDataValue'];
        }
        if (isset($map['WanBandwidthOutDataValue'])) {
            $model->wanBandwidthOutDataValue = $map['WanBandwidthOutDataValue'];
        }
        if (isset($map['WanTrafficInDataValue'])) {
            $model->wanTrafficInDataValue = $map['WanTrafficInDataValue'];
        }
        if (isset($map['WanTrafficOutDataValue'])) {
            $model->wanTrafficOutDataValue = $map['WanTrafficOutDataValue'];
        }

        return $model;
    }
}
