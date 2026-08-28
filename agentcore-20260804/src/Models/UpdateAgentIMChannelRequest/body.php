<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentCore\V20260804\Models\UpdateAgentIMChannelRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\UpdateAgentIMChannelRequest\body\channelConfig;

class body extends Model
{
    /**
     * @var channelConfig
     */
    public $channelConfig;

    /**
     * @var bool
     */
    public $enabled;

    /**
     * @var string
     */
    public $serviceEndpointId;
    protected $_name = [
        'channelConfig' => 'channelConfig',
        'enabled' => 'enabled',
        'serviceEndpointId' => 'serviceEndpointId',
    ];

    public function validate()
    {
        if (null !== $this->channelConfig) {
            $this->channelConfig->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->channelConfig) {
            $res['channelConfig'] = null !== $this->channelConfig ? $this->channelConfig->toArray($noStream) : $this->channelConfig;
        }

        if (null !== $this->enabled) {
            $res['enabled'] = $this->enabled;
        }

        if (null !== $this->serviceEndpointId) {
            $res['serviceEndpointId'] = $this->serviceEndpointId;
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
        if (isset($map['channelConfig'])) {
            $model->channelConfig = channelConfig::fromMap($map['channelConfig']);
        }

        if (isset($map['enabled'])) {
            $model->enabled = $map['enabled'];
        }

        if (isset($map['serviceEndpointId'])) {
            $model->serviceEndpointId = $map['serviceEndpointId'];
        }

        return $model;
    }
}
