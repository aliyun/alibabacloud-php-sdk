<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OutboundBot\V20191226\Models;

use AlibabaCloud\Tea\Model;

class ListJobGroupsRequest extends Model
{
    /**
     * @example true
     *
     * @var bool
     */
    public $asyncQuery;

    /**
     * @example 1579965079000
     *
     * @var int
     */
    public $endTime;

    /**
     * @example 174952ab-9825-4cc9-a5e2-de82d7fa4cdd
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example Completed
     *
     * @var string
     */
    public $jobGroupStatusFilter;

    /**
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $searchText;

    /**
     * @example 1578965079000
     *
     * @var int
     */
    public $startTime;
    protected $_name = [
        'asyncQuery'           => 'AsyncQuery',
        'endTime'              => 'EndTime',
        'instanceId'           => 'InstanceId',
        'jobGroupStatusFilter' => 'JobGroupStatusFilter',
        'pageNumber'           => 'PageNumber',
        'pageSize'             => 'PageSize',
        'searchText'           => 'SearchText',
        'startTime'            => 'StartTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->asyncQuery) {
            $res['AsyncQuery'] = $this->asyncQuery;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->jobGroupStatusFilter) {
            $res['JobGroupStatusFilter'] = $this->jobGroupStatusFilter;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->searchText) {
            $res['SearchText'] = $this->searchText;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListJobGroupsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AsyncQuery'])) {
            $model->asyncQuery = $map['AsyncQuery'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['JobGroupStatusFilter'])) {
            $model->jobGroupStatusFilter = $map['JobGroupStatusFilter'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['SearchText'])) {
            $model->searchText = $map['SearchText'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}
