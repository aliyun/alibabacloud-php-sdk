<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Chatbot\V20171011\Models;

use AlibabaCloud\Tea\Model;

class UpdateIntentShrinkRequest extends Model
{
    /**
     * @description 业务空间key,不设置则访问默认业务空间，key值在主账号业务管理页面获取
     *
     * @var string
     */
    public $agentKey;

    /**
     * @var string
     */
    public $intentDefinitionShrink;

    /**
     * @var int
     */
    public $intentId;
    protected $_name = [
        'agentKey'               => 'AgentKey',
        'intentDefinitionShrink' => 'IntentDefinition',
        'intentId'               => 'IntentId',
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
        if (null !== $this->intentDefinitionShrink) {
            $res['IntentDefinition'] = $this->intentDefinitionShrink;
        }
        if (null !== $this->intentId) {
            $res['IntentId'] = $this->intentId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateIntentShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AgentKey'])) {
            $model->agentKey = $map['AgentKey'];
        }
        if (isset($map['IntentDefinition'])) {
            $model->intentDefinitionShrink = $map['IntentDefinition'];
        }
        if (isset($map['IntentId'])) {
            $model->intentId = $map['IntentId'];
        }

        return $model;
    }
}
