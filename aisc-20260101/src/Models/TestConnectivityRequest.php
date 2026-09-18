<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AISC\V20260101\Models;

use AlibabaCloud\Dara\Model;

class TestConnectivityRequest extends Model
{
    /**
     * @var string
     */
    public $apiKey;

    /**
     * @var string
     */
    public $checkId;

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
    public $endpoint;

    /**
     * @var string
     */
    public $modelName;

    /**
     * @var string
     */
    public $targetId;
    protected $_name = [
        'apiKey' => 'ApiKey',
        'checkId' => 'CheckId',
        'connectionConfig' => 'ConnectionConfig',
        'connectionMethod' => 'ConnectionMethod',
        'endpoint' => 'Endpoint',
        'modelName' => 'ModelName',
        'targetId' => 'TargetId',
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

        if (null !== $this->checkId) {
            $res['CheckId'] = $this->checkId;
        }

        if (null !== $this->connectionConfig) {
            $res['ConnectionConfig'] = $this->connectionConfig;
        }

        if (null !== $this->connectionMethod) {
            $res['ConnectionMethod'] = $this->connectionMethod;
        }

        if (null !== $this->endpoint) {
            $res['Endpoint'] = $this->endpoint;
        }

        if (null !== $this->modelName) {
            $res['ModelName'] = $this->modelName;
        }

        if (null !== $this->targetId) {
            $res['TargetId'] = $this->targetId;
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

        if (isset($map['CheckId'])) {
            $model->checkId = $map['CheckId'];
        }

        if (isset($map['ConnectionConfig'])) {
            $model->connectionConfig = $map['ConnectionConfig'];
        }

        if (isset($map['ConnectionMethod'])) {
            $model->connectionMethod = $map['ConnectionMethod'];
        }

        if (isset($map['Endpoint'])) {
            $model->endpoint = $map['Endpoint'];
        }

        if (isset($map['ModelName'])) {
            $model->modelName = $map['ModelName'];
        }

        if (isset($map['TargetId'])) {
            $model->targetId = $map['TargetId'];
        }

        return $model;
    }
}
