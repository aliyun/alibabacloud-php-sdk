<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Chatbot\V20171011\Models;

use AlibabaCloud\SDK\Chatbot\V20171011\Models\UpdateKnowledgeRequest\knowledge;
use AlibabaCloud\Tea\Model;

class UpdateKnowledgeRequest extends Model
{
    /**
     * @description 业务空间key,不设置则访问默认业务空间，key值在主账号业务管理页面获取
     *
     * @var string
     */
    public $agentKey;

    /**
     * @var knowledge
     */
    public $knowledge;
    protected $_name = [
        'agentKey'  => 'AgentKey',
        'knowledge' => 'Knowledge',
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
        if (null !== $this->knowledge) {
            $res['Knowledge'] = null !== $this->knowledge ? $this->knowledge->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateKnowledgeRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AgentKey'])) {
            $model->agentKey = $map['AgentKey'];
        }
        if (isset($map['Knowledge'])) {
            $model->knowledge = knowledge::fromMap($map['Knowledge']);
        }

        return $model;
    }
}
