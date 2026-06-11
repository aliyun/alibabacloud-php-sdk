<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\SubmitRayJobRequest\headSpec;
use AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\SubmitRayJobRequest\tags;
use AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\SubmitRayJobRequest\workerSpec;

class SubmitRayJobRequest extends Model
{
    /**
     * @var int
     */
    public $activeDeadlineSeconds;

    /**
     * @var string
     */
    public $displayReleaseVersion;

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
     * @var headSpec
     */
    public $headSpec;

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
    public $runtimeEnvJson;

    /**
     * @var bool
     */
    public $shutdownAfterJobFinishes;

    /**
     * @var string
     */
    public $submissionMode;

    /**
     * @var tags[]
     */
    public $tags;

    /**
     * @var int
     */
    public $ttlSecondsAfterFinished;

    /**
     * @var string[]
     */
    public $volumeIds;

    /**
     * @var workerSpec[]
     */
    public $workerSpec;

    /**
     * @var string
     */
    public $workingDir;
    protected $_name = [
        'activeDeadlineSeconds' => 'activeDeadlineSeconds',
        'displayReleaseVersion' => 'displayReleaseVersion',
        'entrypoint' => 'entrypoint',
        'entrypointMemory' => 'entrypointMemory',
        'entrypointNumCpus' => 'entrypointNumCpus',
        'entrypointNumGpus' => 'entrypointNumGpus',
        'entrypointResources' => 'entrypointResources',
        'extraParam' => 'extraParam',
        'headSpec' => 'headSpec',
        'metadataJson' => 'metadataJson',
        'name' => 'name',
        'networkServiceName' => 'networkServiceName',
        'runtimeEnvJson' => 'runtimeEnvJson',
        'shutdownAfterJobFinishes' => 'shutdownAfterJobFinishes',
        'submissionMode' => 'submissionMode',
        'tags' => 'tags',
        'ttlSecondsAfterFinished' => 'ttlSecondsAfterFinished',
        'volumeIds' => 'volumeIds',
        'workerSpec' => 'workerSpec',
        'workingDir' => 'workingDir',
    ];

    public function validate()
    {
        if (null !== $this->headSpec) {
            $this->headSpec->validate();
        }
        if (\is_array($this->tags)) {
            Model::validateArray($this->tags);
        }
        if (\is_array($this->volumeIds)) {
            Model::validateArray($this->volumeIds);
        }
        if (\is_array($this->workerSpec)) {
            Model::validateArray($this->workerSpec);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->activeDeadlineSeconds) {
            $res['activeDeadlineSeconds'] = $this->activeDeadlineSeconds;
        }

        if (null !== $this->displayReleaseVersion) {
            $res['displayReleaseVersion'] = $this->displayReleaseVersion;
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

        if (null !== $this->headSpec) {
            $res['headSpec'] = null !== $this->headSpec ? $this->headSpec->toArray($noStream) : $this->headSpec;
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

        if (null !== $this->runtimeEnvJson) {
            $res['runtimeEnvJson'] = $this->runtimeEnvJson;
        }

        if (null !== $this->shutdownAfterJobFinishes) {
            $res['shutdownAfterJobFinishes'] = $this->shutdownAfterJobFinishes;
        }

        if (null !== $this->submissionMode) {
            $res['submissionMode'] = $this->submissionMode;
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

        if (null !== $this->workerSpec) {
            if (\is_array($this->workerSpec)) {
                $res['workerSpec'] = [];
                $n1 = 0;
                foreach ($this->workerSpec as $item1) {
                    $res['workerSpec'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

        if (isset($map['displayReleaseVersion'])) {
            $model->displayReleaseVersion = $map['displayReleaseVersion'];
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

        if (isset($map['headSpec'])) {
            $model->headSpec = headSpec::fromMap($map['headSpec']);
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

        if (isset($map['runtimeEnvJson'])) {
            $model->runtimeEnvJson = $map['runtimeEnvJson'];
        }

        if (isset($map['shutdownAfterJobFinishes'])) {
            $model->shutdownAfterJobFinishes = $map['shutdownAfterJobFinishes'];
        }

        if (isset($map['submissionMode'])) {
            $model->submissionMode = $map['submissionMode'];
        }

        if (isset($map['tags'])) {
            if (!empty($map['tags'])) {
                $model->tags = [];
                $n1 = 0;
                foreach ($map['tags'] as $item1) {
                    $model->tags[$n1] = tags::fromMap($item1);
                    ++$n1;
                }
            }
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

        if (isset($map['workerSpec'])) {
            if (!empty($map['workerSpec'])) {
                $model->workerSpec = [];
                $n1 = 0;
                foreach ($map['workerSpec'] as $item1) {
                    $model->workerSpec[$n1] = workerSpec::fromMap($item1);
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
