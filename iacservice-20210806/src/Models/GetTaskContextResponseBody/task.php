<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IaCService\V20210806\Models\GetTaskContextResponseBody;

use AlibabaCloud\SDK\IaCService\V20210806\Models\GetTaskContextResponseBody\task\jobConfig;
use AlibabaCloud\Tea\Model;

class task extends Model
{
    /**
     * @var bool
     */
    public $autoApply;

    /**
     * @var jobConfig
     */
    public $jobConfig;

    /**
     * @var string
     */
    public $jobDescription;

    /**
     * @var string
     */
    public $jobGmtCreate;

    /**
     * @var string
     */
    public $jobId;

    /**
     * @var string
     */
    public $jobStatus;

    /**
     * @var string
     */
    public $moduleId;

    /**
     * @var string
     */
    public $modulePath;

    /**
     * @var string
     */
    public $moduleVersion;

    /**
     * @var string[]
     */
    public $parameters;

    /**
     * @var string
     */
    public $ramRole;

    /**
     * @var int
     */
    public $resourceCount;

    /**
     * @var string
     */
    public $taskGmtCreate;

    /**
     * @var string
     */
    public $taskId;

    /**
     * @var string
     */
    public $taskName;

    /**
     * @var string
     */
    public $taskOutputPath;

    /**
     * @var string
     */
    public $taskStatus;

    /**
     * @var string
     */
    public $terraformVersion;

    /**
     * @var string
     */
    public $triggerStrategy;
    protected $_name = [
        'autoApply'        => 'autoApply',
        'jobConfig'        => 'jobConfig',
        'jobDescription'   => 'jobDescription',
        'jobGmtCreate'     => 'jobGmtCreate',
        'jobId'            => 'jobId',
        'jobStatus'        => 'jobStatus',
        'moduleId'         => 'moduleId',
        'modulePath'       => 'modulePath',
        'moduleVersion'    => 'moduleVersion',
        'parameters'       => 'parameters',
        'ramRole'          => 'ramRole',
        'resourceCount'    => 'resourceCount',
        'taskGmtCreate'    => 'taskGmtCreate',
        'taskId'           => 'taskId',
        'taskName'         => 'taskName',
        'taskOutputPath'   => 'taskOutputPath',
        'taskStatus'       => 'taskStatus',
        'terraformVersion' => 'terraformVersion',
        'triggerStrategy'  => 'triggerStrategy',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->autoApply) {
            $res['autoApply'] = $this->autoApply;
        }
        if (null !== $this->jobConfig) {
            $res['jobConfig'] = null !== $this->jobConfig ? $this->jobConfig->toMap() : null;
        }
        if (null !== $this->jobDescription) {
            $res['jobDescription'] = $this->jobDescription;
        }
        if (null !== $this->jobGmtCreate) {
            $res['jobGmtCreate'] = $this->jobGmtCreate;
        }
        if (null !== $this->jobId) {
            $res['jobId'] = $this->jobId;
        }
        if (null !== $this->jobStatus) {
            $res['jobStatus'] = $this->jobStatus;
        }
        if (null !== $this->moduleId) {
            $res['moduleId'] = $this->moduleId;
        }
        if (null !== $this->modulePath) {
            $res['modulePath'] = $this->modulePath;
        }
        if (null !== $this->moduleVersion) {
            $res['moduleVersion'] = $this->moduleVersion;
        }
        if (null !== $this->parameters) {
            $res['parameters'] = $this->parameters;
        }
        if (null !== $this->ramRole) {
            $res['ramRole'] = $this->ramRole;
        }
        if (null !== $this->resourceCount) {
            $res['resourceCount'] = $this->resourceCount;
        }
        if (null !== $this->taskGmtCreate) {
            $res['taskGmtCreate'] = $this->taskGmtCreate;
        }
        if (null !== $this->taskId) {
            $res['taskId'] = $this->taskId;
        }
        if (null !== $this->taskName) {
            $res['taskName'] = $this->taskName;
        }
        if (null !== $this->taskOutputPath) {
            $res['taskOutputPath'] = $this->taskOutputPath;
        }
        if (null !== $this->taskStatus) {
            $res['taskStatus'] = $this->taskStatus;
        }
        if (null !== $this->terraformVersion) {
            $res['terraformVersion'] = $this->terraformVersion;
        }
        if (null !== $this->triggerStrategy) {
            $res['triggerStrategy'] = $this->triggerStrategy;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return task
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['autoApply'])) {
            $model->autoApply = $map['autoApply'];
        }
        if (isset($map['jobConfig'])) {
            $model->jobConfig = jobConfig::fromMap($map['jobConfig']);
        }
        if (isset($map['jobDescription'])) {
            $model->jobDescription = $map['jobDescription'];
        }
        if (isset($map['jobGmtCreate'])) {
            $model->jobGmtCreate = $map['jobGmtCreate'];
        }
        if (isset($map['jobId'])) {
            $model->jobId = $map['jobId'];
        }
        if (isset($map['jobStatus'])) {
            $model->jobStatus = $map['jobStatus'];
        }
        if (isset($map['moduleId'])) {
            $model->moduleId = $map['moduleId'];
        }
        if (isset($map['modulePath'])) {
            $model->modulePath = $map['modulePath'];
        }
        if (isset($map['moduleVersion'])) {
            $model->moduleVersion = $map['moduleVersion'];
        }
        if (isset($map['parameters'])) {
            $model->parameters = $map['parameters'];
        }
        if (isset($map['ramRole'])) {
            $model->ramRole = $map['ramRole'];
        }
        if (isset($map['resourceCount'])) {
            $model->resourceCount = $map['resourceCount'];
        }
        if (isset($map['taskGmtCreate'])) {
            $model->taskGmtCreate = $map['taskGmtCreate'];
        }
        if (isset($map['taskId'])) {
            $model->taskId = $map['taskId'];
        }
        if (isset($map['taskName'])) {
            $model->taskName = $map['taskName'];
        }
        if (isset($map['taskOutputPath'])) {
            $model->taskOutputPath = $map['taskOutputPath'];
        }
        if (isset($map['taskStatus'])) {
            $model->taskStatus = $map['taskStatus'];
        }
        if (isset($map['terraformVersion'])) {
            $model->terraformVersion = $map['terraformVersion'];
        }
        if (isset($map['triggerStrategy'])) {
            $model->triggerStrategy = $map['triggerStrategy'];
        }

        return $model;
    }
}
