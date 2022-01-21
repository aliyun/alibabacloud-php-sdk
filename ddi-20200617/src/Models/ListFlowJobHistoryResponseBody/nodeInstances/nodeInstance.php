<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddi\V20200617\Models\ListFlowJobHistoryResponseBody\nodeInstances;

use AlibabaCloud\Tea\Model;

class nodeInstance extends Model
{
    /**
     * @description 集群ID。
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description 运行结束时间。
     *
     * @var int
     */
    public $endTime;

    /**
     * @description 环境变量设置。
     *
     * @var string
     */
    public $envConf;

    /**
     * @description 启动器的application的ID。
     *
     * @var string
     */
    public $externalId;

    /**
     * @description 外部信息。例如，运行作业的错误诊断信息。
     *
     * @var string
     */
    public $externalInfo;

    /**
     * @description 实例对应的Container的状态：SUBMITTED, RUNNING, SUCCESS, FAIL, KILL_FAIL, KILL_SUCCESS
     *
     * @var string
     */
    public $externalStatus;

    /**
     * @description 失败策略，可能的取值：CONTINUE（提过本次作业），STOP（停止作业）
     *
     * @var string
     */
    public $failAct;

    /**
     * @description 创建时间。
     *
     * @var int
     */
    public $gmtCreate;

    /**
     * @description 创建时间。
     *
     * @var int
     */
    public $gmtModified;

    /**
     * @description 保留参数。
     *
     * @var string
     */
    public $hostName;

    /**
     * @description 作业实例ID。
     *
     * @var string
     */
    public $id;

    /**
     * @description 作业ID。
     *
     * @var string
     */
    public $jobId;

    /**
     * @description 作业名称。
     *
     * @var string
     */
    public $jobName;

    /**
     * @description 作业内容。
     *
     * @var string
     */
    public $jobParams;

    /**
     * @description 作业类型。
     *
     * @var string
     */
    public $jobType;

    /**
     * @description 最大重试次数。
     *
     * @var int
     */
    public $maxRetry;

    /**
     * @description 保留参数。
     *
     * @var string
     */
    public $nodeName;

    /**
     * @description 参数设置。
     *
     * @var string
     */
    public $paramConf;

    /**
     * @description 项目ID。
     *
     * @var string
     */
    public $projectId;

    /**
     * @description 重试次数。
     *
     * @var int
     */
    public $retries;

    /**
     * @description 重试间隔 0-300（秒）。
     *
     * @var int
     */
    public $retryInterval;

    /**
     * @description 运行配置，取值如下：priority（优先级），userName（任务的Linux提交用户），memory（内存，单位为MB），cores（核数）
     *
     * @var string
     */
    public $runConf;

    /**
     * @description 运行开始时间。
     *
     * @var int
     */
    public $startTime;

    /**
     * @description 实例的执行状态：PREP：准备启动，SUBMITTING：提交中，RUNNING：运行中DONE：已完成，OK：执行成功，FAILED：执行失败，KILLED：已终止，KILL_FAILED：终止失败，START_RETRY：开始重试
     *
     * @var string
     */
    public $status;

    /**
     * @description 节点类型：JOB：作业，CLUSTER：集群，START：开始，END：结束
     *
     * @var string
     */
    public $type;

    /**
     * @description 是否结束。
     *
     * @var bool
     */
    public $pending;
    protected $_name = [
        'clusterId'      => 'ClusterId',
        'endTime'        => 'EndTime',
        'envConf'        => 'EnvConf',
        'externalId'     => 'ExternalId',
        'externalInfo'   => 'ExternalInfo',
        'externalStatus' => 'ExternalStatus',
        'failAct'        => 'FailAct',
        'gmtCreate'      => 'GmtCreate',
        'gmtModified'    => 'GmtModified',
        'hostName'       => 'HostName',
        'id'             => 'Id',
        'jobId'          => 'JobId',
        'jobName'        => 'JobName',
        'jobParams'      => 'JobParams',
        'jobType'        => 'JobType',
        'maxRetry'       => 'MaxRetry',
        'nodeName'       => 'NodeName',
        'paramConf'      => 'ParamConf',
        'projectId'      => 'ProjectId',
        'retries'        => 'Retries',
        'retryInterval'  => 'RetryInterval',
        'runConf'        => 'RunConf',
        'startTime'      => 'StartTime',
        'status'         => 'Status',
        'type'           => 'Type',
        'pending'        => 'pending',
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
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->envConf) {
            $res['EnvConf'] = $this->envConf;
        }
        if (null !== $this->externalId) {
            $res['ExternalId'] = $this->externalId;
        }
        if (null !== $this->externalInfo) {
            $res['ExternalInfo'] = $this->externalInfo;
        }
        if (null !== $this->externalStatus) {
            $res['ExternalStatus'] = $this->externalStatus;
        }
        if (null !== $this->failAct) {
            $res['FailAct'] = $this->failAct;
        }
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }
        if (null !== $this->hostName) {
            $res['HostName'] = $this->hostName;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }
        if (null !== $this->jobName) {
            $res['JobName'] = $this->jobName;
        }
        if (null !== $this->jobParams) {
            $res['JobParams'] = $this->jobParams;
        }
        if (null !== $this->jobType) {
            $res['JobType'] = $this->jobType;
        }
        if (null !== $this->maxRetry) {
            $res['MaxRetry'] = $this->maxRetry;
        }
        if (null !== $this->nodeName) {
            $res['NodeName'] = $this->nodeName;
        }
        if (null !== $this->paramConf) {
            $res['ParamConf'] = $this->paramConf;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->retries) {
            $res['Retries'] = $this->retries;
        }
        if (null !== $this->retryInterval) {
            $res['RetryInterval'] = $this->retryInterval;
        }
        if (null !== $this->runConf) {
            $res['RunConf'] = $this->runConf;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->pending) {
            $res['pending'] = $this->pending;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return nodeInstance
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['EnvConf'])) {
            $model->envConf = $map['EnvConf'];
        }
        if (isset($map['ExternalId'])) {
            $model->externalId = $map['ExternalId'];
        }
        if (isset($map['ExternalInfo'])) {
            $model->externalInfo = $map['ExternalInfo'];
        }
        if (isset($map['ExternalStatus'])) {
            $model->externalStatus = $map['ExternalStatus'];
        }
        if (isset($map['FailAct'])) {
            $model->failAct = $map['FailAct'];
        }
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }
        if (isset($map['HostName'])) {
            $model->hostName = $map['HostName'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }
        if (isset($map['JobName'])) {
            $model->jobName = $map['JobName'];
        }
        if (isset($map['JobParams'])) {
            $model->jobParams = $map['JobParams'];
        }
        if (isset($map['JobType'])) {
            $model->jobType = $map['JobType'];
        }
        if (isset($map['MaxRetry'])) {
            $model->maxRetry = $map['MaxRetry'];
        }
        if (isset($map['NodeName'])) {
            $model->nodeName = $map['NodeName'];
        }
        if (isset($map['ParamConf'])) {
            $model->paramConf = $map['ParamConf'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['Retries'])) {
            $model->retries = $map['Retries'];
        }
        if (isset($map['RetryInterval'])) {
            $model->retryInterval = $map['RetryInterval'];
        }
        if (isset($map['RunConf'])) {
            $model->runConf = $map['RunConf'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['pending'])) {
            $model->pending = $map['pending'];
        }

        return $model;
    }
}
