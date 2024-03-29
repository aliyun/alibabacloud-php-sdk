<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models\ListFlowNodeInstanceResponseBody\flowNodeInstances;

use AlibabaCloud\Tea\Model;

class flowNodeInstance extends Model
{
    /**
     * @example C-A6C9F4F1E9E****
     *
     * @var string
     */
    public $clusterId;

    /**
     * @example 200
     *
     * @var int
     */
    public $duration;

    /**
     * @example 1540796248000
     *
     * @var int
     */
    public $endTime;

    /**
     * @example application_1541559535023_34028
     *
     * @var string
     */
    public $externalChildIds;

    /**
     * @example application_1541559535023_3****
     *
     * @var string
     */
    public $externalId;

    /**
     * @example empty
     *
     * @var string
     */
    public $externalInfo;

    /**
     * @example SUCCESS
     *
     * @var string
     */
    public $externalStatus;

    /**
     * @example container_1541559535023_34027_01_00****
     *
     * @var string
     */
    public $externalSubId;

    /**
     * @example STOP
     *
     * @var string
     */
    public $failAct;

    /**
     * @example F-35683D0E4573****
     *
     * @var string
     */
    public $flowId;

    /**
     * @example FI-7CAF9709CD32****
     *
     * @var string
     */
    public $flowInstanceId;

    /**
     * @example 1540796236000
     *
     * @var int
     */
    public $gmtCreate;

    /**
     * @example 1540796247000
     *
     * @var int
     */
    public $gmtModified;

    /**
     * @example emr-header-1.cluster-12345
     *
     * @var string
     */
    public $hostName;

    /**
     * @example FNI-9D14A7CCF268****
     *
     * @var string
     */
    public $id;

    /**
     * @example FJ-A23BD131A862****
     *
     * @var string
     */
    public $jobId;

    /**
     * @example myJob
     *
     * @var string
     */
    public $jobName;

    /**
     * @example ls -l
     *
     * @var string
     */
    public $jobParams;

    /**
     * @example HIVE_SQL
     *
     * @var string
     */
    public $jobType;

    /**
     * @example 0
     *
     * @var string
     */
    public $maxRetry;

    /**
     * @example node
     *
     * @var string
     */
    public $nodeName;

    /**
     * @example false
     *
     * @var bool
     */
    public $pending;

    /**
     * @example FP-7A1018ADE917****
     *
     * @var string
     */
    public $projectId;

    /**
     * @example 0
     *
     * @var int
     */
    public $retries;

    /**
     * @example 200
     *
     * @var string
     */
    public $retryInterval;

    /**
     * @example 1540796237000
     *
     * @var int
     */
    public $startTime;

    /**
     * @example OK
     *
     * @var string
     */
    public $status;

    /**
     * @example JOB
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'clusterId'        => 'ClusterId',
        'duration'         => 'Duration',
        'endTime'          => 'EndTime',
        'externalChildIds' => 'ExternalChildIds',
        'externalId'       => 'ExternalId',
        'externalInfo'     => 'ExternalInfo',
        'externalStatus'   => 'ExternalStatus',
        'externalSubId'    => 'ExternalSubId',
        'failAct'          => 'FailAct',
        'flowId'           => 'FlowId',
        'flowInstanceId'   => 'FlowInstanceId',
        'gmtCreate'        => 'GmtCreate',
        'gmtModified'      => 'GmtModified',
        'hostName'         => 'HostName',
        'id'               => 'Id',
        'jobId'            => 'JobId',
        'jobName'          => 'JobName',
        'jobParams'        => 'JobParams',
        'jobType'          => 'JobType',
        'maxRetry'         => 'MaxRetry',
        'nodeName'         => 'NodeName',
        'pending'          => 'Pending',
        'projectId'        => 'ProjectId',
        'retries'          => 'Retries',
        'retryInterval'    => 'RetryInterval',
        'startTime'        => 'StartTime',
        'status'           => 'Status',
        'type'             => 'Type',
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
        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->externalChildIds) {
            $res['ExternalChildIds'] = $this->externalChildIds;
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
        if (null !== $this->externalSubId) {
            $res['ExternalSubId'] = $this->externalSubId;
        }
        if (null !== $this->failAct) {
            $res['FailAct'] = $this->failAct;
        }
        if (null !== $this->flowId) {
            $res['FlowId'] = $this->flowId;
        }
        if (null !== $this->flowInstanceId) {
            $res['FlowInstanceId'] = $this->flowInstanceId;
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
        if (null !== $this->pending) {
            $res['Pending'] = $this->pending;
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
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return flowNodeInstance
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['ExternalChildIds'])) {
            $model->externalChildIds = $map['ExternalChildIds'];
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
        if (isset($map['ExternalSubId'])) {
            $model->externalSubId = $map['ExternalSubId'];
        }
        if (isset($map['FailAct'])) {
            $model->failAct = $map['FailAct'];
        }
        if (isset($map['FlowId'])) {
            $model->flowId = $map['FlowId'];
        }
        if (isset($map['FlowInstanceId'])) {
            $model->flowInstanceId = $map['FlowInstanceId'];
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
        if (isset($map['Pending'])) {
            $model->pending = $map['Pending'];
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
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
