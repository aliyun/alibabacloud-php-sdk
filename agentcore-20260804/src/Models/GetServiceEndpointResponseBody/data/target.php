<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentCore\V20260804\Models\GetServiceEndpointResponseBody\data;

use AlibabaCloud\Dara\Model;

class target extends Model
{
    /**
     * @var string
     */
    public $agentId;

    /**
     * @var string
     */
    public $agentVersion;

    /**
     * @var string
     */
    public $collaborationComponent;

    /**
     * @var string
     */
    public $resourceBindingId;

    /**
     * @var string
     */
    public $targetType;
    protected $_name = [
        'agentId' => 'agentId',
        'agentVersion' => 'agentVersion',
        'collaborationComponent' => 'collaborationComponent',
        'resourceBindingId' => 'resourceBindingId',
        'targetType' => 'targetType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->agentId) {
            $res['agentId'] = $this->agentId;
        }

        if (null !== $this->agentVersion) {
            $res['agentVersion'] = $this->agentVersion;
        }

        if (null !== $this->collaborationComponent) {
            $res['collaborationComponent'] = $this->collaborationComponent;
        }

        if (null !== $this->resourceBindingId) {
            $res['resourceBindingId'] = $this->resourceBindingId;
        }

        if (null !== $this->targetType) {
            $res['targetType'] = $this->targetType;
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
        if (isset($map['agentId'])) {
            $model->agentId = $map['agentId'];
        }

        if (isset($map['agentVersion'])) {
            $model->agentVersion = $map['agentVersion'];
        }

        if (isset($map['collaborationComponent'])) {
            $model->collaborationComponent = $map['collaborationComponent'];
        }

        if (isset($map['resourceBindingId'])) {
            $model->resourceBindingId = $map['resourceBindingId'];
        }

        if (isset($map['targetType'])) {
            $model->targetType = $map['targetType'];
        }

        return $model;
    }
}
