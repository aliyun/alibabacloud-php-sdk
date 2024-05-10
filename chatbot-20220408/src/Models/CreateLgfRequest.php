<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Chatbot\V20220408\Models;

use AlibabaCloud\SDK\Chatbot\V20220408\Models\CreateLgfRequest\lgfDefinition;
use AlibabaCloud\Tea\Model;

class CreateLgfRequest extends Model
{
    /**
     * @example ac627989eb4f8a98ed05fd098bbae5_p_beebot_public
     *
     * @var string
     */
    public $agentKey;

    /**
     * @description This parameter is required.
     *
     * @example chatbot-cn-yjzbyrEvqd
     *
     * @var string
     */
    public $instanceId;

    /**
     * @var lgfDefinition
     */
    public $lgfDefinition;
    protected $_name = [
        'agentKey'      => 'AgentKey',
        'instanceId'    => 'InstanceId',
        'lgfDefinition' => 'LgfDefinition',
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
        if (null !== $this->lgfDefinition) {
            $res['LgfDefinition'] = null !== $this->lgfDefinition ? $this->lgfDefinition->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateLgfRequest
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
        if (isset($map['LgfDefinition'])) {
            $model->lgfDefinition = lgfDefinition::fromMap($map['LgfDefinition']);
        }

        return $model;
    }
}
