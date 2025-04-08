<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\GetJobRunResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\GetJobRunResponseBody\jobRun\configurationOverrides;
use AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\GetJobRunResponseBody\jobRun\stateChangeReason;
use AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\JobDriver;
use AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\RunLog;
use AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\Tag;

class jobRun extends Model
{
    /**
     * @var string
     */
    public $codeType;

    /**
     * @var configurationOverrides
     */
    public $configurationOverrides;

    /**
     * @var string
     */
    public $displayReleaseVersion;

    /**
     * @var int
     */
    public $endTime;

    /**
     * @var string
     */
    public $environmentId;

    /**
     * @var int
     */
    public $executionTimeoutSeconds;

    /**
     * @var bool
     */
    public $fusion;

    /**
     * @var JobDriver
     */
    public $jobDriver;

    /**
     * @var string
     */
    public $jobRunId;

    /**
     * @var RunLog
     */
    public $log;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $releaseVersion;

    /**
     * @var string
     */
    public $resourceOwnerId;

    /**
     * @var string
     */
    public $resourceQueueId;

    /**
     * @var string
     */
    public $state;

    /**
     * @var stateChangeReason
     */
    public $stateChangeReason;

    /**
     * @var int
     */
    public $submitTime;

    /**
     * @var Tag[]
     */
    public $tags;

    /**
     * @var string
     */
    public $webUI;

    /**
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'codeType' => 'codeType',
        'configurationOverrides' => 'configurationOverrides',
        'displayReleaseVersion' => 'displayReleaseVersion',
        'endTime' => 'endTime',
        'environmentId' => 'environmentId',
        'executionTimeoutSeconds' => 'executionTimeoutSeconds',
        'fusion' => 'fusion',
        'jobDriver' => 'jobDriver',
        'jobRunId' => 'jobRunId',
        'log' => 'log',
        'name' => 'name',
        'releaseVersion' => 'releaseVersion',
        'resourceOwnerId' => 'resourceOwnerId',
        'resourceQueueId' => 'resourceQueueId',
        'state' => 'state',
        'stateChangeReason' => 'stateChangeReason',
        'submitTime' => 'submitTime',
        'tags' => 'tags',
        'webUI' => 'webUI',
        'workspaceId' => 'workspaceId',
    ];

    public function validate()
    {
        if (null !== $this->configurationOverrides) {
            $this->configurationOverrides->validate();
        }
        if (null !== $this->jobDriver) {
            $this->jobDriver->validate();
        }
        if (null !== $this->log) {
            $this->log->validate();
        }
        if (null !== $this->stateChangeReason) {
            $this->stateChangeReason->validate();
        }
        if (\is_array($this->tags)) {
            Model::validateArray($this->tags);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->codeType) {
            $res['codeType'] = $this->codeType;
        }

        if (null !== $this->configurationOverrides) {
            $res['configurationOverrides'] = null !== $this->configurationOverrides ? $this->configurationOverrides->toArray($noStream) : $this->configurationOverrides;
        }

        if (null !== $this->displayReleaseVersion) {
            $res['displayReleaseVersion'] = $this->displayReleaseVersion;
        }

        if (null !== $this->endTime) {
            $res['endTime'] = $this->endTime;
        }

        if (null !== $this->environmentId) {
            $res['environmentId'] = $this->environmentId;
        }

        if (null !== $this->executionTimeoutSeconds) {
            $res['executionTimeoutSeconds'] = $this->executionTimeoutSeconds;
        }

        if (null !== $this->fusion) {
            $res['fusion'] = $this->fusion;
        }

        if (null !== $this->jobDriver) {
            $res['jobDriver'] = null !== $this->jobDriver ? $this->jobDriver->toArray($noStream) : $this->jobDriver;
        }

        if (null !== $this->jobRunId) {
            $res['jobRunId'] = $this->jobRunId;
        }

        if (null !== $this->log) {
            $res['log'] = null !== $this->log ? $this->log->toArray($noStream) : $this->log;
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
            $res['stateChangeReason'] = null !== $this->stateChangeReason ? $this->stateChangeReason->toArray($noStream) : $this->stateChangeReason;
        }

        if (null !== $this->submitTime) {
            $res['submitTime'] = $this->submitTime;
        }

        if (null !== $this->tags) {
            if (\is_array($this->tags)) {
                $res['tags'] = [];
                $n1 = 0;
                foreach ($this->tags as $item1) {
                    $res['tags'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['codeType'])) {
            $model->codeType = $map['codeType'];
        }

        if (isset($map['configurationOverrides'])) {
            $model->configurationOverrides = configurationOverrides::fromMap($map['configurationOverrides']);
        }

        if (isset($map['displayReleaseVersion'])) {
            $model->displayReleaseVersion = $map['displayReleaseVersion'];
        }

        if (isset($map['endTime'])) {
            $model->endTime = $map['endTime'];
        }

        if (isset($map['environmentId'])) {
            $model->environmentId = $map['environmentId'];
        }

        if (isset($map['executionTimeoutSeconds'])) {
            $model->executionTimeoutSeconds = $map['executionTimeoutSeconds'];
        }

        if (isset($map['fusion'])) {
            $model->fusion = $map['fusion'];
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
                $n1 = 0;
                foreach ($map['tags'] as $item1) {
                    $model->tags[$n1++] = Tag::fromMap($item1);
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
