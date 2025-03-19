<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models;

use AlibabaCloud\SDK\APIG\V20240327\Models\DeployHttpApiRequest\restApiConfig;
use AlibabaCloud\Tea\Model;

class DeployHttpApiRequest extends Model
{
    /**
     * @description Rest API deployment configuration. Required when deploying an HTTP API as a Rest API.
     *
     * @var restApiConfig
     */
    public $restApiConfig;

    /**
     * @description Route ID. This must be provided when publishing the route of an HTTP API.
     *
     * @example hr-cr82undlhtgrl***
     *
     * @var string
     */
    public $routeId;
    protected $_name = [
        'restApiConfig' => 'restApiConfig',
        'routeId' => 'routeId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->restApiConfig) {
            $res['restApiConfig'] = null !== $this->restApiConfig ? $this->restApiConfig->toMap() : null;
        }
        if (null !== $this->routeId) {
            $res['routeId'] = $this->routeId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeployHttpApiRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['restApiConfig'])) {
            $model->restApiConfig = restApiConfig::fromMap($map['restApiConfig']);
        }
        if (isset($map['routeId'])) {
            $model->routeId = $map['routeId'];
        }

        return $model;
    }
}
