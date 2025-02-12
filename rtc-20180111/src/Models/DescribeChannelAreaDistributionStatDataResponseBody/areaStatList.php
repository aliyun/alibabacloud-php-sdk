<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeChannelAreaDistributionStatDataResponseBody;

use AlibabaCloud\Dara\Model;

class areaStatList extends Model
{
    /**
     * @var string
     */
    public $areaName;
    /**
     * @var int
     */
    public $callUserCount;
    /**
     * @var string
     */
    public $highQualityTransmissionRate;
    /**
     * @var int
     */
    public $pubUserCount;
    /**
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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
