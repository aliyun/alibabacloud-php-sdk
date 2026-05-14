<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\APIG\V20240327\Models\HiMarketAgentConfig\agentAPIConfig;

class HiMarketAgentConfig extends Model
{
    /**
     * @var agentAPIConfig
     */
    public $agentAPIConfig;
    protected $_name = [
        'agentAPIConfig' => 'agentAPIConfig',
    ];

    public function validate()
    {
        if (null !== $this->agentAPIConfig) {
            $this->agentAPIConfig->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->agentAPIConfig) {
            $res['agentAPIConfig'] = null !== $this->agentAPIConfig ? $this->agentAPIConfig->toArray($noStream) : $this->agentAPIConfig;
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
        if (isset($map['agentAPIConfig'])) {
            $model->agentAPIConfig = agentAPIConfig::fromMap($map['agentAPIConfig']);
        }

        return $model;
    }
}
