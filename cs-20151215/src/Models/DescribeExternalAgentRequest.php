<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\Tea\Model;

class DescribeExternalAgentRequest extends Model
{
    /**
     * @description The agent mode.
     *
     * @example admin
     *
     * @var string
     */
    public $agentMode;

    /**
     * @description Specifies whether to obtain the credentials that are used to access the cluster over the internal network.
     *
     *   `true`: obtains the credentials that are used to access the cluster over the internal network.
     *   `false`: obtains the credentials that are used to access the cluster over the Internet.
     *
     * Default value: `false`.
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
