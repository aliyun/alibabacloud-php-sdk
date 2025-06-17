<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\ListAIAgentDialoguesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ICE\V20201109\Models\ListAIAgentDialoguesResponseBody\dialogues\attachedFileList;

class dialogues extends Model
{
    /**
     * @var attachedFileList[]
     */
    public $attachedFileList;

    /**
     * @var string
     */
    public $dialogueId;

    /**
     * @var string
     */
    public $extend;

    /**
     * @var string
     */
    public $nodeId;

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
        'attachedFileList' => 'AttachedFileList',
        'dialogueId' => 'DialogueId',
        'extend' => 'Extend',
        'nodeId' => 'NodeId',
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
        if (\is_array($this->attachedFileList)) {
            Model::validateArray($this->attachedFileList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->attachedFileList) {
            if (\is_array($this->attachedFileList)) {
                $res['AttachedFileList'] = [];
                $n1 = 0;
                foreach ($this->attachedFileList as $item1) {
                    $res['AttachedFileList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->dialogueId) {
            $res['DialogueId'] = $this->dialogueId;
        }

        if (null !== $this->extend) {
            $res['Extend'] = $this->extend;
        }

        if (null !== $this->nodeId) {
            $res['NodeId'] = $this->nodeId;
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
        if (isset($map['AttachedFileList'])) {
            if (!empty($map['AttachedFileList'])) {
                $model->attachedFileList = [];
                $n1 = 0;
                foreach ($map['AttachedFileList'] as $item1) {
                    $model->attachedFileList[$n1] = attachedFileList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['DialogueId'])) {
            $model->dialogueId = $map['DialogueId'];
        }

        if (isset($map['Extend'])) {
            $model->extend = $map['Extend'];
        }

        if (isset($map['NodeId'])) {
            $model->nodeId = $map['NodeId'];
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
