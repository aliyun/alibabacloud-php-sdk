<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentRun\V20250910\Models;

use AlibabaCloud\Dara\Model;

class DiscoveryEndpoint extends Model
{
    /**
     * @var AgentEndpointConfig[]
     */
    public $agentEndpointConfigs;

    /**
     * @var string
     */
    public $credentialName;

    /**
     * @var string
     */
    public $name;

    /**
     * @var bool
     */
    public $returnAgentCredentialContent;
    protected $_name = [
        'agentEndpointConfigs' => 'agentEndpointConfigs',
        'credentialName' => 'credentialName',
        'name' => 'name',
        'returnAgentCredentialContent' => 'returnAgentCredentialContent',
    ];

    public function validate()
    {
        if (\is_array($this->agentEndpointConfigs)) {
            Model::validateArray($this->agentEndpointConfigs);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->agentEndpointConfigs) {
            if (\is_array($this->agentEndpointConfigs)) {
                $res['agentEndpointConfigs'] = [];
                $n1 = 0;
                foreach ($this->agentEndpointConfigs as $item1) {
                    $res['agentEndpointConfigs'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->credentialName) {
            $res['credentialName'] = $this->credentialName;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->returnAgentCredentialContent) {
            $res['returnAgentCredentialContent'] = $this->returnAgentCredentialContent;
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
        if (isset($map['agentEndpointConfigs'])) {
            if (!empty($map['agentEndpointConfigs'])) {
                $model->agentEndpointConfigs = [];
                $n1 = 0;
                foreach ($map['agentEndpointConfigs'] as $item1) {
                    $model->agentEndpointConfigs[$n1] = AgentEndpointConfig::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['credentialName'])) {
            $model->credentialName = $map['credentialName'];
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['returnAgentCredentialContent'])) {
            $model->returnAgentCredentialContent = $map['returnAgentCredentialContent'];
        }

        return $model;
    }
}
