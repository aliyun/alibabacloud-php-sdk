<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Marketing_event\V20210101\Models;

use AlibabaCloud\Tea\Model;

class QuerySignInRecordPopRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example 4546
     *
     * @var int
     */
    public $activityId;

    /**
     * @example 2024-09-25 14:11
     *
     * @var string
     */
    public $endTime;

    /**
     * @example 1
     *
     * @var int
     */
    public $pageNum;

    /**
     * @example 20
     *
     * @var int
     */
    public $pageSize;

    /**
     * @example 2024-09-25 14:11
     *
     * @var string
     */
    public $startTime;
    protected $_name = [
        'activityId' => 'ActivityId',
        'endTime'    => 'EndTime',
        'pageNum'    => 'PageNum',
        'pageSize'   => 'PageSize',
        'startTime'  => 'StartTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->activityId) {
            $res['ActivityId'] = $this->activityId;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->pageNum) {
            $res['PageNum'] = $this->pageNum;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QuerySignInRecordPopRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ActivityId'])) {
            $model->activityId = $map['ActivityId'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['PageNum'])) {
            $model->pageNum = $map['PageNum'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}
