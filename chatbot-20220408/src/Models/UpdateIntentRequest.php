<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Chatbot\V20220408\Models;

use AlibabaCloud\SDK\Chatbot\V20220408\Models\UpdateIntentRequest\intentDefinition;
use AlibabaCloud\Tea\Model;

class UpdateIntentRequest extends Model
{
    /**
     * @example ac627989eb4f8a98ed05fd098bbae5_p_beebot_public
     *
     * @var string
     */
    public $agentKey;

    /**
     * @example chatbot-cn-yjzbyrEvqd
     *
     * @var string
     */
    public $instanceId;

    /**
     * @var intentDefinition
     */
    public $intentDefinition;

    /**
     * @example 234234234534
     *
     * @var int
     */
    public $intentId;
    protected $_name = [
        'agentKey'         => 'AgentKey',
        'instanceId'       => 'InstanceId',
        'intentDefinition' => 'IntentDefinition',
        'intentId'         => 'IntentId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->agentKey) {
            $res['AgentKey'] = $this->agentKey;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->intentDefinition) {
            $res['IntentDefinition'] = null !== $this->intentDefinition ? $this->intentDefinition->toMap() : null;
        }
        if (null !== $this->intentId) {
            $res['IntentId'] = $this->intentId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateIntentRequest
     */
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
        if (isset($map['IntentId'])) {
            $model->intentId = $map['IntentId'];
        }

        return $model;
    }
}
