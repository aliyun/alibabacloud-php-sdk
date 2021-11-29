<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models;

use AlibabaCloud\SDK\Emr\V20160408\Models\DescribeExecutionPlanResponseBody\clusterInfo;
use AlibabaCloud\SDK\Emr\V20160408\Models\DescribeExecutionPlanResponseBody\jobInfoList;
use AlibabaCloud\Tea\Model;

class DescribeExecutionPlanResponseBody extends Model
{
    /**
     * @var string
     */
    public $clusterId;

    /**
     * @var clusterInfo
     */
    public $clusterInfo;

    /**
     * @var string
     */
    public $clusterName;

    /**
     * @var bool
     */
    public $createClusterOnDemand;

    /**
     * @var string
     */
    public $dayOfMonth;

    /**
     * @var string
     */
    public $dayOfWeek;

    /**
     * @var int
     */
    public $executionPlanVersion;

    /**
     * @var string
     */
    public $id;

    /**
     * @var jobInfoList
     */
    public $jobInfoList;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $requestId;

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
    public $strategy;

    /**
     * @var int
     */
    public $timeInterval;

    /**
     * @var string
     */
    public $timeUnit;

    /**
     * @var string
     */
    public $workflowApp;
    protected $_name = [
        'clusterId'             => 'ClusterId',
        'clusterInfo'           => 'ClusterInfo',
        'clusterName'           => 'ClusterName',
        'createClusterOnDemand' => 'CreateClusterOnDemand',
        'dayOfMonth'            => 'DayOfMonth',
        'dayOfWeek'             => 'DayOfWeek',
        'executionPlanVersion'  => 'ExecutionPlanVersion',
        'id'                    => 'Id',
        'jobInfoList'           => 'JobInfoList',
        'name'                  => 'Name',
        'requestId'             => 'RequestId',
        'startTime'             => 'StartTime',
        'status'                => 'Status',
        'strategy'              => 'Strategy',
        'timeInterval'          => 'TimeInterval',
        'timeUnit'              => 'TimeUnit',
        'workflowApp'           => 'WorkflowApp',
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
        if (null !== $this->clusterInfo) {
            $res['ClusterInfo'] = null !== $this->clusterInfo ? $this->clusterInfo->toMap() : null;
        }
        if (null !== $this->clusterName) {
            $res['ClusterName'] = $this->clusterName;
        }
        if (null !== $this->createClusterOnDemand) {
            $res['CreateClusterOnDemand'] = $this->createClusterOnDemand;
        }
        if (null !== $this->dayOfMonth) {
            $res['DayOfMonth'] = $this->dayOfMonth;
        }
        if (null !== $this->dayOfWeek) {
            $res['DayOfWeek'] = $this->dayOfWeek;
        }
        if (null !== $this->executionPlanVersion) {
            $res['ExecutionPlanVersion'] = $this->executionPlanVersion;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->jobInfoList) {
            $res['JobInfoList'] = null !== $this->jobInfoList ? $this->jobInfoList->toMap() : null;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->strategy) {
            $res['Strategy'] = $this->strategy;
        }
        if (null !== $this->timeInterval) {
            $res['TimeInterval'] = $this->timeInterval;
        }
        if (null !== $this->timeUnit) {
            $res['TimeUnit'] = $this->timeUnit;
        }
        if (null !== $this->workflowApp) {
            $res['WorkflowApp'] = $this->workflowApp;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeExecutionPlanResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['ClusterInfo'])) {
            $model->clusterInfo = clusterInfo::fromMap($map['ClusterInfo']);
        }
        if (isset($map['ClusterName'])) {
            $model->clusterName = $map['ClusterName'];
        }
        if (isset($map['CreateClusterOnDemand'])) {
            $model->createClusterOnDemand = $map['CreateClusterOnDemand'];
        }
        if (isset($map['DayOfMonth'])) {
            $model->dayOfMonth = $map['DayOfMonth'];
        }
        if (isset($map['DayOfWeek'])) {
            $model->dayOfWeek = $map['DayOfWeek'];
        }
        if (isset($map['ExecutionPlanVersion'])) {
            $model->executionPlanVersion = $map['ExecutionPlanVersion'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['JobInfoList'])) {
            $model->jobInfoList = jobInfoList::fromMap($map['JobInfoList']);
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Strategy'])) {
            $model->strategy = $map['Strategy'];
        }
        if (isset($map['TimeInterval'])) {
            $model->timeInterval = $map['TimeInterval'];
        }
        if (isset($map['TimeUnit'])) {
            $model->timeUnit = $map['TimeUnit'];
        }
        if (isset($map['WorkflowApp'])) {
            $model->workflowApp = $map['WorkflowApp'];
        }

        return $model;
    }
}
