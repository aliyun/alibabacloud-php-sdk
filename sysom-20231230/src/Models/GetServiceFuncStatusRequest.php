<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SysOM\V20231230\Models;

use AlibabaCloud\SDK\SysOM\V20231230\Models\GetServiceFuncStatusRequest\params;
use AlibabaCloud\Tea\Model;

class GetServiceFuncStatusRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example ecs
     *
     * @var string
     */
    public $channel;

    /**
     * @description This parameter is required.
     *
     * @var params
     */
    public $params;

    /**
     * @description This parameter is required.
     *
     * @example livetrace
     *
     * @var string
     */
    public $serviceName;
    protected $_name = [
        'channel' => 'channel',
        'params' => 'params',
        'serviceName' => 'service_name',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->channel) {
            $res['channel'] = $this->channel;
        }
        if (null !== $this->params) {
            $res['params'] = null !== $this->params ? $this->params->toMap() : null;
        }
        if (null !== $this->serviceName) {
            $res['service_name'] = $this->serviceName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetServiceFuncStatusRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['channel'])) {
            $model->channel = $map['channel'];
        }
        if (isset($map['params'])) {
            $model->params = params::fromMap($map['params']);
        }
        if (isset($map['service_name'])) {
            $model->serviceName = $map['service_name'];
        }

        return $model;
    }
}
