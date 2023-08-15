<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\Tea\Model;

class DescribeExternalAgentRequest extends Model
{
    /**
     * @example admin
     *
     * @var string
     */
    public $agentMode;

    /**
     * @example true
     *
     * @var string
     */
    public $privateIpAddress;
    protected $_name = [
        'agentMode'        => 'AgentMode',
        'privateIpAddress' => 'PrivateIpAddress',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->agentMode) {
            $res['AgentMode'] = $this->agentMode;
        }
        if (null !== $this->privateIpAddress) {
            $res['PrivateIpAddress'] = $this->privateIpAddress;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeExternalAgentRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AgentMode'])) {
            $model->agentMode = $map['AgentMode'];
        }
        if (isset($map['PrivateIpAddress'])) {
            $model->privateIpAddress = $map['PrivateIpAddress'];
        }

        return $model;
    }
}
