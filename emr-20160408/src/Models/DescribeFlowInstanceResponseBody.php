<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models;

use AlibabaCloud\SDK\Emr\V20160408\Models\DescribeFlowInstanceResponseBody\dependencyFlowList;
use AlibabaCloud\SDK\Emr\V20160408\Models\DescribeFlowInstanceResponseBody\nodeInstance;
use AlibabaCloud\Tea\Model;

class DescribeFlowInstanceResponseBody extends Model
{
    /**
     * @var string
     */
    public $status;

    /**
     * @var bool
     */
    public $hasNodeFailed;

    /**
     * @var int
     */
    public $endTime;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $clusterId;

    /**
     * @var string
     */
    public $lifecycle;

    /**
     * @var string
     */
    public $projectId;

    /**
     * @var int
     */
    public $gmtModified;

    /**
     * @var int
     */
    public $startTime;

    /**
     * @var int
     */
    public $duration;

    /**
     * @var string
     */
    public $namespace;

    /**
     * @var string
     */
    public $flowId;

    /**
     * @var int
     */
    public $gmtCreate;

    /**
     * @var string
     */
    public $graph;

    /**
     * @var int
     */
    public $scheduleTime;

    /**
     * @var string
     */
    public $flowName;

    /**
     * @var string
     */
    public $cronExpression;

    /**
     * @var string
     */
    public $logArchiveLocation;

    /**
     * @var string
     */
    public $id;

    /**
     * @var nodeInstance
     */
    public $nodeInstance;

    /**
     * @var dependencyFlowList
     */
    public $dependencyFlowList;
    protected $_name = [
        'status'             => 'Status',
        'hasNodeFailed'      => 'HasNodeFailed',
        'endTime'            => 'EndTime',
        'requestId'          => 'RequestId',
        'clusterId'          => 'ClusterId',
        'lifecycle'          => 'Lifecycle',
        'projectId'          => 'ProjectId',
        'gmtModified'        => 'GmtModified',
        'startTime'          => 'StartTime',
        'duration'           => 'Duration',
        'namespace'          => 'Namespace',
        'flowId'             => 'FlowId',
        'gmtCreate'          => 'GmtCreate',
        'graph'              => 'Graph',
        'scheduleTime'       => 'ScheduleTime',
        'flowName'           => 'FlowName',
        'cronExpression'     => 'CronExpression',
        'logArchiveLocation' => 'LogArchiveLocation',
        'id'                 => 'Id',
        'nodeInstance'       => 'NodeInstance',
        'dependencyFlowList' => 'DependencyFlowList',
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
        if (null !== $this->hasNodeFailed) {
            $res['HasNodeFailed'] = $this->hasNodeFailed;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->lifecycle) {
            $res['Lifecycle'] = $this->lifecycle;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
        }
        if (null !== $this->namespace) {
            $res['Namespace'] = $this->namespace;
        }
        if (null !== $this->flowId) {
            $res['FlowId'] = $this->flowId;
        }
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->graph) {
            $res['Graph'] = $this->graph;
        }
        if (null !== $this->scheduleTime) {
            $res['ScheduleTime'] = $this->scheduleTime;
        }
        if (null !== $this->flowName) {
            $res['FlowName'] = $this->flowName;
        }
        if (null !== $this->cronExpression) {
            $res['CronExpression'] = $this->cronExpression;
        }
        if (null !== $this->logArchiveLocation) {
            $res['LogArchiveLocation'] = $this->logArchiveLocation;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->nodeInstance) {
            $res['NodeInstance'] = null !== $this->nodeInstance ? $this->nodeInstance->toMap() : null;
        }
        if (null !== $this->dependencyFlowList) {
            $res['DependencyFlowList'] = null !== $this->dependencyFlowList ? $this->dependencyFlowList->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeFlowInstanceResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['HasNodeFailed'])) {
            $model->hasNodeFailed = $map['HasNodeFailed'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['Lifecycle'])) {
            $model->lifecycle = $map['Lifecycle'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
        }
        if (isset($map['Namespace'])) {
            $model->namespace = $map['Namespace'];
        }
        if (isset($map['FlowId'])) {
            $model->flowId = $map['FlowId'];
        }
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['Graph'])) {
            $model->graph = $map['Graph'];
        }
        if (isset($map['ScheduleTime'])) {
            $model->scheduleTime = $map['ScheduleTime'];
        }
        if (isset($map['FlowName'])) {
            $model->flowName = $map['FlowName'];
        }
        if (isset($map['CronExpression'])) {
            $model->cronExpression = $map['CronExpression'];
        }
        if (isset($map['LogArchiveLocation'])) {
            $model->logArchiveLocation = $map['LogArchiveLocation'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['NodeInstance'])) {
            $model->nodeInstance = nodeInstance::fromMap($map['NodeInstance']);
        }
        if (isset($map['DependencyFlowList'])) {
            $model->dependencyFlowList = dependencyFlowList::fromMap($map['DependencyFlowList']);
        }

        return $model;
    }
}
