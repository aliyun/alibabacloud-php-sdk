<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Chatbot\V20220408\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Chatbot\V20220408\Models\CreateIntentRequest\intentDefinition;

class CreateIntentRequest extends Model
{
    /**
     * @var string
     */
    public $agentKey;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var intentDefinition
     */
    public $intentDefinition;
    protected $_name = [
        'agentKey' => 'AgentKey',
        'instanceId' => 'InstanceId',
        'intentDefinition' => 'IntentDefinition',
    ];

    public function validate()
    {
        if (null !== $this->intentDefinition) {
            $this->intentDefinition->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->agentKey) {
            $res['AgentKey'] = $this->agentKey;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->intentDefinition) {
            $res['IntentDefinition'] = null !== $this->intentDefinition ? $this->intentDefinition->toArray($noStream) : $this->intentDefinition;
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

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['IntentDefinition'])) {
            $model->intentDefinition = intentDefinition::fromMap($map['IntentDefinition']);
        }

        return $model;
    }
}
