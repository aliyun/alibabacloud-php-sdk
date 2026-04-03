<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentRun\V20250910\Models;

use AlibabaCloud\Dara\Model;

class IMBotMetadata extends Model
{
    /**
     * @var string
     */
    public $agentRuntimeEndpointId;

    /**
     * @var string
     */
    public $agentRuntimeEndpointUrl;

    /**
     * @var string
     */
    public $agentRuntimeId;

    /**
     * @var string
     */
    public $customFunctionMeta;

    /**
     * @var string
     */
    public $protocolType;

    /**
     * @var string
     */
    public $role;
    protected $_name = [
        'agentRuntimeEndpointId' => 'agentRuntimeEndpointId',
        'agentRuntimeEndpointUrl' => 'agentRuntimeEndpointUrl',
        'agentRuntimeId' => 'agentRuntimeId',
        'customFunctionMeta' => 'customFunctionMeta',
        'protocolType' => 'protocolType',
        'role' => 'role',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->agentRuntimeEndpointId) {
            $res['agentRuntimeEndpointId'] = $this->agentRuntimeEndpointId;
        }

        if (null !== $this->agentRuntimeEndpointUrl) {
            $res['agentRuntimeEndpointUrl'] = $this->agentRuntimeEndpointUrl;
        }

        if (null !== $this->agentRuntimeId) {
            $res['agentRuntimeId'] = $this->agentRuntimeId;
        }

        if (null !== $this->customFunctionMeta) {
            $res['customFunctionMeta'] = $this->customFunctionMeta;
        }

        if (null !== $this->protocolType) {
            $res['protocolType'] = $this->protocolType;
        }

        if (null !== $this->role) {
            $res['role'] = $this->role;
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
        if (isset($map['agentRuntimeEndpointId'])) {
            $model->agentRuntimeEndpointId = $map['agentRuntimeEndpointId'];
        }

        if (isset($map['agentRuntimeEndpointUrl'])) {
            $model->agentRuntimeEndpointUrl = $map['agentRuntimeEndpointUrl'];
        }

        if (isset($map['agentRuntimeId'])) {
            $model->agentRuntimeId = $map['agentRuntimeId'];
        }

        if (isset($map['customFunctionMeta'])) {
            $model->customFunctionMeta = $map['customFunctionMeta'];
        }

        if (isset($map['protocolType'])) {
            $model->protocolType = $map['protocolType'];
        }

        if (isset($map['role'])) {
            $model->role = $map['role'];
        }

        return $model;
    }
}
