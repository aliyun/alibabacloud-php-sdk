<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models;

use AlibabaCloud\Tea\Model;

class ListFlowJobHistoryRequest extends Model
{
    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $projectId;

    /**
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $jobType;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $timeRange;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string[]
     */
    public $statusList;
    protected $_name = [
        'regionId'   => 'RegionId',
        'projectId'  => 'ProjectId',
        'id'         => 'Id',
        'jobType'    => 'JobType',
        'instanceId' => 'InstanceId',
        'timeRange'  => 'TimeRange',
        'pageNumber' => 'PageNumber',
        'pageSize'   => 'PageSize',
        'statusList' => 'StatusList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->jobType) {
            $res['JobType'] = $this->jobType;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->timeRange) {
            $res['TimeRange'] = $this->timeRange;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->statusList) {
            $res['StatusList'] = $this->statusList;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListFlowJobHistoryRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['JobType'])) {
            $model->jobType = $map['JobType'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['TimeRange'])) {
            $model->timeRange = $map['TimeRange'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['StatusList'])) {
            if (!empty($map['StatusList'])) {
                $model->statusList = $map['StatusList'];
            }
        }

        return $model;
    }
}
