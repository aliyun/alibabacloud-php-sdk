<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\GetRayJobResponseBody\guHours;
use AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\GetRayJobResponseBody\headSpec;
use AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\GetRayJobResponseBody\workerSpecs;

class GetRayJobResponseBody extends Model
{
    /**
     * @var int
     */
    public $activeDeadlineSeconds;

    /**
     * @var int
     */
    public $backoffLimit;

    /**
     * @var string
     */
    public $clusterState;

    /**
     * @var string
     */
    public $creatorName;

    /**
     * @var float
     */
    public $cuHours;

    /**
     * @var string
     */
    public $dashboardUrl;

    /**
     * @var string[]
     */
    public $dashboardUrlExtra;

    /**
     * @var string
     */
    public $displayReleaseVersion;

    /**
     * @var int
     */
    public $duration;

    /**
     * @var int
     */
    public $endTime;

    /**
     * @var string
     */
    public $entrypoint;

    /**
     * @var string
     */
    public $entrypointMemory;

    /**
     * @var string
     */
    public $entrypointNumCpus;

    /**
     * @var string
     */
    public $entrypointNumGpus;

    /**
     * @var string
     */
    public $entrypointResources;

    /**
     * @var string
     */
    public $extraParam;

    /**
     * @var guHours
     */
    public $guHours;

    /**
     * @var headSpec
     */
    public $headSpec;

    /**
     * @var string
     */
    public $logBucketName;

    /**
     * @var string
     */
    public $logPath;

    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $metadataJson;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $networkServiceName;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $runtimeEnvJson;

    /**
     * @var bool
     */
    public $shutdownAfterJobFinishes;

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
    public $submissionId;

    /**
     * @var string
     */
    public $submissionMode;

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
    public $taskBizId;

    /**
     * @var int
     */
    public $ttlSecondsAfterFinished;

    /**
     * @var string[]
     */
    public $volumeIds;

    /**
     * @var workerSpecs[]
     */
    public $workerSpecs;

    /**
     * @var string
     */
    public $workingDir;
    protected $_name = [
        'activeDeadlineSeconds' => 'activeDeadlineSeconds',
        'backoffLimit' => 'backoffLimit',
        'clusterState' => 'clusterState',
        'creatorName' => 'creatorName',
        'cuHours' => 'cuHours',
        'dashboardUrl' => 'dashboardUrl',
        'dashboardUrlExtra' => 'dashboardUrlExtra',
        'displayReleaseVersion' => 'displayReleaseVersion',
        'duration' => 'duration',
        'endTime' => 'endTime',
        'entrypoint' => 'entrypoint',
        'entrypointMemory' => 'entrypointMemory',
        'entrypointNumCpus' => 'entrypointNumCpus',
        'entrypointNumGpus' => 'entrypointNumGpus',
        'entrypointResources' => 'entrypointResources',
        'extraParam' => 'extraParam',
        'guHours' => 'guHours',
        'headSpec' => 'headSpec',
        'logBucketName' => 'logBucketName',
        'logPath' => 'logPath',
        'message' => 'message',
        'metadataJson' => 'metadataJson',
        'name' => 'name',
        'networkServiceName' => 'networkServiceName',
        'requestId' => 'requestId',
        'runtimeEnvJson' => 'runtimeEnvJson',
        'shutdownAfterJobFinishes' => 'shutdownAfterJobFinishes',
        'startTime' => 'startTime',
        'status' => 'status',
        'submissionId' => 'submissionId',
        'submissionMode' => 'submissionMode',
        'submitTime' => 'submitTime',
        'tags' => 'tags',
        'taskBizId' => 'taskBizId',
        'ttlSecondsAfterFinished' => 'ttlSecondsAfterFinished',
        'volumeIds' => 'volumeIds',
        'workerSpecs' => 'workerSpecs',
        'workingDir' => 'workingDir',
    ];

