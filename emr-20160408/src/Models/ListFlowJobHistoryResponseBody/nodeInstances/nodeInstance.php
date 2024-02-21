<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models\ListFlowJobHistoryResponseBody\nodeInstances;

use AlibabaCloud\Tea\Model;

class nodeInstance extends Model
{
    /**
     * @example C-A6C9F4F1E9EC****
     *
     * @var string
     */
    public $clusterId;

    /**
     * @example 1540796248000
     *
     * @var int
     */
    public $endTime;

    /**
     * @example {"key":"value"}
     *
     * @var string
     */
    public $envConf;

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
     * @example STOP
     *
     * @var string
     */
    public $failAct;

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
     * @example FJI-F4FC53D7207E****
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
     * @var int
     */
    public $maxRetry;

    /**
     * @var string
     */
    public $nodeName;

    /**
     * @example {"date":"${yyyy-MM-dd}"}
     *
     * @var string
     */
    public $paramConf;

    /**
     * @example FP-3535FE0BE522****
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
     * @var int
     */
    public $retryInterval;

    /**
     * @example {"priority":1,"userName":"hadoop","memory":2048,"cores":1}
     *
     * @var string
     */
    public $runConf;

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

    /**
     * @example false
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
