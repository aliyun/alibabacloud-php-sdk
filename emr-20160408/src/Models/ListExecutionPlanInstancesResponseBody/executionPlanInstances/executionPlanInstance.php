<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models\ListExecutionPlanInstancesResponseBody\executionPlanInstances;

use AlibabaCloud\Tea\Model;

class executionPlanInstance extends Model
{
    /**
     * @var string
     */
    public $clusterId;

    /**
     * @var string
     */
    public $clusterName;

    /**
     * @var string
     */
    public $clusterType;

    /**
     * @var string
     */
    public $executionPlanId;

    /**
     * @var string
     */
    public $executionPlanName;

    /**
     * @var string
     */
    public $id;

    /**
     * @var bool
     */
    public $logEnable;

    /**
     * @var string
     */
    public $logPath;

    /**
     * @var int
     */
    public $runTime;

    /**
     * @var int
     */
    public $startTime;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $workflowApp;
    protected $_name = [
        'clusterId'         => 'ClusterId',
        'clusterName'       => 'ClusterName',
        'clusterType'       => 'ClusterType',
        'executionPlanId'   => 'ExecutionPlanId',
        'executionPlanName' => 'ExecutionPlanName',
        'id'                => 'Id',
        'logEnable'         => 'LogEnable',
        'logPath'           => 'LogPath',
        'runTime'           => 'RunTime',
        'startTime'         => 'StartTime',
        'status'            => 'Status',
        'workflowApp'       => 'WorkflowApp',
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
        if (null !== $this->clusterName) {
            $res['ClusterName'] = $this->clusterName;
        }
        if (null !== $this->clusterType) {
            $res['ClusterType'] = $this->clusterType;
        }
        if (null !== $this->executionPlanId) {
            $res['ExecutionPlanId'] = $this->executionPlanId;
        }
        if (null !== $this->executionPlanName) {
            $res['ExecutionPlanName'] = $this->executionPlanName;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->logEnable) {
            $res['LogEnable'] = $this->logEnable;
        }
        if (null !== $this->logPath) {
            $res['LogPath'] = $this->logPath;
        }
        if (null !== $this->runTime) {
            $res['RunTime'] = $this->runTime;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->workflowApp) {
            $res['WorkflowApp'] = $this->workflowApp;
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
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['ClusterName'])) {
            $model->clusterName = $map['ClusterName'];
        }
        if (isset($map['ClusterType'])) {
            $model->clusterType = $map['ClusterType'];
        }
        if (isset($map['ExecutionPlanId'])) {
            $model->executionPlanId = $map['ExecutionPlanId'];
        }
        if (isset($map['ExecutionPlanName'])) {
            $model->executionPlanName = $map['ExecutionPlanName'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['LogEnable'])) {
            $model->logEnable = $map['LogEnable'];
        }
        if (isset($map['LogPath'])) {
            $model->logPath = $map['LogPath'];
        }
        if (isset($map['RunTime'])) {
            $model->runTime = $map['RunTime'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['WorkflowApp'])) {
            $model->workflowApp = $map['WorkflowApp'];
        }

        return $model;
    }
}
