<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddi\V20200617\Models;

use AlibabaCloud\Tea\Model;

class ListFlowJobHistoryRequest extends Model
{
    /**
     * @description 作业ID。您可以调用ListFlowJob查看作业ID。
     *
     * @var string
     */
    public $id;

    /**
     * @description 作业实例ID。您可以调用DescribeFlowJob查看作业实例ID。
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description 作业的类型，可能的取值有：SPARK，SPARK_STREAMING，ZEPPELIN
     *
     * @var string
     */
    public $jobType;

    /**
     * @description 当前页码。
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description 分页查询时每页行数。
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description 项目ID。您可以调用ListFlowProject查看项目的ID。
     *
     * @var string
     */
    public $projectId;

    /**
     * @description 地域ID。您可以调用DescribeRegions查看最新的阿里云地域列表。
     *
     * @var string
     */
    public $regionId;

    /**
     * @description 状态列表。取值如下：SUBMITTED, RUNNING, SUCCESS, FAILED, KILL_FAILED, KILL_SUCCESS
     *
     * @var string[]
     */
    public $statusList;

    /**
     * @description 查询的时间范围参数，参数列表：type: range，from: 开始时间（long型时间戳），to: 结束时间（long型时间戳）
     *
     * @var string
     */
    public $timeRange;
    protected $_name = [
        'id'         => 'Id',
        'instanceId' => 'InstanceId',
        'jobType'    => 'JobType',
        'pageNumber' => 'PageNumber',
        'pageSize'   => 'PageSize',
        'projectId'  => 'ProjectId',
        'regionId'   => 'RegionId',
        'statusList' => 'StatusList',
        'timeRange'  => 'TimeRange',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->jobType) {
            $res['JobType'] = $this->jobType;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->statusList) {
            $res['StatusList'] = $this->statusList;
        }
        if (null !== $this->timeRange) {
            $res['TimeRange'] = $this->timeRange;
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
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['JobType'])) {
            $model->jobType = $map['JobType'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['StatusList'])) {
            if (!empty($map['StatusList'])) {
                $model->statusList = $map['StatusList'];
            }
        }
        if (isset($map['TimeRange'])) {
            $model->timeRange = $map['TimeRange'];
        }

        return $model;
    }
}
