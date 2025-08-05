<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models;

use AlibabaCloud\Dara\Model;

class HttpApiOperationInfo extends Model
{
    /**
     * @var AuthConfig
     */
    public $authConfig;

    /**
     * @var int
     */
    public $createTimestamp;

    /**
     * @var HttpApiDeployConfig[]
     */
    public $deployConfigs;

    /**
     * @var string
     */
    public $description;

    /**
     * @var bool
     */
    public $enableAuth;

    /**
     * @var string
     */
    public $method;

    /**
     * @var HttpApiMockContract
     */
    public $mock;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $operationId;

    /**
     * @var string
     */
    public $path;

    /**
     * @var HttpApiRequestContract
     */
    public $request;

    /**
     * @var HttpApiResponseContract
     */
    public $response;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'authConfig' => 'authConfig',
        'createTimestamp' => 'createTimestamp',
        'deployConfigs' => 'deployConfigs',
        'description' => 'description',
        'enableAuth' => 'enableAuth',
        'method' => 'method',
        'mock' => 'mock',
        'name' => 'name',
        'operationId' => 'operationId',
        'path' => 'path',
        'request' => 'request',
        'response' => 'response',
        'status' => 'status',
    ];

    public function validate()
    {
        if (null !== $this->authConfig) {
            $this->authConfig->validate();
        }
        if (\is_array($this->deployConfigs)) {
            Model::validateArray($this->deployConfigs);
        }
        if (null !== $this->mock) {
            $this->mock->validate();
        }
        if (null !== $this->request) {
            $this->request->validate();
        }
        if (null !== $this->response) {
            $this->response->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->authConfig) {
            $res['authConfig'] = null !== $this->authConfig ? $this->authConfig->toArray($noStream) : $this->authConfig;
        }

        if (null !== $this->createTimestamp) {
            $res['createTimestamp'] = $this->createTimestamp;
        }

        if (null !== $this->deployConfigs) {
            if (\is_array($this->deployConfigs)) {
                $res['deployConfigs'] = [];
                $n1 = 0;
                foreach ($this->deployConfigs as $item1) {
                    $res['deployConfigs'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->description) {
            $res['description'] = $this->description;
        }

        if (null !== $this->enableAuth) {
            $res['enableAuth'] = $this->enableAuth;
        }

        if (null !== $this->method) {
            $res['method'] = $this->method;
        }

        if (null !== $this->mock) {
            $res['mock'] = null !== $this->mock ? $this->mock->toArray($noStream) : $this->mock;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->operationId) {
            $res['operationId'] = $this->operationId;
        }

        if (null !== $this->path) {
            $res['path'] = $this->path;
        }

        if (null !== $this->request) {
            $res['request'] = null !== $this->request ? $this->request->toArray($noStream) : $this->request;
        }

        if (null !== $this->response) {
            $res['response'] = null !== $this->response ? $this->response->toArray($noStream) : $this->response;
        }

        if (null !== $this->status) {
            $res['status'] = $this->status;
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
        if (isset($map['authConfig'])) {
            $model->authConfig = AuthConfig::fromMap($map['authConfig']);
        }

        if (isset($map['createTimestamp'])) {
            $model->createTimestamp = $map['createTimestamp'];
        }

        if (isset($map['deployConfigs'])) {
            if (!empty($map['deployConfigs'])) {
                $model->deployConfigs = [];
                $n1 = 0;
                foreach ($map['deployConfigs'] as $item1) {
                    $model->deployConfigs[$n1] = HttpApiDeployConfig::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['description'])) {
            $model->description = $map['description'];
        }

        if (isset($map['enableAuth'])) {
            $model->enableAuth = $map['enableAuth'];
        }

        if (isset($map['method'])) {
            $model->method = $map['method'];
        }

        if (isset($map['mock'])) {
            $model->mock = HttpApiMockContract::fromMap($map['mock']);
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['operationId'])) {
            $model->operationId = $map['operationId'];
        }

        if (isset($map['path'])) {
            $model->path = $map['path'];
        }

        if (isset($map['request'])) {
            $model->request = HttpApiRequestContract::fromMap($map['request']);
        }

        if (isset($map['response'])) {
            $model->response = HttpApiResponseContract::fromMap($map['response']);
        }

        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        return $model;
    }
}
