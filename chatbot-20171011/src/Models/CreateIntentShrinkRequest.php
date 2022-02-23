<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Chatbot\V20171011\Models;

use AlibabaCloud\Tea\Model;

class CreateIntentShrinkRequest extends Model
{
    /**
     * @description 业务空间key,不设置则访问默认业务空间，key值在主账号业务管理页面获取
     *
     * @var string
     */
    public $agentKey;

    /**
     * @var int
     */
    public $dialogId;

    /**
     * @var string
     */
    public $intentDefinitionShrink;
    protected $_name = [
        'agentKey'               => 'AgentKey',
        'dialogId'               => 'DialogId',
        'intentDefinitionShrink' => 'IntentDefinition',
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
        if (null !== $this->intentDefinitionShrink) {
            $res['IntentDefinition'] = $this->intentDefinitionShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateIntentShrinkRequest
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
        if (isset($map['IntentDefinition'])) {
            $model->intentDefinitionShrink = $map['IntentDefinition'];
        }

        return $model;
    }
}
