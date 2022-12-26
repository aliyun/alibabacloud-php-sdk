<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Chatbot\V20220408\Models;

use AlibabaCloud\Tea\Model;

class UpdateConnQuestionRequest extends Model
{
    /**
     * @example ac627989eb4f8a98ed05fd098bbae5_p_beebot_public
     *
     * @var string
     */
    public $agentKey;

    /**
     * @example 1000000295
     *
     * @var int
     */
    public $connQuestionId;

    /**
     * @example 877397683
     *
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
