<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentCore\V20260804\Models\GetWorkspacePluginResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\GetWorkspacePluginResponseBody\data\config\agentLoop;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\GetWorkspacePluginResponseBody\data\config\network;

class config extends Model
{
    /**
     * @var agentLoop
     */
    public $agentLoop;

    /**
     * @var network
     */
    public $network;
    protected $_name = [
        'agentLoop' => 'agentLoop',
        'network' => 'network',
    ];

    public function validate()
    {
        if (null !== $this->agentLoop) {
            $this->agentLoop->validate();
        }
        if (null !== $this->network) {
            $this->network->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->agentLoop) {
            $res['agentLoop'] = null !== $this->agentLoop ? $this->agentLoop->toArray($noStream) : $this->agentLoop;
        }

        if (null !== $this->network) {
            $res['network'] = null !== $this->network ? $this->network->toArray($noStream) : $this->network;
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
        if (isset($map['agentLoop'])) {
            $model->agentLoop = agentLoop::fromMap($map['agentLoop']);
        }

        if (isset($map['network'])) {
            $model->network = network::fromMap($map['network']);
        }

        return $model;
    }
}
