<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Chatbot\V20220408\Models;

use AlibabaCloud\Dara\Model;

class DeleteConnQuestionRequest extends Model
{
    /**
     * @var string
     */
    public $agentKey;

    /**
     * @var int
     */
    public $outlineId;
    protected $_name = [
        'agentKey' => 'AgentKey',
        'outlineId' => 'OutlineId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->agentKey) {
            $res['AgentKey'] = $this->agentKey;
        }

        if (null !== $this->outlineId) {
            $res['OutlineId'] = $this->outlineId;
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

        if (isset($map['OutlineId'])) {
            $model->outlineId = $map['OutlineId'];
        }

        return $model;
    }
}
