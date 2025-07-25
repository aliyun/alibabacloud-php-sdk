<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models;

use AlibabaCloud\Tea\Model;

class HttpApiOperationInfo extends Model
{
    /**
     * @var AuthConfig
     */
    public $authConfig;

    /**
     * @example 1719386834548
     *
     * @var int
     */
    public $createTimestamp;

    /**
     * @var HttpApiDeployConfig[]
     */
    public $deployConfigs;

    /**
     * @example 获取用户信息
     *
     * @var string
     */
    public $description;

    /**
     * @example true
     *
     * @var bool
     */
    public $enableAuth;

    /**
     * @example GET
     *
     * @var string
     */
    public $method;

    /**
     * @var HttpApiMockContract
     */
    public $mock;

    /**
     * @example GetUserInfo
     *
     * @var string
     */
    public $name;

    /**
     * @example op-xxx
     *
     * @var string
     */
    public $operationId;

    /**
     * @example /user/123
     *
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
     * @example Deployed
     *
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

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->authConfig) {
            $res['authConfig'] = null !== $this->authConfig ? $this->authConfig->toMap() : null;
        }
        if (null !== $this->createTimestamp) {
            $res['createTimestamp'] = $this->createTimestamp;
        }
        if (null !== $this->deployConfigs) {
            $res['deployConfigs'] = [];
            if (null !== $this->deployConfigs && \is_array($this->deployConfigs)) {
                $n = 0;
                foreach ($this->deployConfigs as $item) {
                    $res['deployConfigs'][$n++] = null !== $item ? $item->toMap() : $item;
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
            $res['mock'] = null !== $this->mock ? $this->mock->toMap() : null;
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
            $res['request'] = null !== $this->request ? $this->request->toMap() : null;
        }
        if (null !== $this->response) {
            $res['response'] = null !== $this->response ? $this->response->toMap() : null;
        }
        if (null !== $this->status) {
            $res['status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return HttpApiOperationInfo
     */
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
                $n = 0;
                foreach ($map['deployConfigs'] as $item) {
                    $model->deployConfigs[$n++] = null !== $item ? HttpApiDeployConfig::fromMap($item) : $item;
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
