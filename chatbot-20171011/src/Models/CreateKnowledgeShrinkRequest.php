<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Chatbot\V20171011\Models;

use AlibabaCloud\Tea\Model;

class CreateKnowledgeShrinkRequest extends Model
{
    /**
     * @example ac627989eb4f8a98ed05fd098bbae5_p_beebot_public
     *
     * @var string
     */
    public $agentKey;

    /**
     * @var string
     */
    public $knowledgeShrink;
    protected $_name = [
        'agentKey'        => 'AgentKey',
        'knowledgeShrink' => 'Knowledge',
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
        if (null !== $this->knowledgeShrink) {
            $res['Knowledge'] = $this->knowledgeShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateKnowledgeShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AgentKey'])) {
            $model->agentKey = $map['AgentKey'];
        }
        if (isset($map['Knowledge'])) {
            $model->knowledgeShrink = $map['Knowledge'];
        }

        return $model;
    }
}
