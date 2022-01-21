<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddi\V20200617\Models;

use AlibabaCloud\Tea\Model;

class ListFlowRequest extends Model
{
    /**
     * @description 集群ID。您可以调用ListClusters查看集群的ID。
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description 工作流ID。您可以调用ListFlowInstance查看工作流ID。
     *
     * @var string
     */
    public $id;

    /**
     * @description 作业ID。您可以调用ListFlowJob查看。
     *
     * @var string
     */
    public $jobId;

    /**
     * @description 工作流名称。您可以调用ListFlowInstance查看。
     *
     * @var string
     */
    public $name;

    /**
     * @description 页码。
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description 每页查询数量。
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description 是否调度。
     *
     * @var bool
     */
    public $periodic;

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
     * @description 状态：  STOP_SCHEDULE（停止调度） UNDER_SCHEDULE（调度中）
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'clusterId'  => 'ClusterId',
        'id'         => 'Id',
        'jobId'      => 'JobId',
        'name'       => 'Name',
        'pageNumber' => 'PageNumber',
        'pageSize'   => 'PageSize',
        'periodic'   => 'Periodic',
        'projectId'  => 'ProjectId',
        'regionId'   => 'RegionId',
        'status'     => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->periodic) {
            $res['Periodic'] = $this->periodic;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListFlowRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['Periodic'])) {
            $model->periodic = $map['Periodic'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
