<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentRun\V20250910\Models;

use AlibabaCloud\Dara\Model;

class AgentRuntimeEndpoint extends Model
{
    /**
     * @var string
     */
    public $agentRuntimeEndpointArn;

    /**
     * @var string
     */
    public $agentRuntimeEndpointId;

    /**
     * @var string
     */
    public $agentRuntimeEndpointName;

    /**
     * @var string
     */
    public $agentRuntimeId;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $endpointPublicUrl;

    /**
     * @var RoutingConfiguration
     */
    public $routingConfiguration;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $statusReason;

    /**
     * @var string
     */
    public $targetVersion;
    protected $_name = [
        'agentRuntimeEndpointArn' => 'agentRuntimeEndpointArn',
        'agentRuntimeEndpointId' => 'agentRuntimeEndpointId',
        'agentRuntimeEndpointName' => 'agentRuntimeEndpointName',
        'agentRuntimeId' => 'agentRuntimeId',
        'description' => 'description',
        'endpointPublicUrl' => 'endpointPublicUrl',
        'routingConfiguration' => 'routingConfiguration',
        'status' => 'status',
        'statusReason' => 'statusReason',
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
        if (null !== $this->agentRuntimeEndpointArn) {
            $res['agentRuntimeEndpointArn'] = $this->agentRuntimeEndpointArn;
        }

        if (null !== $this->agentRuntimeEndpointId) {
            $res['agentRuntimeEndpointId'] = $this->agentRuntimeEndpointId;
        }

        if (null !== $this->agentRuntimeEndpointName) {
            $res['agentRuntimeEndpointName'] = $this->agentRuntimeEndpointName;
        }

        if (null !== $this->agentRuntimeId) {
            $res['agentRuntimeId'] = $this->agentRuntimeId;
        }

        if (null !== $this->description) {
            $res['description'] = $this->description;
        }

        if (null !== $this->endpointPublicUrl) {
            $res['endpointPublicUrl'] = $this->endpointPublicUrl;
        }

        if (null !== $this->routingConfiguration) {
            $res['routingConfiguration'] = null !== $this->routingConfiguration ? $this->routingConfiguration->toArray($noStream) : $this->routingConfiguration;
        }

        if (null !== $this->status) {
            $res['status'] = $this->status;
        }

        if (null !== $this->statusReason) {
            $res['statusReason'] = $this->statusReason;
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
        if (isset($map['agentRuntimeEndpointArn'])) {
            $model->agentRuntimeEndpointArn = $map['agentRuntimeEndpointArn'];
        }

        if (isset($map['agentRuntimeEndpointId'])) {
            $model->agentRuntimeEndpointId = $map['agentRuntimeEndpointId'];
        }

        if (isset($map['agentRuntimeEndpointName'])) {
            $model->agentRuntimeEndpointName = $map['agentRuntimeEndpointName'];
        }

        if (isset($map['agentRuntimeId'])) {
            $model->agentRuntimeId = $map['agentRuntimeId'];
        }

        if (isset($map['description'])) {
            $model->description = $map['description'];
        }

        if (isset($map['endpointPublicUrl'])) {
            $model->endpointPublicUrl = $map['endpointPublicUrl'];
        }

        if (isset($map['routingConfiguration'])) {
            $model->routingConfiguration = RoutingConfiguration::fromMap($map['routingConfiguration']);
        }

        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        if (isset($map['statusReason'])) {
            $model->statusReason = $map['statusReason'];
        }

        if (isset($map['targetVersion'])) {
            $model->targetVersion = $map['targetVersion'];
        }

        return $model;
    }
}
