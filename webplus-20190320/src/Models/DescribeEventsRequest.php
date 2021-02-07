<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WebPlus\V20190320\Models;

use AlibabaCloud\Tea\Model;

class DescribeEventsRequest extends Model
{
    /**
     * @var string
     */
    public $envId;

    /**
     * @var int
     */
    public $startTime;

    /**
     * @var int
     */
    public $endTime;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var string
     */
    public $changeId;

    /**
     * @var bool
     */
    public $lastChangeEvents;

    /**
     * @var bool
     */
    public $reverseByTimestamp;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'envId'              => 'EnvId',
        'startTime'          => 'StartTime',
        'endTime'            => 'EndTime',
        'pageSize'           => 'PageSize',
        'pageNumber'         => 'PageNumber',
        'changeId'           => 'ChangeId',
        'lastChangeEvents'   => 'LastChangeEvents',
        'reverseByTimestamp' => 'ReverseByTimestamp',
        'regionId'           => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->envId) {
            $res['EnvId'] = $this->envId;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->changeId) {
            $res['ChangeId'] = $this->changeId;
        }
        if (null !== $this->lastChangeEvents) {
            $res['LastChangeEvents'] = $this->lastChangeEvents;
        }
        if (null !== $this->reverseByTimestamp) {
            $res['ReverseByTimestamp'] = $this->reverseByTimestamp;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeEventsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EnvId'])) {
            $model->envId = $map['EnvId'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['ChangeId'])) {
            $model->changeId = $map['ChangeId'];
        }
        if (isset($map['LastChangeEvents'])) {
            $model->lastChangeEvents = $map['LastChangeEvents'];
        }
        if (isset($map['ReverseByTimestamp'])) {
            $model->reverseByTimestamp = $map['ReverseByTimestamp'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
