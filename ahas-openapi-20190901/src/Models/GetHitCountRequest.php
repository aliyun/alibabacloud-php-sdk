<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ahasopenapi\V20190901\Models;

use AlibabaCloud\Tea\Model;

class GetHitCountRequest extends Model
{
    /**
     * @var string
     */
    public $activityTaskId;

    /**
     * @var int
     */
    public $startTime;

    /**
     * @var int
     */
    public $endTime;

    /**
     * @var string
     */
    public $ahasRegionId;
    protected $_name = [
        'activityTaskId' => 'ActivityTaskId',
        'startTime'      => 'StartTime',
        'endTime'        => 'EndTime',
        'ahasRegionId'   => 'AhasRegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->activityTaskId) {
            $res['ActivityTaskId'] = $this->activityTaskId;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->ahasRegionId) {
            $res['AhasRegionId'] = $this->ahasRegionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetHitCountRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ActivityTaskId'])) {
            $model->activityTaskId = $map['ActivityTaskId'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['AhasRegionId'])) {
            $model->ahasRegionId = $map['AhasRegionId'];
        }

        return $model;
    }
}
