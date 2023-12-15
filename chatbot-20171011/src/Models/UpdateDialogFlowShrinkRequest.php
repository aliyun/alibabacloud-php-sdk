<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Chatbot\V20171011\Models;

use AlibabaCloud\Tea\Model;

class UpdateDialogFlowShrinkRequest extends Model
{
    /**
     * @example ac627989eb4f8a98ed05fd098bbae5_p_beebot_public
     *
     * @var string
     */
    public $agentKey;

    /**
     * @example 93130
     *
     * @var int
     */
    public $dialogId;

    /**
     * @var string
     */
    public $moduleDefinitionShrink;
    protected $_name = [
        'agentKey'               => 'AgentKey',
        'dialogId'               => 'DialogId',
        'moduleDefinitionShrink' => 'ModuleDefinition',
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
        if (null !== $this->dialogId) {
            $res['DialogId'] = $this->dialogId;
        }
        if (null !== $this->moduleDefinitionShrink) {
            $res['ModuleDefinition'] = $this->moduleDefinitionShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateDialogFlowShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AgentKey'])) {
            $model->agentKey = $map['AgentKey'];
        }
        if (isset($map['DialogId'])) {
            $model->dialogId = $map['DialogId'];
        }
        if (isset($map['ModuleDefinition'])) {
            $model->moduleDefinitionShrink = $map['ModuleDefinition'];
        }

        return $model;
    }
}
