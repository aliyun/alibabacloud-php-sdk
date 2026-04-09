<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentRun\V20250910\Models;

use AlibabaCloud\Dara\Model;

class CreateFlowEndpointInput extends Model
{
    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $flowEndpointName;

    /**
     * @var FlowEndpointRoutingConfig[]
     */
    public $routingConfiguration;

    /**
     * @var string[]
     */
    public $tags;

    /**
     * @var string
     */
    public $targetVersion;
    protected $_name = [
        'description' => 'description',
        'flowEndpointName' => 'flowEndpointName',
        'routingConfiguration' => 'routingConfiguration',
        'tags' => 'tags',
        'targetVersion' => 'targetVersion',
    ];

    public function validate()
    {
        if (\is_array($this->routingConfiguration)) {
            Model::validateArray($this->routingConfiguration);
        }
        if (\is_array($this->tags)) {
            Model::validateArray($this->tags);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }

        if (null !== $this->flowEndpointName) {
            $res['flowEndpointName'] = $this->flowEndpointName;
        }

        if (null !== $this->routingConfiguration) {
            if (\is_array($this->routingConfiguration)) {
                $res['routingConfiguration'] = [];
                $n1 = 0;
                foreach ($this->routingConfiguration as $item1) {
                    $res['routingConfiguration'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->tags) {
            if (\is_array($this->tags)) {
                $res['tags'] = [];
                $n1 = 0;
                foreach ($this->tags as $item1) {
                    $res['tags'][$n1] = $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['description'])) {
            $model->description = $map['description'];
        }

        if (isset($map['flowEndpointName'])) {
            $model->flowEndpointName = $map['flowEndpointName'];
        }

        if (isset($map['routingConfiguration'])) {
            if (!empty($map['routingConfiguration'])) {
                $model->routingConfiguration = [];
                $n1 = 0;
                foreach ($map['routingConfiguration'] as $item1) {
                    $model->routingConfiguration[$n1] = FlowEndpointRoutingConfig::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['tags'])) {
            if (!empty($map['tags'])) {
                $model->tags = [];
                $n1 = 0;
                foreach ($map['tags'] as $item1) {
                    $model->tags[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['targetVersion'])) {
            $model->targetVersion = $map['targetVersion'];
        }

        return $model;
    }
}
