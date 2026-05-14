<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hologram\V20220601\Models\GetInstanceModelResponseBody;

use AlibabaCloud\Dara\Model;

class modelServiceList extends Model
{
    /**
     * @var string
     */
    public $apiKey;

    /**
     * @var int
     */
    public $cpu;

    /**
     * @var int
     */
    public $gpu;

    /**
     * @var int
     */
    public $gpuMemory;

    /**
     * @var string
     */
    public $instanceRegion;

    /**
     * @var int
     */
    public $memory;

    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $modelName;

    /**
     * @var string
     */
    public $modelParams;

    /**
     * @var string
     */
    public $modelType;

    /**
     * @var string
     */
    public $provider;

    /**
     * @var int
     */
    public $serviceCount;

    /**
     * @var string
     */
    public $serviceDeployRegion;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $taskType;

    /**
     * @var string
     */
    public $version;
    protected $_name = [
        'apiKey' => 'apiKey',
        'cpu' => 'cpu',
        'gpu' => 'gpu',
        'gpuMemory' => 'gpuMemory',
        'instanceRegion' => 'instanceRegion',
        'memory' => 'memory',
        'message' => 'message',
        'modelName' => 'modelName',
        'modelParams' => 'modelParams',
        'modelType' => 'modelType',
        'provider' => 'provider',
        'serviceCount' => 'serviceCount',
        'serviceDeployRegion' => 'serviceDeployRegion',
        'status' => 'status',
        'taskType' => 'taskType',
        'version' => 'version',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->apiKey) {
            $res['apiKey'] = $this->apiKey;
        }

        if (null !== $this->cpu) {
            $res['cpu'] = $this->cpu;
        }

        if (null !== $this->gpu) {
            $res['gpu'] = $this->gpu;
        }

        if (null !== $this->gpuMemory) {
            $res['gpuMemory'] = $this->gpuMemory;
        }

        if (null !== $this->instanceRegion) {
            $res['instanceRegion'] = $this->instanceRegion;
        }

        if (null !== $this->memory) {
            $res['memory'] = $this->memory;
        }

        if (null !== $this->message) {
            $res['message'] = $this->message;
        }

        if (null !== $this->modelName) {
            $res['modelName'] = $this->modelName;
        }

        if (null !== $this->modelParams) {
            $res['modelParams'] = $this->modelParams;
        }

        if (null !== $this->modelType) {
            $res['modelType'] = $this->modelType;
        }

        if (null !== $this->provider) {
            $res['provider'] = $this->provider;
        }

        if (null !== $this->serviceCount) {
            $res['serviceCount'] = $this->serviceCount;
        }

        if (null !== $this->serviceDeployRegion) {
            $res['serviceDeployRegion'] = $this->serviceDeployRegion;
        }

        if (null !== $this->status) {
            $res['status'] = $this->status;
        }

        if (null !== $this->taskType) {
            $res['taskType'] = $this->taskType;
        }

        if (null !== $this->version) {
            $res['version'] = $this->version;
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
        if (isset($map['apiKey'])) {
            $model->apiKey = $map['apiKey'];
        }

        if (isset($map['cpu'])) {
            $model->cpu = $map['cpu'];
        }

        if (isset($map['gpu'])) {
            $model->gpu = $map['gpu'];
        }

        if (isset($map['gpuMemory'])) {
            $model->gpuMemory = $map['gpuMemory'];
        }

        if (isset($map['instanceRegion'])) {
            $model->instanceRegion = $map['instanceRegion'];
        }

        if (isset($map['memory'])) {
            $model->memory = $map['memory'];
        }

        if (isset($map['message'])) {
            $model->message = $map['message'];
        }

        if (isset($map['modelName'])) {
            $model->modelName = $map['modelName'];
        }

        if (isset($map['modelParams'])) {
            $model->modelParams = $map['modelParams'];
        }

        if (isset($map['modelType'])) {
            $model->modelType = $map['modelType'];
        }

        if (isset($map['provider'])) {
            $model->provider = $map['provider'];
        }

        if (isset($map['serviceCount'])) {
            $model->serviceCount = $map['serviceCount'];
        }

        if (isset($map['serviceDeployRegion'])) {
            $model->serviceDeployRegion = $map['serviceDeployRegion'];
        }

        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        if (isset($map['taskType'])) {
            $model->taskType = $map['taskType'];
        }

        if (isset($map['version'])) {
            $model->version = $map['version'];
        }

        return $model;
    }
}
