<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models;

use AlibabaCloud\Tea\Model;

class HttpApiOperation extends Model
{
    /**
     * @var AuthConfig
     */
    public $authConfig;

    /**
     * @example 获取用户信息
     *
     * @var string
     */
    public $description;

    /**
     * @var bool
     */
    public $enableAuth;

    /**
     * @description This parameter is required.
     *
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
     * @description This parameter is required.
     *
     * @example GetUserInfo
     *
     * @var string
     */
    public $name;

    /**
     * @description This parameter is required.
     *
     * @example /user
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
    protected $_name = [
        'authConfig' => 'authConfig',
        'description' => 'description',
        'enableAuth' => 'enableAuth',
        'method' => 'method',
        'mock' => 'mock',
        'name' => 'name',
        'path' => 'path',
        'request' => 'request',
        'response' => 'response',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->authConfig) {
            $res['authConfig'] = null !== $this->authConfig ? $this->authConfig->toMap() : null;
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
        if (null !== $this->path) {
            $res['path'] = $this->path;
        }
        if (null !== $this->request) {
            $res['request'] = null !== $this->request ? $this->request->toMap() : null;
        }
        if (null !== $this->response) {
            $res['response'] = null !== $this->response ? $this->response->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return HttpApiOperation
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['authConfig'])) {
            $model->authConfig = AuthConfig::fromMap($map['authConfig']);
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
        if (isset($map['path'])) {
            $model->path = $map['path'];
        }
        if (isset($map['request'])) {
            $model->request = HttpApiRequestContract::fromMap($map['request']);
        }
        if (isset($map['response'])) {
            $model->response = HttpApiResponseContract::fromMap($map['response']);
        }

        return $model;
    }
}
