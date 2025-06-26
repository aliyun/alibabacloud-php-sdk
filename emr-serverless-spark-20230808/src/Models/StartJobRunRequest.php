<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\StartJobRunRequest\configurationOverrides;

class StartJobRunRequest extends Model
{
    /**
     * @var string
     */
    public $clientToken;

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
    public $jobId;

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
    public $resourceQueueId;

    /**
     * @var Tag[]
     */
    public $tags;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'clientToken' => 'clientToken',
        'codeType' => 'codeType',
        'configurationOverrides' => 'configurationOverrides',
        'displayReleaseVersion' => 'displayReleaseVersion',
        'executionTimeoutSeconds' => 'executionTimeoutSeconds',
        'fusion' => 'fusion',
        'jobDriver' => 'jobDriver',
        'jobId' => 'jobId',
        'name' => 'name',
        'releaseVersion' => 'releaseVersion',
        'resourceQueueId' => 'resourceQueueId',
        'tags' => 'tags',
        'regionId' => 'regionId',
    ];

    public function validate()
    {
        if (null !== $this->configurationOverrides) {
            $this->configurationOverrides->validate();
        }
        if (null !== $this->jobDriver) {
            $this->jobDriver->validate();
        }
        if (\is_array($this->tags)) {
            Model::validateArray($this->tags);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clientToken) {
            $res['clientToken'] = $this->clientToken;
        }

        if (null !== $this->codeType) {
            $res['codeType'] = $this->codeType;
        }

        if (null !== $this->configurationOverrides) {
            $res['configurationOverrides'] = null !== $this->configurationOverrides ? $this->configurationOverrides->toArray($noStream) : $this->configurationOverrides;
        }

        if (null !== $this->displayReleaseVersion) {
            $res['displayReleaseVersion'] = $this->displayReleaseVersion;
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

        if (null !== $this->jobId) {
            $res['jobId'] = $this->jobId;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->releaseVersion) {
            $res['releaseVersion'] = $this->releaseVersion;
        }

        if (null !== $this->resourceQueueId) {
            $res['resourceQueueId'] = $this->resourceQueueId;
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

        if (null !== $this->regionId) {
            $res['regionId'] = $this->regionId;
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
        if (isset($map['clientToken'])) {
            $model->clientToken = $map['clientToken'];
        }

        if (isset($map['codeType'])) {
            $model->codeType = $map['codeType'];
        }

        if (isset($map['configurationOverrides'])) {
            $model->configurationOverrides = configurationOverrides::fromMap($map['configurationOverrides']);
        }

        if (isset($map['displayReleaseVersion'])) {
            $model->displayReleaseVersion = $map['displayReleaseVersion'];
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

        if (isset($map['jobId'])) {
            $model->jobId = $map['jobId'];
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['releaseVersion'])) {
            $model->releaseVersion = $map['releaseVersion'];
        }

        if (isset($map['resourceQueueId'])) {
            $model->resourceQueueId = $map['resourceQueueId'];
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

        if (isset($map['regionId'])) {
            $model->regionId = $map['regionId'];
        }

        return $model;
    }
}
