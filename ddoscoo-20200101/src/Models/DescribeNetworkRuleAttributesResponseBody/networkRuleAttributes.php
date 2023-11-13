<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeNetworkRuleAttributesResponseBody;

use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeNetworkRuleAttributesResponseBody\networkRuleAttributes\config;
use AlibabaCloud\Tea\Model;

class networkRuleAttributes extends Model
{
    /**
     * @description The mitigation settings of the port forwarding rule.
     *
     * @var config
     */
    public $config;

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
     * @example ddoscoo-cn-mp91j1ao****
     *
     * @var string
     */
    public $instanceId;

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
    public $protocol;
    protected $_name = [
        'config'       => 'Config',
        'frontendPort' => 'FrontendPort',
        'instanceId'   => 'InstanceId',
        'protocol'     => 'Protocol',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->config) {
            $res['Config'] = null !== $this->config ? $this->config->toMap() : null;
        }
        if (null !== $this->frontendPort) {
            $res['FrontendPort'] = $this->frontendPort;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->protocol) {
            $res['Protocol'] = $this->protocol;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return networkRuleAttributes
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Config'])) {
            $model->config = config::fromMap($map['Config']);
        }
        if (isset($map['FrontendPort'])) {
            $model->frontendPort = $map['FrontendPort'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['Protocol'])) {
            $model->protocol = $map['Protocol'];
        }

        return $model;
    }
}
