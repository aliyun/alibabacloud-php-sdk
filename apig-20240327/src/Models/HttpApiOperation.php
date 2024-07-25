<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models;

use AlibabaCloud\Tea\Model;

class HttpApiOperation extends Model
{
    /**
     * @example 获取用户信息
     *
     * @var string
     */
    public $description;

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
        'description' => 'description',
        'method'      => 'method',
        'mock'        => 'mock',
        'name'        => 'name',
        'path'        => 'path',
        'request'     => 'request',
        'response'    => 'response',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->description) {
            $res['description'] = $this->description;
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
        if (isset($map['description'])) {
            $model->description = $map['description'];
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
