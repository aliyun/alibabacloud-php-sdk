<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentRun\V20250910\Models;

use AlibabaCloud\Dara\Model;

class CreateAgentRuntimeEndpointInput extends Model
{
    /**
     * @var string
     */
    public $agentRuntimeEndpointName;

    /**
     * @var string
     */
    public $description;

    /**
     * @var RoutingConfiguration
     */
    public $routingConfiguration;

    /**
     * @var string
     */
    public $targetVersion;
    protected $_name = [
        'agentRuntimeEndpointName' => 'agentRuntimeEndpointName',
        'description' => 'description',
        'routingConfiguration' => 'routingConfiguration',
        'targetVersion' => 'targetVersion',
    ];

    public function validate()
    {
        if (null !== $this->routingConfiguration) {
            $this->routingConfiguration->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->agentRuntimeEndpointName) {
            $res['agentRuntimeEndpointName'] = $this->agentRuntimeEndpointName;
        }

        if (null !== $this->description) {
            $res['description'] = $this->description;
        }

        if (null !== $this->routingConfiguration) {
            $res['routingConfiguration'] = null !== $this->routingConfiguration ? $this->routingConfiguration->toArray($noStream) : $this->routingConfiguration;
        }

        if (null !== $this->targetVersion) {
            $res['targetVersion'] = $this->targetVersion;
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
        if (isset($map['agentRuntimeEndpointName'])) {
            $model->agentRuntimeEndpointName = $map['agentRuntimeEndpointName'];
        }

        if (isset($map['description'])) {
            $model->description = $map['description'];
        }

        if (isset($map['routingConfiguration'])) {
            $model->routingConfiguration = RoutingConfiguration::fromMap($map['routingConfiguration']);
        }

        if (isset($map['targetVersion'])) {
            $model->targetVersion = $map['targetVersion'];
        }

        return $model;
    }
}
