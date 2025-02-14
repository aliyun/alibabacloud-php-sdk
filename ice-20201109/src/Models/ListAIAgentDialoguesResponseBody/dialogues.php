<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\ListAIAgentDialoguesResponseBody;

use AlibabaCloud\Dara\Model;

class dialogues extends Model
{
    /**
     * @var string
     */
    public $dialogueId;
    /**
     * @var string
     */
    public $producer;
    /**
     * @var string
     */
    public $roundId;
    /**
     * @var string
     */
    public $text;
    /**
     * @var int
     */
    public $time;
    protected $_name = [
        'dialogueId' => 'DialogueId',
        'producer'   => 'Producer',
        'roundId'    => 'RoundId',
        'text'       => 'Text',
        'time'       => 'Time',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dialogueId) {
            $res['DialogueId'] = $this->dialogueId;
        }

        if (null !== $this->producer) {
            $res['Producer'] = $this->producer;
        }

        if (null !== $this->roundId) {
            $res['RoundId'] = $this->roundId;
        }

        if (null !== $this->text) {
            $res['Text'] = $this->text;
        }

        if (null !== $this->time) {
            $res['Time'] = $this->time;
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
        if (isset($map['DialogueId'])) {
            $model->dialogueId = $map['DialogueId'];
        }

        if (isset($map['Producer'])) {
            $model->producer = $map['Producer'];
        }

        if (isset($map['RoundId'])) {
            $model->roundId = $map['RoundId'];
        }

        if (isset($map['Text'])) {
            $model->text = $map['Text'];
        }

        if (isset($map['Time'])) {
            $model->time = $map['Time'];
        }

        return $model;
    }
}
