<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Chatbot\V20220408\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Chatbot\V20220408\Models\CreateUserSayRequest\userSayDefinition;

class CreateUserSayRequest extends Model
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
     * @var userSayDefinition
     */
    public $userSayDefinition;
    protected $_name = [
        'agentKey' => 'AgentKey',
        'instanceId' => 'InstanceId',
        'userSayDefinition' => 'UserSayDefinition',
    ];

    public function validate()
    {
        if (null !== $this->userSayDefinition) {
            $this->userSayDefinition->validate();
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

        if (null !== $this->userSayDefinition) {
            $res['UserSayDefinition'] = null !== $this->userSayDefinition ? $this->userSayDefinition->toArray($noStream) : $this->userSayDefinition;
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

        if (isset($map['UserSayDefinition'])) {
            $model->userSayDefinition = userSayDefinition::fromMap($map['UserSayDefinition']);
        }

        return $model;
    }
}