    public function validate()
    {
        if (\is_array($this->dashboardUrlExtra)) {
            Model::validateArray($this->dashboardUrlExtra);
        }
        if (null !== $this->guHours) {
            $this->guHours->validate();
        }
        if (null !== $this->headSpec) {
            $this->headSpec->validate();
        }
        if (\is_array($this->tags)) {
            Model::validateArray($this->tags);
        }
        if (\is_array($this->volumeIds)) {
            Model::validateArray($this->volumeIds);
        }
        if (\is_array($this->workerSpecs)) {
            Model::validateArray($this->workerSpecs);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->activeDeadlineSeconds) {
            $res['activeDeadlineSeconds'] = $this->activeDeadlineSeconds;
        }

        if (null !== $this->backoffLimit) {
            $res['backoffLimit'] = $this->backoffLimit;
        }

        if (null !== $this->clusterState) {
            $res['clusterState'] = $this->clusterState;
        }

        if (null !== $this->creatorName) {
            $res['creatorName'] = $this->creatorName;
        }

        if (null !== $this->cuHours) {
            $res['cuHours'] = $this->cuHours;
        }

        if (null !== $this->dashboardUrl) {
            $res['dashboardUrl'] = $this->dashboardUrl;
        }

        if (null !== $this->dashboardUrlExtra) {
            if (\is_array($this->dashboardUrlExtra)) {
                $res['dashboardUrlExtra'] = [];
                $n1 = 0;
                foreach ($this->dashboardUrlExtra as $item1) {
                    $res['dashboardUrlExtra'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->displayReleaseVersion) {
            $res['displayReleaseVersion'] = $this->displayReleaseVersion;
        }

        if (null !== $this->duration) {
            $res['duration'] = $this->duration;
        }

        if (null !== $this->endTime) {
            $res['endTime'] = $this->endTime;
        }

        if (null !== $this->entrypoint) {
            $res['entrypoint'] = $this->entrypoint;
        }

        if (null !== $this->entrypointMemory) {
            $res['entrypointMemory'] = $this->entrypointMemory;
        }

        if (null !== $this->entrypointNumCpus) {
            $res['entrypointNumCpus'] = $this->entrypointNumCpus;
        }

        if (null !== $this->entrypointNumGpus) {
            $res['entrypointNumGpus'] = $this->entrypointNumGpus;
        }

        if (null !== $this->entrypointResources) {
            $res['entrypointResources'] = $this->entrypointResources;
        }

        if (null !== $this->extraParam) {
            $res['extraParam'] = $this->extraParam;
        }

        if (null !== $this->guHours) {
            $res['guHours'] = null !== $this->guHours ? $this->guHours->toArray($noStream) : $this->guHours;
        }

        if (null !== $this->headSpec) {
            $res['headSpec'] = null !== $this->headSpec ? $this->headSpec->toArray($noStream) : $this->headSpec;
        }

        if (null !== $this->logBucketName) {
            $res['logBucketName'] = $this->logBucketName;
        }

        if (null !== $this->logPath) {
            $res['logPath'] = $this->logPath;
        }

        if (null !== $this->message) {
            $res['message'] = $this->message;
        }

        if (null !== $this->metadataJson) {
            $res['metadataJson'] = $this->metadataJson;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->networkServiceName) {
            $res['networkServiceName'] = $this->networkServiceName;
        }

        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        if (null !== $this->runtimeEnvJson) {
            $res['runtimeEnvJson'] = $this->runtimeEnvJson;
        }

        if (null !== $this->shutdownAfterJobFinishes) {
            $res['shutdownAfterJobFinishes'] = $this->shutdownAfterJobFinishes;
        }

        if (null !== $this->startTime) {
            $res['startTime'] = $this->startTime;
        }

        if (null !== $this->status) {
            $res['status'] = $this->status;
        }

        if (null !== $this->submissionId) {
            $res['submissionId'] = $this->submissionId;
        }

        if (null !== $this->submissionMode) {
            $res['submissionMode'] = $this->submissionMode;
        }

        if (null !== $this->submitTime) {
            $res['submitTime'] = $this->submitTime;
        }

        if (null !== $this->tags) {
            if (\is_array($this->tags)) {
                $res['tags'] = [];
                $n1 = 0;
                foreach ($this->tags as $item1) {
                    $res['tags'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->taskBizId) {
            $res['taskBizId'] = $this->taskBizId;
        }

        if (null !== $this->ttlSecondsAfterFinished) {
            $res['ttlSecondsAfterFinished'] = $this->ttlSecondsAfterFinished;
        }

        if (null !== $this->volumeIds) {
            if (\is_array($this->volumeIds)) {
                $res['volumeIds'] = [];
                $n1 = 0;
                foreach ($this->volumeIds as $item1) {
                    $res['volumeIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->workerSpecs) {
            if (\is_array($this->workerSpecs)) {
                $res['workerSpecs'] = [];
                $n1 = 0;
                foreach ($this->workerSpecs as $item1) {
                    $res['workerSpecs'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->workingDir) {
            $res['workingDir'] = $this->workingDir;
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
        if (isset($map['activeDeadlineSeconds'])) {
            $model->activeDeadlineSeconds = $map['activeDeadlineSeconds'];
        }

        if (isset($map['backoffLimit'])) {
            $model->backoffLimit = $map['backoffLimit'];
        }

        if (isset($map['clusterState'])) {
            $model->clusterState = $map['clusterState'];
        }

        if (isset($map['creatorName'])) {
            $model->creatorName = $map['creatorName'];
        }

        if (isset($map['cuHours'])) {
            $model->cuHours = $map['cuHours'];
        }

        if (isset($map['dashboardUrl'])) {
            $model->dashboardUrl = $map['dashboardUrl'];
        }

        if (isset($map['dashboardUrlExtra'])) {
            if (!empty($map['dashboardUrlExtra'])) {
                $model->dashboardUrlExtra = [];
                $n1 = 0;
                foreach ($map['dashboardUrlExtra'] as $item1) {
                    $model->dashboardUrlExtra[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['displayReleaseVersion'])) {
            $model->displayReleaseVersion = $map['displayReleaseVersion'];
        }

        if (isset($map['duration'])) {
            $model->duration = $map['duration'];
        }

        if (isset($map['endTime'])) {
            $model->endTime = $map['endTime'];
        }

        if (isset($map['entrypoint'])) {
            $model->entrypoint = $map['entrypoint'];
        }

        if (isset($map['entrypointMemory'])) {
            $model->entrypointMemory = $map['entrypointMemory'];
        }

        if (isset($map['entrypointNumCpus'])) {
            $model->entrypointNumCpus = $map['entrypointNumCpus'];
        }

        if (isset($map['entrypointNumGpus'])) {
            $model->entrypointNumGpus = $map['entrypointNumGpus'];
        }

        if (isset($map['entrypointResources'])) {
            $model->entrypointResources = $map['entrypointResources'];
        }

        if (isset($map['extraParam'])) {
            $model->extraParam = $map['extraParam'];
        }

        if (isset($map['guHours'])) {
            $model->guHours = guHours::fromMap($map['guHours']);
        }

        if (isset($map['headSpec'])) {
            $model->headSpec = headSpec::fromMap($map['headSpec']);
        }

        if (isset($map['logBucketName'])) {
            $model->logBucketName = $map['logBucketName'];
        }

        if (isset($map['logPath'])) {
            $model->logPath = $map['logPath'];
        }

        if (isset($map['message'])) {
            $model->message = $map['message'];
        }

        if (isset($map['metadataJson'])) {
            $model->metadataJson = $map['metadataJson'];
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['networkServiceName'])) {
            $model->networkServiceName = $map['networkServiceName'];
        }

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        if (isset($map['runtimeEnvJson'])) {
            $model->runtimeEnvJson = $map['runtimeEnvJson'];
        }

        if (isset($map['shutdownAfterJobFinishes'])) {
            $model->shutdownAfterJobFinishes = $map['shutdownAfterJobFinishes'];
        }

        if (isset($map['startTime'])) {
            $model->startTime = $map['startTime'];
        }

        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        if (isset($map['submissionId'])) {
            $model->submissionId = $map['submissionId'];
        }

        if (isset($map['submissionMode'])) {
            $model->submissionMode = $map['submissionMode'];
        }

        if (isset($map['submitTime'])) {
            $model->submitTime = $map['submitTime'];
        }

        if (isset($map['tags'])) {
            if (!empty($map['tags'])) {
                $model->tags = [];
                $n1 = 0;
                foreach ($map['tags'] as $item1) {
                    $model->tags[$n1] = Tag::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['taskBizId'])) {
            $model->taskBizId = $map['taskBizId'];
        }

        if (isset($map['ttlSecondsAfterFinished'])) {
            $model->ttlSecondsAfterFinished = $map['ttlSecondsAfterFinished'];
        }

        if (isset($map['volumeIds'])) {
            if (!empty($map['volumeIds'])) {
                $model->volumeIds = [];
                $n1 = 0;
                foreach ($map['volumeIds'] as $item1) {
                    $model->volumeIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['workerSpecs'])) {
            if (!empty($map['workerSpecs'])) {
                $model->workerSpecs = [];
                $n1 = 0;
                foreach ($map['workerSpecs'] as $item1) {
                    $model->workerSpecs[$n1] = workerSpecs::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['workingDir'])) {
            $model->workingDir = $map['workingDir'];
        }

        return $model;
    }
}
