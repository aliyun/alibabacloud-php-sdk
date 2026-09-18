<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AISC\V20260101\Models;

use AlibabaCloud\Dara\Model;

class CreateAttackTargetRequest extends Model
{
    /**
     * @var string
     */
    public $apiKey;

    /**
     * @var string
     */
    public $connectionConfig;

    /**
     * @var string
     */
    public $connectionMethod;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $endpoint;

    /**
     * @var string
     */
    public $modelName;

    /**
     * @var string
     */
    public $provider;

    /**
     * @var string
     */
    public $targetName;

    /**
     * @var string
     */
    public $targetType;
    protected $_name = [
        'apiKey' => 'ApiKey',
        'connectionConfig' => 'ConnectionConfig',
        'connectionMethod' => 'ConnectionMethod',
        'description' => 'Description',
        'endpoint' => 'Endpoint',
        'modelName' => 'ModelName',
        'provider' => 'Provider',
        'targetName' => 'TargetName',
        'targetType' => 'TargetType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->apiKey) {
            $res['ApiKey'] = $this->apiKey;
        }

        if (null !== $this->connectionConfig) {
            $res['ConnectionConfig'] = $this->connectionConfig;
        }

        if (null !== $this->connectionMethod) {
            $res['ConnectionMethod'] = $this->connectionMethod;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->endpoint) {
            $res['Endpoint'] = $this->endpoint;
        }

        if (null !== $this->modelName) {
            $res['ModelName'] = $this->modelName;
        }

        if (null !== $this->provider) {
            $res['Provider'] = $this->provider;
        }

        if (null !== $this->targetName) {
            $res['TargetName'] = $this->targetName;
        }

        if (null !== $this->targetType) {
            $res['TargetType'] = $this->targetType;
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
        if (isset($map['ApiKey'])) {
            $model->apiKey = $map['ApiKey'];
        }

        if (isset($map['ConnectionConfig'])) {
            $model->connectionConfig = $map['ConnectionConfig'];
        }

        if (isset($map['ConnectionMethod'])) {
            $model->connectionMethod = $map['ConnectionMethod'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['Endpoint'])) {
            $model->endpoint = $map['Endpoint'];
        }

        if (isset($map['ModelName'])) {
            $model->modelName = $map['ModelName'];
        }

        if (isset($map['Provider'])) {
            $model->provider = $map['Provider'];
        }

        if (isset($map['TargetName'])) {
            $model->targetName = $map['TargetName'];
        }

        if (isset($map['TargetType'])) {
            $model->targetType = $map['TargetType'];
        }

        return $model;
    }
}
