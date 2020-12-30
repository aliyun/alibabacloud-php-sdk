<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models\ListExecutionPlanInstancesResponseBody\executionPlanInstances;

use AlibabaCloud\Tea\Model;

class executionPlanInstance extends Model
{
    /**
     * @var string
     */
    public $status;

    /**
     * @var bool
     */
    public $logEnable;

    /**
     * @var int
     */
    public $startTime;

    /**
     * @var string
     */
    public $logPath;

    /**
     * @var string
     */
    public $executionPlanId;

    /**
     * @var string
     */
    public $clusterType;

    /**
     * @var int
     */
    public $runTime;

    /**
     * @var string
     */
    public $clusterName;

    /**
     * @var string
     */
    public $workflowApp;

    /**
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $clusterId;

    /**
     * @var string
     */
    public $executionPlanName;
    protected $_name = [
        'status'            => 'Status',
        'logEnable'         => 'LogEnable',
        'startTime'         => 'StartTime',
        'logPath'           => 'LogPath',
        'executionPlanId'   => 'ExecutionPlanId',
        'clusterType'       => 'ClusterType',
        'runTime'           => 'RunTime',
        'clusterName'       => 'ClusterName',
        'workflowApp'       => 'WorkflowApp',
        'id'                => 'Id',
        'clusterId'         => 'ClusterId',
        'executionPlanName' => 'ExecutionPlanName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->logEnable) {
            $res['LogEnable'] = $this->logEnable;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->logPath) {
            $res['LogPath'] = $this->logPath;
        }
        if (null !== $this->executionPlanId) {
            $res['ExecutionPlanId'] = $this->executionPlanId;
        }
        if (null !== $this->clusterType) {
            $res['ClusterType'] = $this->clusterType;
        }
        if (null !== $this->runTime) {
            $res['RunTime'] = $this->runTime;
        }
        if (null !== $this->clusterName) {
            $res['ClusterName'] = $this->clusterName;
        }
        if (null !== $this->workflowApp) {
            $res['WorkflowApp'] = $this->workflowApp;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->executionPlanName) {
            $res['ExecutionPlanName'] = $this->executionPlanName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return executionPlanInstance
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['LogEnable'])) {
            $model->logEnable = $map['LogEnable'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['LogPath'])) {
            $model->logPath = $map['LogPath'];
        }
        if (isset($map['ExecutionPlanId'])) {
            $model->executionPlanId = $map['ExecutionPlanId'];
        }
        if (isset($map['ClusterType'])) {
            $model->clusterType = $map['ClusterType'];
        }
        if (isset($map['RunTime'])) {
            $model->runTime = $map['RunTime'];
        }
        if (isset($map['ClusterName'])) {
            $model->clusterName = $map['ClusterName'];
        }
        if (isset($map['WorkflowApp'])) {
            $model->workflowApp = $map['WorkflowApp'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['ExecutionPlanName'])) {
            $model->executionPlanName = $map['ExecutionPlanName'];
        }

        return $model;
    }
}
