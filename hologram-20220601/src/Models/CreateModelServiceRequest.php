<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hologram\V20220601\Models;

use AlibabaCloud\Dara\Model;

class CreateModelServiceRequest extends Model
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
     * @var int
     */
    public $memory;

    /**
     * @var string
     */
    public $modelParams;

    /**
     * @var string
     */
    public $modelServiceName;

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
    public $taskType;
    protected $_name = [
        'apiKey' => 'apiKey',
        'cpu' => 'cpu',
        'gpu' => 'gpu',
        'gpuMemory' => 'gpuMemory',
        'memory' => 'memory',
        'modelParams' => 'modelParams',
        'modelServiceName' => 'modelServiceName',
        'modelType' => 'modelType',
        'provider' => 'provider',
        'serviceCount' => 'serviceCount',
        'taskType' => 'taskType',
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

        if (null !== $this->memory) {
            $res['memory'] = $this->memory;
        }

        if (null !== $this->modelParams) {
            $res['modelParams'] = $this->modelParams;
        }

        if (null !== $this->modelServiceName) {
            $res['modelServiceName'] = $this->modelServiceName;
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

        if (null !== $this->taskType) {
            $res['taskType'] = $this->taskType;
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

        if (isset($map['memory'])) {
            $model->memory = $map['memory'];
        }

        if (isset($map['modelParams'])) {
            $model->modelParams = $map['modelParams'];
        }

        if (isset($map['modelServiceName'])) {
            $model->modelServiceName = $map['modelServiceName'];
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

        if (isset($map['taskType'])) {
            $model->taskType = $map['taskType'];
        }

        return $model;
    }
}
