<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RocketMQ\V20220801\Models;

use AlibabaCloud\Dara\Model;

class RespondAgentConversationActionRequest extends Model
{
    /**
     * @var string[]
     */
    public $answers;

    /**
     * @var string
     */
    public $decision;

    /**
     * @var string
     */
    public $note;
    protected $_name = [
        'answers' => 'answers',
        'decision' => 'decision',
        'note' => 'note',
    ];

    public function validate()
    {
        if (\is_array($this->answers)) {
            Model::validateArray($this->answers);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->answers) {
            if (\is_array($this->answers)) {
                $res['answers'] = [];
                foreach ($this->answers as $key1 => $value1) {
                    $res['answers'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->decision) {
            $res['decision'] = $this->decision;
        }

        if (null !== $this->note) {
            $res['note'] = $this->note;
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
        if (isset($map['answers'])) {
            if (!empty($map['answers'])) {
                $model->answers = [];
                foreach ($map['answers'] as $key1 => $value1) {
                    $model->answers[$key1] = $value1;
                }
            }
        }

        if (isset($map['decision'])) {
            $model->decision = $map['decision'];
        }

        if (isset($map['note'])) {
            $model->note = $map['note'];
        }

        return $model;
    }
}
