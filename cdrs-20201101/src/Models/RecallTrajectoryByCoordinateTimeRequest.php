<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CDRS\V20201101\Models;

use AlibabaCloud\SDK\CDRS\V20201101\Models\RecallTrajectoryByCoordinateTimeRequest\pointList;
use AlibabaCloud\Tea\Model;

class RecallTrajectoryByCoordinateTimeRequest extends Model
{
    /**
     * @var string
     */
    public $startTime;

    /**
     * @var string
     */
    public $endTime;

    /**
     * @var string
     */
    public $corpId;

    /**
     * @var int
     */
    public $outputIdCount;

    /**
     * @var pointList[]
     */
    public $pointList;

    /**
     * @var string[]
     */
    public $outputIdTypeList;
    protected $_name = [
        'startTime'        => 'StartTime',
        'endTime'          => 'EndTime',
        'corpId'           => 'CorpId',
        'outputIdCount'    => 'OutputIdCount',
        'pointList'        => 'PointList',
        'outputIdTypeList' => 'OutputIdTypeList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->corpId) {
            $res['CorpId'] = $this->corpId;
        }
        if (null !== $this->outputIdCount) {
            $res['OutputIdCount'] = $this->outputIdCount;
        }
        if (null !== $this->pointList) {
            $res['PointList'] = [];
            if (null !== $this->pointList && \is_array($this->pointList)) {
                $n = 0;
                foreach ($this->pointList as $item) {
                    $res['PointList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->outputIdTypeList) {
            $res['OutputIdTypeList'] = $this->outputIdTypeList;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RecallTrajectoryByCoordinateTimeRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['CorpId'])) {
            $model->corpId = $map['CorpId'];
        }
        if (isset($map['OutputIdCount'])) {
            $model->outputIdCount = $map['OutputIdCount'];
        }
        if (isset($map['PointList'])) {
            if (!empty($map['PointList'])) {
                $model->pointList = [];
                $n                = 0;
                foreach ($map['PointList'] as $item) {
                    $model->pointList[$n++] = null !== $item ? pointList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['OutputIdTypeList'])) {
            if (!empty($map['OutputIdTypeList'])) {
                $model->outputIdTypeList = $map['OutputIdTypeList'];
            }
        }

        return $model;
    }
}
