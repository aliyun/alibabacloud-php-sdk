<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20171228\Models;

use AlibabaCloud\Tea\Model;

class ConfigLayer4RuleAttributeRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example {"Slimit":{"CpsEnable":1,"MaxconnEnable":1,"Cps":1,"Maxconn":1},"Sla":{"CpsEnable":1,"MaxconnEnable":1,"Cps":100,"Maxconn":1000},"PayloadLen":{"Min":0,"Max":6000}}
     *
     * @var string
     */
    public $config;

    /**
     * @description This parameter is required.
     *
     * @example TCP
     *
     * @var string
     */
    public $forwardProtocol;

    /**
     * @description This parameter is required.
     *
     * @example 233
     *
     * @var int
     */
    public $frontendPort;

    /**
     * @description This parameter is required.
     *
     * @example ddoscoo-cn-XXXXX
     *
     * @var string
     */
    public $instanceId;
    protected $_name = [
        'config'          => 'Config',
        'forwardProtocol' => 'ForwardProtocol',
        'frontendPort'    => 'FrontendPort',
        'instanceId'      => 'InstanceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->config) {
            $res['Config'] = $this->config;
        }
        if (null !== $this->forwardProtocol) {
            $res['ForwardProtocol'] = $this->forwardProtocol;
        }
        if (null !== $this->frontendPort) {
            $res['FrontendPort'] = $this->frontendPort;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ConfigLayer4RuleAttributeRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Config'])) {
            $model->config = $map['Config'];
        }
        if (isset($map['ForwardProtocol'])) {
            $model->forwardProtocol = $map['ForwardProtocol'];
        }
        if (isset($map['FrontendPort'])) {
            $model->frontendPort = $map['FrontendPort'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        return $model;
    }
}
