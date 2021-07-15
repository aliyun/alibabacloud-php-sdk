<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiccs\V20191015\Models;

use AlibabaCloud\Tea\Model;

class StartTaskByAppRequest extends Model
{
    /**
     * @description app
     *
     * @var string
     */
    public $app;

    /**
     * @description operator
     *
     * @var string
     */
    public $operator;

    /**
     * @description token
     *
     * @var string
     */
    public $token;

    /**
     * @description envTypes
     *
     * @var string
     */
    public $envTypes;

    /**
     * @description appName
     *
     * @var string
     */
    public $appName;

    /**
     * @description appId
     *
     * @var int
     */
    public $appId;

    /**
     * @description buildId
     *
     * @var string
     */
    public $buildId;

    /**
     * @description siteType
     *
     * @var string
     */
    public $siteType;

    /**
     * @description requestId
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'app'       => 'App',
        'operator'  => 'Operator',
        'token'     => 'Token',
        'envTypes'  => 'EnvTypes',
        'appName'   => 'AppName',
        'appId'     => 'AppId',
        'buildId'   => 'BuildId',
        'siteType'  => 'SiteType',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->app) {
            $res['App'] = $this->app;
        }
        if (null !== $this->operator) {
            $res['Operator'] = $this->operator;
        }
        if (null !== $this->token) {
            $res['Token'] = $this->token;
        }
        if (null !== $this->envTypes) {
            $res['EnvTypes'] = $this->envTypes;
        }
        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->buildId) {
            $res['BuildId'] = $this->buildId;
        }
        if (null !== $this->siteType) {
            $res['SiteType'] = $this->siteType;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return StartTaskByAppRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['App'])) {
            $model->app = $map['App'];
        }
        if (isset($map['Operator'])) {
            $model->operator = $map['Operator'];
        }
        if (isset($map['Token'])) {
            $model->token = $map['Token'];
        }
        if (isset($map['EnvTypes'])) {
            $model->envTypes = $map['EnvTypes'];
        }
        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['BuildId'])) {
            $model->buildId = $map['BuildId'];
        }
        if (isset($map['SiteType'])) {
            $model->siteType = $map['SiteType'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
