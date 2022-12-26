<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Chatbot\V20220408\Models\ChatResponseBody\messages;

use AlibabaCloud\Tea\Model;

class recommends extends Model
{
    /**
     * @example KNOWLEDGE
     *
     * @var string
     */
    public $answerSource;

    /**
     * @example 4548
     *
     * @var string
     */
    public $knowledgeId;

    /**
     * @example 0.46
     *
     * @var float
     */
    public $score;

    /**
     * @var string
     */
    public $title;
    protected $_name = [
        'answerSource' => 'AnswerSource',
        'knowledgeId'  => 'KnowledgeId',
        'score'        => 'Score',
        'title'        => 'Title',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->answerSource) {
            $res['AnswerSource'] = $this->answerSource;
        }
        if (null !== $this->knowledgeId) {
            $res['KnowledgeId'] = $this->knowledgeId;
        }
        if (null !== $this->score) {
            $res['Score'] = $this->score;
        }
        if (null !== $this->title) {
            $res['Title'] = $this->title;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return recommends
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AnswerSource'])) {
            $model->answerSource = $map['AnswerSource'];
        }
        if (isset($map['KnowledgeId'])) {
            $model->knowledgeId = $map['KnowledgeId'];
        }
        if (isset($map['Score'])) {
            $model->score = $map['Score'];
        }
        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }

        return $model;
    }
}
