<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Tea\Model;

class DescribeMeterImsMediaConvertUHDUsageRequest extends Model
{
    /**
     * @var int
     */
    public $endTs;

    /**
     * @var string
     */
    public $interval;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var int
     */
    public $startTs;
    protected $_name = [
        'endTs'    => 'EndTs',
        'interval' => 'Interval',
        'regionId' => 'RegionId',
        'startTs'  => 'StartTs',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->endTs) {
            $res['EndTs'] = $this->endTs;
        }
        if (null !== $this->interval) {
            $res['Interval'] = $this->interval;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->startTs) {
            $res['StartTs'] = $this->startTs;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeMeterImsMediaConvertUHDUsageRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EndTs'])) {
            $model->endTs = $map['EndTs'];
        }
        if (isset($map['Interval'])) {
            $model->interval = $map['Interval'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['StartTs'])) {
            $model->startTs = $map['StartTs'];
        }

        return $model;
    }
}
