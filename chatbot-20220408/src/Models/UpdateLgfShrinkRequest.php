<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Chatbot\V20220408\Models;

use AlibabaCloud\Tea\Model;

class UpdateLgfShrinkRequest extends Model
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
     * @var string
     */
    public $lgfDefinitionShrink;

    /**
     * @description LGF ID
     *
     * @example 12121
     *
     * @var int
     */
    public $lgfId;
    protected $_name = [
        'agentKey'            => 'AgentKey',
        'instanceId'          => 'InstanceId',
        'lgfDefinitionShrink' => 'LgfDefinition',
        'lgfId'               => 'LgfId',
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
        if (null !== $this->lgfDefinitionShrink) {
            $res['LgfDefinition'] = $this->lgfDefinitionShrink;
        }
        if (null !== $this->lgfId) {
            $res['LgfId'] = $this->lgfId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateLgfShrinkRequest
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
            $model->lgfDefinitionShrink = $map['LgfDefinition'];
        }
        if (isset($map['LgfId'])) {
            $model->lgfId = $map['LgfId'];
        }

        return $model;
    }
}
