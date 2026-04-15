<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentRun\V20250910\Models;

use AlibabaCloud\Dara\Model;

class FlowEndpoint extends Model
{
    /**
     * @var string
     */
    public $createdAt;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $flowEndpointArn;

    /**
     * @var string
     */
    public $flowEndpointId;

    /**
     * @var string
     */
    public $flowEndpointName;

    /**
     * @var string
     */
    public $flowId;

    /**
     * @var string
     */
    public $lastUpdatedAt;

    /**
     * @var FlowEndpointRoutingConfig[]
     */
    public $routingConfiguration;

    /**
     * @var string
     */
    public $targetVersion;
    protected $_name = [
        'createdAt' => 'createdAt',
        'description' => 'description',
        'flowEndpointArn' => 'flowEndpointArn',
        'flowEndpointId' => 'flowEndpointId',
        'flowEndpointName' => 'flowEndpointName',
        'flowId' => 'flowId',
        'lastUpdatedAt' => 'lastUpdatedAt',
        'routingConfiguration' => 'routingConfiguration',
        'targetVersion' => 'targetVersion',
    ];

    public function validate()
    {
        if (\is_array($this->routingConfiguration)) {
            Model::validateArray($this->routingConfiguration);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->createdAt) {
            $res['createdAt'] = $this->createdAt;
        }

        if (null !== $this->description) {
            $res['description'] = $this->description;
        }

        if (null !== $this->flowEndpointArn) {
            $res['flowEndpointArn'] = $this->flowEndpointArn;
        }

        if (null !== $this->flowEndpointId) {
            $res['flowEndpointId'] = $this->flowEndpointId;
        }

        if (null !== $this->flowEndpointName) {
            $res['flowEndpointName'] = $this->flowEndpointName;
        }

        if (null !== $this->flowId) {
            $res['flowId'] = $this->flowId;
        }

        if (null !== $this->lastUpdatedAt) {
            $res['lastUpdatedAt'] = $this->lastUpdatedAt;
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
        if (isset($map['createdAt'])) {
            $model->createdAt = $map['createdAt'];
        }

        if (isset($map['description'])) {
            $model->description = $map['description'];
        }

        if (isset($map['flowEndpointArn'])) {
            $model->flowEndpointArn = $map['flowEndpointArn'];
        }

        if (isset($map['flowEndpointId'])) {
            $model->flowEndpointId = $map['flowEndpointId'];
        }

        if (isset($map['flowEndpointName'])) {
            $model->flowEndpointName = $map['flowEndpointName'];
        }

        if (isset($map['flowId'])) {
            $model->flowId = $map['flowId'];
        }

        if (isset($map['lastUpdatedAt'])) {
            $model->lastUpdatedAt = $map['lastUpdatedAt'];
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

        if (isset($map['targetVersion'])) {
            $model->targetVersion = $map['targetVersion'];
        }

        return $model;
    }
}
