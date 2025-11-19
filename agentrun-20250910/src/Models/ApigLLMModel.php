<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentRun\V20250910\Models;

use AlibabaCloud\Dara\Model;

class ApigLLMModel extends Model
{
    /**
     * @var string
     */
    public $address;

    /**
     * @var string
     */
    public $apiKey;

    /**
     * @var string
     */
    public $createdTime;

    /**
     * @var string
     */
    public $desc;

    /**
     * @var string
     */
    public $gatewayId;

    /**
     * @var string
     */
    public $modelId;

    /**
     * @var string
     */
    public $models;

    /**
     * @var string
     */
    public $modelsWeight;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $provider;

    /**
     * @var string
     */
    public $targetId;

    /**
     * @var string
     */
    public $tenantId;

    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $updateTime;
    protected $_name = [
        'address' => 'address',
        'apiKey' => 'apiKey',
        'createdTime' => 'createdTime',
        'desc' => 'desc',
        'gatewayId' => 'gatewayId',
        'modelId' => 'modelId',
        'models' => 'models',
        'modelsWeight' => 'modelsWeight',
        'name' => 'name',
        'provider' => 'provider',
        'targetId' => 'targetId',
        'tenantId' => 'tenantId',
        'type' => 'type',
        'updateTime' => 'updateTime',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->address) {
            $res['address'] = $this->address;
        }

        if (null !== $this->apiKey) {
            $res['apiKey'] = $this->apiKey;
        }

        if (null !== $this->createdTime) {
            $res['createdTime'] = $this->createdTime;
        }

        if (null !== $this->desc) {
            $res['desc'] = $this->desc;
        }

        if (null !== $this->gatewayId) {
            $res['gatewayId'] = $this->gatewayId;
        }

        if (null !== $this->modelId) {
            $res['modelId'] = $this->modelId;
        }

        if (null !== $this->models) {
            $res['models'] = $this->models;
        }

        if (null !== $this->modelsWeight) {
            $res['modelsWeight'] = $this->modelsWeight;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->provider) {
            $res['provider'] = $this->provider;
        }

        if (null !== $this->targetId) {
            $res['targetId'] = $this->targetId;
        }

        if (null !== $this->tenantId) {
            $res['tenantId'] = $this->tenantId;
        }

        if (null !== $this->type) {
            $res['type'] = $this->type;
        }

        if (null !== $this->updateTime) {
            $res['updateTime'] = $this->updateTime;
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
        if (isset($map['address'])) {
            $model->address = $map['address'];
        }

        if (isset($map['apiKey'])) {
            $model->apiKey = $map['apiKey'];
        }

        if (isset($map['createdTime'])) {
            $model->createdTime = $map['createdTime'];
        }

        if (isset($map['desc'])) {
            $model->desc = $map['desc'];
        }

        if (isset($map['gatewayId'])) {
            $model->gatewayId = $map['gatewayId'];
        }

        if (isset($map['modelId'])) {
            $model->modelId = $map['modelId'];
        }

        if (isset($map['models'])) {
            $model->models = $map['models'];
        }

        if (isset($map['modelsWeight'])) {
            $model->modelsWeight = $map['modelsWeight'];
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['provider'])) {
            $model->provider = $map['provider'];
        }

        if (isset($map['targetId'])) {
            $model->targetId = $map['targetId'];
        }

        if (isset($map['tenantId'])) {
            $model->tenantId = $map['tenantId'];
        }

        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        if (isset($map['updateTime'])) {
            $model->updateTime = $map['updateTime'];
        }

        return $model;
    }
}
