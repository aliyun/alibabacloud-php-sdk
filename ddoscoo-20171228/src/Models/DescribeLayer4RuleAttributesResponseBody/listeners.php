<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20171228\Models\DescribeLayer4RuleAttributesResponseBody;

use AlibabaCloud\SDK\Ddoscoo\V20171228\Models\DescribeLayer4RuleAttributesResponseBody\listeners\config;
use AlibabaCloud\Tea\Model;

class listeners extends Model
{
    /**
     * @var config
     */
    public $config;

    /**
     * @example 233
     *
     * @var int
     */
    public $frontendPort;

    /**
     * @example ddoscoo-cn-XXXXX
     *
     * @var string
     */
    public $instanceId;

    /**
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
     * @return listeners
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
