<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\Dara\Model;

class DescribeExternalAgentRequest extends Model
{
    /**
     * @var string
     */
    public $agentMode;

    /**
     * @var string
     */
    public $privateIpAddress;
    protected $_name = [
        'agentMode' => 'AgentMode',
        'privateIpAddress' => 'PrivateIpAddress',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
