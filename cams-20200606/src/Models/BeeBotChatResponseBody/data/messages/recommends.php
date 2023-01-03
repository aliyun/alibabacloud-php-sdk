<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cams\V20200606\Models\BeeBotChatResponseBody\data\messages;

use AlibabaCloud\Tea\Model;

class recommends extends Model
{
    /**
     * @description The source of the recommended answer.
     *
     * @example KNOWLEDGE
     *
     * @var string
     */
    public $answerSource;

    /**
     * @description The ID of the recommended knowledge.
     *
     * @example 4548
     *
     * @var string
     */
    public $knowledgeId;

    /**
     * @description The recommended content, which may be the entity in graph-based question answering, the standard knowledge in knowledge-based question answering, or the column value in table-based question answering.
     *
     * @var string
     */
    public $title;
    protected $_name = [
        'answerSource' => 'AnswerSource',
        'knowledgeId'  => 'KnowledgeId',
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
        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }

        return $model;
    }
}
