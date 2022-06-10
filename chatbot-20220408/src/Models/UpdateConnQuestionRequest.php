<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Chatbot\V20220408\Models;

use AlibabaCloud\Tea\Model;

class UpdateConnQuestionRequest extends Model
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
    public $connQuestionId;

    /**
     * @var int
     */
    public $outlineId;
    protected $_name = [
        'agentKey'       => 'AgentKey',
        'connQuestionId' => 'ConnQuestionId',
        'outlineId'      => 'OutlineId',
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
        if (null !== $this->connQuestionId) {
            $res['ConnQuestionId'] = $this->connQuestionId;
        }
        if (null !== $this->outlineId) {
            $res['OutlineId'] = $this->outlineId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateConnQuestionRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AgentKey'])) {
            $model->agentKey = $map['AgentKey'];
        }
        if (isset($map['ConnQuestionId'])) {
            $model->connQuestionId = $map['ConnQuestionId'];
        }
        if (isset($map['OutlineId'])) {
            $model->outlineId = $map['OutlineId'];
        }

        return $model;
    }
}
