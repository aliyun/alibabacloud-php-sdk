<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddi\V20200617\Models;

use AlibabaCloud\SDK\Ddi\V20200617\Models\DescribeFlowInstanceResponseBody\dependencyFlowList;
use AlibabaCloud\SDK\Ddi\V20200617\Models\DescribeFlowInstanceResponseBody\nodeInstance;
use AlibabaCloud\Tea\Model;

class DescribeFlowInstanceResponseBody extends Model
{
    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $projectId;

    /**
     * @var string
     */
    public $namespace;

    /**
     * @var string
     */
    public $flowName;

    /**
     * @var int
     */
    public $gmtModified;

    /**
     * @var string
     */
    public $flowId;

    /**
     * @var string
     */
    public $cronExpression;

    /**
     * @var int
     */
    public $endTime;

    /**
     * @var int
     */
    public $startTime;

    /**
     * @var bool
     */
    public $hasNodeFailed;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $graph;

    /**
     * @var int
     */
    public $gmtCreate;

    /**
     * @var int
     */
    public $scheduleTime;

    /**
     * @var int
     */
    public $duration;

    /**
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $clusterId;

    /**
     * @var dependencyFlowList
     */
    public $dependencyFlowList;

    /**
     * @var nodeInstance
     */
    public $nodeInstance;
    protected $_name = [
        'status'             => 'Status',
        'projectId'          => 'ProjectId',
        'namespace'          => 'Namespace',
        'flowName'           => 'FlowName',
        'gmtModified'        => 'GmtModified',
        'flowId'             => 'FlowId',
        'cronExpression'     => 'CronExpression',
        'endTime'            => 'EndTime',
        'startTime'          => 'StartTime',
        'hasNodeFailed'      => 'HasNodeFailed',
        'requestId'          => 'RequestId',
        'graph'              => 'Graph',
        'gmtCreate'          => 'GmtCreate',
        'scheduleTime'       => 'ScheduleTime',
        'duration'           => 'Duration',
        'id'                 => 'Id',
        'clusterId'          => 'ClusterId',
        'dependencyFlowList' => 'DependencyFlowList',
        'nodeInstance'       => 'NodeInstance',
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
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->namespace) {
            $res['Namespace'] = $this->namespace;
        }
        if (null !== $this->flowName) {
            $res['FlowName'] = $this->flowName;
        }
        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }
        if (null !== $this->flowId) {
            $res['FlowId'] = $this->flowId;
        }
        if (null !== $this->cronExpression) {
            $res['CronExpression'] = $this->cronExpression;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->hasNodeFailed) {
            $res['HasNodeFailed'] = $this->hasNodeFailed;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->graph) {
            $res['Graph'] = $this->graph;
        }
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->scheduleTime) {
            $res['ScheduleTime'] = $this->scheduleTime;
        }
        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->dependencyFlowList) {
            $res['DependencyFlowList'] = null !== $this->dependencyFlowList ? $this->dependencyFlowList->toMap() : null;
        }
        if (null !== $this->nodeInstance) {
            $res['NodeInstance'] = null !== $this->nodeInstance ? $this->nodeInstance->toMap() : null;
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
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['Namespace'])) {
            $model->namespace = $map['Namespace'];
        }
        if (isset($map['FlowName'])) {
            $model->flowName = $map['FlowName'];
        }
        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }
        if (isset($map['FlowId'])) {
            $model->flowId = $map['FlowId'];
        }
        if (isset($map['CronExpression'])) {
            $model->cronExpression = $map['CronExpression'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['HasNodeFailed'])) {
            $model->hasNodeFailed = $map['HasNodeFailed'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Graph'])) {
            $model->graph = $map['Graph'];
        }
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['ScheduleTime'])) {
            $model->scheduleTime = $map['ScheduleTime'];
        }
        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['DependencyFlowList'])) {
            $model->dependencyFlowList = dependencyFlowList::fromMap($map['DependencyFlowList']);
        }
        if (isset($map['NodeInstance'])) {
            $model->nodeInstance = nodeInstance::fromMap($map['NodeInstance']);
        }

        return $model;
    }
}
