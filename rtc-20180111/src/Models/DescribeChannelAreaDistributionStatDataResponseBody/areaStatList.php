<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeChannelAreaDistributionStatDataResponseBody;

use AlibabaCloud\Tea\Model;

class areaStatList extends Model
{
    /**
     * @example 浙江省
     *
     * @var string
     */
    public $areaName;

    /**
     * @example 1
     *
     * @var int
     */
    public $callUserCount;

    /**
     * @example 0.9999
     *
     * @var string
     */
    public $highQualityTransmissionRate;

    /**
     * @example 1
     *
     * @var int
     */
    public $pubUserCount;

    /**
     * @example 1
     *
     * @var int
     */
    public $subUserCount;
    protected $_name = [
        'areaName'                    => 'AreaName',
        'callUserCount'               => 'CallUserCount',
        'highQualityTransmissionRate' => 'HighQualityTransmissionRate',
        'pubUserCount'                => 'PubUserCount',
        'subUserCount'                => 'SubUserCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->areaName) {
            $res['AreaName'] = $this->areaName;
        }
        if (null !== $this->callUserCount) {
            $res['CallUserCount'] = $this->callUserCount;
        }
        if (null !== $this->highQualityTransmissionRate) {
            $res['HighQualityTransmissionRate'] = $this->highQualityTransmissionRate;
        }
        if (null !== $this->pubUserCount) {
            $res['PubUserCount'] = $this->pubUserCount;
        }
        if (null !== $this->subUserCount) {
            $res['SubUserCount'] = $this->subUserCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return areaStatList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AreaName'])) {
            $model->areaName = $map['AreaName'];
        }
        if (isset($map['CallUserCount'])) {
            $model->callUserCount = $map['CallUserCount'];
        }
        if (isset($map['HighQualityTransmissionRate'])) {
            $model->highQualityTransmissionRate = $map['HighQualityTransmissionRate'];
        }
        if (isset($map['PubUserCount'])) {
            $model->pubUserCount = $map['PubUserCount'];
        }
        if (isset($map['SubUserCount'])) {
            $model->subUserCount = $map['SubUserCount'];
        }

        return $model;
    }
}
