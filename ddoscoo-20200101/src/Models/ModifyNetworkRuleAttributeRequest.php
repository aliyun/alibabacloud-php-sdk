<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models;

use AlibabaCloud\Tea\Model;

class ModifyNetworkRuleAttributeRequest extends Model
{
    /**
     * @description The session persistence settings of the port forwarding rule. This parameter is a JSON string. The string contains the following fields:
     *
     *   **PersistenceTimeout**: The timeout period of session persistence. This field is required and must be of the integer type. Valid values: **30** to **3600**. Unit: seconds. Default value: **0**. A value of 0 indicates that session persistence is disabled.
     *
     * @example {"PersistenceTimeout":900}
     *
     * @var string
     */
    public $config;

    /**
     * @description The forwarding protocol. Valid values:
     *
     *   **tcp**
     *   **udp**
     *
     * @example tcp
     *
     * @var string
     */
    public $forwardProtocol;

    /**
     * @description The forwarding port.
     *
     * @example 8080
     *
     * @var int
     */
    public $frontendPort;

    /**
     * @description The ID of the instance.
     *
     * > You can call the [DescribeInstanceIds](~~157459~~) operation to query the IDs of all instances.
     * @example ddoscoo-cn-mp91j1ao****
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
     * @return ModifyNetworkRuleAttributeRequest
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
