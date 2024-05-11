<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models;

use AlibabaCloud\Tea\Model;

class Message extends Model
{
    /**
     * @var string
     */
    public $assistantType;

    /**
     * @var string
     */
    public $content;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $datasetName;

    /**
     * @var string
     */
    public $language;

    /**
     * @var bool
     */
    public $regenerate;

    /**
     * @var string
     */
    public $reply;

    /**
     * @var float
     */
    public $score;

    /**
     * @var string
     */
    public $sourceURI;

    /**
     * @var string
     */
    public $suggestion;

    /**
     * @var string
     */
    public $tone;

    /**
     * @var string
     */
    public $topic;
    protected $_name = [
        'assistantType' => 'AssistantType',
        'content'       => 'Content',
        'createTime'    => 'CreateTime',
        'datasetName'   => 'DatasetName',
        'language'      => 'Language',
        'regenerate'    => 'Regenerate',
        'reply'         => 'Reply',
        'score'         => 'Score',
        'sourceURI'     => 'SourceURI',
        'suggestion'    => 'Suggestion',
        'tone'          => 'Tone',
        'topic'         => 'Topic',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->assistantType) {
            $res['AssistantType'] = $this->assistantType;
        }
        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->datasetName) {
            $res['DatasetName'] = $this->datasetName;
        }
        if (null !== $this->language) {
            $res['Language'] = $this->language;
        }
        if (null !== $this->regenerate) {
            $res['Regenerate'] = $this->regenerate;
        }
        if (null !== $this->reply) {
            $res['Reply'] = $this->reply;
        }
        if (null !== $this->score) {
            $res['Score'] = $this->score;
        }
        if (null !== $this->sourceURI) {
            $res['SourceURI'] = $this->sourceURI;
        }
        if (null !== $this->suggestion) {
            $res['Suggestion'] = $this->suggestion;
        }
        if (null !== $this->tone) {
            $res['Tone'] = $this->tone;
        }
        if (null !== $this->topic) {
            $res['Topic'] = $this->topic;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return Message
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AssistantType'])) {
            $model->assistantType = $map['AssistantType'];
        }
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['DatasetName'])) {
            $model->datasetName = $map['DatasetName'];
        }
        if (isset($map['Language'])) {
            $model->language = $map['Language'];
        }
        if (isset($map['Regenerate'])) {
            $model->regenerate = $map['Regenerate'];
        }
        if (isset($map['Reply'])) {
            $model->reply = $map['Reply'];
        }
        if (isset($map['Score'])) {
            $model->score = $map['Score'];
        }
        if (isset($map['SourceURI'])) {
            $model->sourceURI = $map['SourceURI'];
        }
        if (isset($map['Suggestion'])) {
            $model->suggestion = $map['Suggestion'];
        }
        if (isset($map['Tone'])) {
            $model->tone = $map['Tone'];
        }
        if (isset($map['Topic'])) {
            $model->topic = $map['Topic'];
        }

        return $model;
    }
}
