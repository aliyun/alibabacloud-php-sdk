<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eventbridge\V20200401\Models;

use AlibabaCloud\Dara\Model;

class AskLumaRequest extends Model
{
    /**
     * @var string
     */
    public $agentName;

    /**
     * @var string
     */
    public $conversationId;

    /**
     * @var int
     */
    public $maxRows;

    /**
     * @var string
     */
    public $question;
    protected $_name = [
        'agentName' => 'AgentName',
        'conversationId' => 'ConversationId',
        'maxRows' => 'MaxRows',
        'question' => 'Question',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->agentName) {
            $res['AgentName'] = $this->agentName;
        }

        if (null !== $this->conversationId) {
            $res['ConversationId'] = $this->conversationId;
        }

        if (null !== $this->maxRows) {
            $res['MaxRows'] = $this->maxRows;
        }

        if (null !== $this->question) {
            $res['Question'] = $this->question;
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
        if (isset($map['AgentName'])) {
            $model->agentName = $map['AgentName'];
        }

        if (isset($map['ConversationId'])) {
            $model->conversationId = $map['ConversationId'];
        }

        if (isset($map['MaxRows'])) {
            $model->maxRows = $map['MaxRows'];
        }

        if (isset($map['Question'])) {
            $model->question = $map['Question'];
        }

        return $model;
    }
}
