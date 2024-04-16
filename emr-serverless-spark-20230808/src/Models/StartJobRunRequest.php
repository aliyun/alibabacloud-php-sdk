<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models;

use AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\StartJobRunRequest\configurationOverrides;
use AlibabaCloud\Tea\Model;

class StartJobRunRequest extends Model
{
    /**
     * @example 8e6aae2810c8f67229ca70bb31cd6028
     *
     * @var string
     */
    public $clientToken;

    /**
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
     * @example 100
     *
     * @var int
     */
    public $executionTimeoutSeconds;

    /**
     * @var JobDriver
     */
    public $jobDriver;

    /**
     * @example jr-12345
     *
     * @var string
     */
    public $jobId;

    /**
     * @example spark_job_name
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
     * @example dev_queue
     *
     * @var string
     */
    public $resourceQueueId;

    /**
     * @var Tag[]
     */
    public $tags;

    /**
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'clientToken'             => 'clientToken',
        'codeType'                => 'codeType',
        'configurationOverrides'  => 'configurationOverrides',
        'executionTimeoutSeconds' => 'executionTimeoutSeconds',
        'jobDriver'               => 'jobDriver',
        'jobId'                   => 'jobId',
        'name'                    => 'name',
        'releaseVersion'          => 'releaseVersion',
        'resourceQueueId'         => 'resourceQueueId',
        'tags'                    => 'tags',
        'regionId'                => 'regionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clientToken) {
            $res['clientToken'] = $this->clientToken;
        }
        if (null !== $this->codeType) {
            $res['codeType'] = $this->codeType;
        }
        if (null !== $this->configurationOverrides) {
            $res['configurationOverrides'] = null !== $this->configurationOverrides ? $this->configurationOverrides->toMap() : null;
        }
        if (null !== $this->executionTimeoutSeconds) {
            $res['executionTimeoutSeconds'] = $this->executionTimeoutSeconds;
        }
        if (null !== $this->jobDriver) {
            $res['jobDriver'] = null !== $this->jobDriver ? $this->jobDriver->toMap() : null;
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
            $res['tags'] = [];
            if (null !== $this->tags && \is_array($this->tags)) {
                $n = 0;
                foreach ($this->tags as $item) {
                    $res['tags'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->regionId) {
            $res['regionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return StartJobRunRequest
     */
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
        if (isset($map['executionTimeoutSeconds'])) {
            $model->executionTimeoutSeconds = $map['executionTimeoutSeconds'];
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
                $n           = 0;
                foreach ($map['tags'] as $item) {
                    $model->tags[$n++] = null !== $item ? Tag::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['regionId'])) {
            $model->regionId = $map['regionId'];
        }

        return $model;
    }
}
