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
    public $reasoningText;

    /**
     * @var string
     */
    public $roundId;

    /**
     * @var string
     */
    public $source;

    /**
     * @var string
     */
    public $text;

    /**
     * @var int
     */
    public $time;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'dialogueId' => 'DialogueId',
        'producer' => 'Producer',
        'reasoningText' => 'ReasoningText',
        'roundId' => 'RoundId',
        'source' => 'Source',
        'text' => 'Text',
        'time' => 'Time',
        'type' => 'Type',
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

        if (null !== $this->reasoningText) {
            $res['ReasoningText'] = $this->reasoningText;
        }

        if (null !== $this->roundId) {
            $res['RoundId'] = $this->roundId;
        }

        if (null !== $this->source) {
            $res['Source'] = $this->source;
        }

        if (null !== $this->text) {
            $res['Text'] = $this->text;
        }

        if (null !== $this->time) {
            $res['Time'] = $this->time;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
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

        if (isset($map['ReasoningText'])) {
            $model->reasoningText = $map['ReasoningText'];
        }

        if (isset($map['RoundId'])) {
            $model->roundId = $map['RoundId'];
        }

        if (isset($map['Source'])) {
            $model->source = $map['Source'];
        }

        if (isset($map['Text'])) {
            $model->text = $map['Text'];
        }

        if (isset($map['Time'])) {
            $model->time = $map['Time'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
