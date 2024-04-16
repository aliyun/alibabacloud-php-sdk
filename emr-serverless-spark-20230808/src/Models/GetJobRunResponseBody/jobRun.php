<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\GetJobRunResponseBody;

use AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\GetJobRunResponseBody\jobRun\configurationOverrides;
use AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\GetJobRunResponseBody\jobRun\stateChangeReason;
use AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\JobDriver;
use AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\RunLog;
use AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\Tag;
use AlibabaCloud\Tea\Model;

class jobRun extends Model
{
    /**
     * @description 作业代码类型。
     *
     * @example SQL
     *
     * @var string
     */
    public $codeType;

    /**
     * @var configurationOverrides
     */
    public $configurationOverrides;

    /**
     * @description 作业结束时间。
     *
     * @example 1684119314000
     *
     * @var int
     */
    public $endTime;

    /**
     * @description 运行超时时间。
     *
     * @example 3600
     *
     * @var int
     */
    public $executionTimeoutSeconds;

    /**
     * @var JobDriver
     */
    public $jobDriver;

    /**
     * @description 任务实例ID。
     *
     * @example jr-231231
     *
     * @var string
     */
    public $jobRunId;

    /**
     * @var RunLog
     */
    public $log;

    /**
     * @description 作业实例名称。
     *
     * @example jobName
     *
     * @var string
     */
    public $name;

    /**
     * @example esr-3.3.1
     *
     * @var string
     */
    public $releaseVersion;

    /**
     * @description 创建用户Uid。
     *
     * @example 1509789347011222
     *
     * @var string
     */
    public $resourceOwnerId;

    /**
     * @example root_queue
     *
     * @var string
     */
    public $resourceQueueId;

    /**
     * @description 作业状态。
     *
     * @example Running
     *
     * @var string
     */
    public $state;

    /**
     * @var stateChangeReason
     */
    public $stateChangeReason;

    /**
     * @description 作业提交时间。
     *
     * @example 1684119314000
     *
     * @var int
     */
    public $submitTime;

    /**
     * @description 标签。
     *
     * @var Tag[]
     */
    public $tags;

    /**
     * @description 作业web ui。
     *
     * @example http://spark-ui
     *
     * @var string
     */
    public $webUI;

    /**
     * @description 工作空间id。
     *
     * @example w-1234abcd
     *
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'codeType'                => 'codeType',
        'configurationOverrides'  => 'configurationOverrides',
        'endTime'                 => 'endTime',
        'executionTimeoutSeconds' => 'executionTimeoutSeconds',
        'jobDriver'               => 'jobDriver',
        'jobRunId'                => 'jobRunId',
        'log'                     => 'log',
        'name'                    => 'name',
        'releaseVersion'          => 'releaseVersion',
        'resourceOwnerId'         => 'resourceOwnerId',
        'resourceQueueId'         => 'resourceQueueId',
        'state'                   => 'state',
        'stateChangeReason'       => 'stateChangeReason',
        'submitTime'              => 'submitTime',
        'tags'                    => 'tags',
        'webUI'                   => 'webUI',
        'workspaceId'             => 'workspaceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->codeType) {
            $res['codeType'] = $this->codeType;
        }
        if (null !== $this->configurationOverrides) {
            $res['configurationOverrides'] = null !== $this->configurationOverrides ? $this->configurationOverrides->toMap() : null;
        }
        if (null !== $this->endTime) {
            $res['endTime'] = $this->endTime;
        }
        if (null !== $this->executionTimeoutSeconds) {
            $res['executionTimeoutSeconds'] = $this->executionTimeoutSeconds;
        }
        if (null !== $this->jobDriver) {
            $res['jobDriver'] = null !== $this->jobDriver ? $this->jobDriver->toMap() : null;
        }
        if (null !== $this->jobRunId) {
            $res['jobRunId'] = $this->jobRunId;
        }
        if (null !== $this->log) {
            $res['log'] = null !== $this->log ? $this->log->toMap() : null;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->releaseVersion) {
            $res['releaseVersion'] = $this->releaseVersion;
        }
        if (null !== $this->resourceOwnerId) {
            $res['resourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->resourceQueueId) {
            $res['resourceQueueId'] = $this->resourceQueueId;
        }
        if (null !== $this->state) {
            $res['state'] = $this->state;
        }
        if (null !== $this->stateChangeReason) {
            $res['stateChangeReason'] = null !== $this->stateChangeReason ? $this->stateChangeReason->toMap() : null;
        }
        if (null !== $this->submitTime) {
            $res['submitTime'] = $this->submitTime;
        }
        if (null !== $this->tags) {
            $res['tags'] = [];
            if (null !== $this->tags && \is_array($this->tags)) {
                $n = 0;
                foreach ($this->tags as $item) {
                    $res['tags'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->webUI) {
            $res['webUI'] = $this->webUI;
        }
        if (null !== $this->workspaceId) {
            $res['workspaceId'] = $this->workspaceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return jobRun
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['codeType'])) {
            $model->codeType = $map['codeType'];
        }
        if (isset($map['configurationOverrides'])) {
            $model->configurationOverrides = configurationOverrides::fromMap($map['configurationOverrides']);
        }
        if (isset($map['endTime'])) {
            $model->endTime = $map['endTime'];
        }
        if (isset($map['executionTimeoutSeconds'])) {
            $model->executionTimeoutSeconds = $map['executionTimeoutSeconds'];
        }
        if (isset($map['jobDriver'])) {
            $model->jobDriver = JobDriver::fromMap($map['jobDriver']);
        }
        if (isset($map['jobRunId'])) {
            $model->jobRunId = $map['jobRunId'];
        }
        if (isset($map['log'])) {
            $model->log = RunLog::fromMap($map['log']);
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['releaseVersion'])) {
            $model->releaseVersion = $map['releaseVersion'];
        }
        if (isset($map['resourceOwnerId'])) {
            $model->resourceOwnerId = $map['resourceOwnerId'];
        }
        if (isset($map['resourceQueueId'])) {
            $model->resourceQueueId = $map['resourceQueueId'];
        }
        if (isset($map['state'])) {
            $model->state = $map['state'];
        }
        if (isset($map['stateChangeReason'])) {
            $model->stateChangeReason = stateChangeReason::fromMap($map['stateChangeReason']);
        }
        if (isset($map['submitTime'])) {
            $model->submitTime = $map['submitTime'];
        }
        if (isset($map['tags'])) {
            if (!empty($map['tags'])) {
                $model->tags = [];
                $n           = 0;
                foreach ($map['tags'] as $item) {
                    $model->tags[$n++] = null !== $item ? Tag::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['webUI'])) {
            $model->webUI = $map['webUI'];
        }
        if (isset($map['workspaceId'])) {
            $model->workspaceId = $map['workspaceId'];
        }

        return $model;
    }
}
