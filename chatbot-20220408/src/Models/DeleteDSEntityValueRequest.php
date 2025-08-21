<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Chatbot\V20220408\Models;

use AlibabaCloud\Dara\Model;

class DeleteDSEntityValueRequest extends Model
{
    /**
     * @var string
     */
    public $agentKey;

    /**
     * @var int
     */
    public $entityId;

    /**
     * @var int
     */
    public $entityValueId;

    /**
     * @var string
     */
    public $instanceId;
    protected $_name = [
        'agentKey' => 'AgentKey',
        'entityId' => 'EntityId',
        'entityValueId' => 'EntityValueId',
        'instanceId' => 'InstanceId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->agentKey) {
            $res['AgentKey'] = $this->agentKey;
        }

        if (null !== $this->entityId) {
            $res['EntityId'] = $this->entityId;
        }

        if (null !== $this->entityValueId) {
            $res['EntityValueId'] = $this->entityValueId;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
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
        if (isset($map['AgentKey'])) {
            $model->agentKey = $map['AgentKey'];
        }

        if (isset($map['EntityId'])) {
            $model->entityId = $map['EntityId'];
        }

        if (isset($map['EntityValueId'])) {
            $model->entityValueId = $map['EntityValueId'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        return $model;
    }
}
