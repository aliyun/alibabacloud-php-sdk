<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cams\V20200606\Models\BeeBotChatResponseBody\data\messages;

use AlibabaCloud\SDK\Cams\V20200606\Models\BeeBotChatResponseBody\data\messages\knowledge\relatedKnowledges;
use AlibabaCloud\Tea\Model;

class knowledge extends Model
{
    /**
     * @description The source of the answer.
     *
     * @example KnowledgeBase
     *
     * @var string
     */
    public $answerSource;

    /**
     * @description The category of the knowledge.
     *
     * @var string
     */
    public $category;

    /**
     * @description The content of the hit question.
     *
     * @var string
     */
    public $content;

    /**
     * @description Indicates whether the answer is in plain text or rich text.
     *
     * @example PLAIN_TEXT
     *
     * @var string
     */
    public $contentType;

    /**
     * @description The hit text.
     *
     * @var string
     */
    public $hitStatement;

    /**
     * @description The ID of the hit problem in the knowledge base.
     *
     * @example 735898
     *
     * @var string
     */
    public $id;

    /**
     * @description The list of the related knowledge.
     *
     * @var relatedKnowledges[]
     */
    public $relatedKnowledges;

    /**
     * @description The summary to the hit question.
     *
     * @var string
     */
    public $summary;

    /**
     * @description The title of the hit question.
     *
     * @var string
     */
    public $title;
    protected $_name = [
        'answerSource'      => 'AnswerSource',
        'category'          => 'Category',
        'content'           => 'Content',
        'contentType'       => 'ContentType',
        'hitStatement'      => 'HitStatement',
        'id'                => 'Id',
        'relatedKnowledges' => 'RelatedKnowledges',
        'summary'           => 'Summary',
        'title'             => 'Title',
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
        if (null !== $this->category) {
            $res['Category'] = $this->category;
        }
        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }
        if (null !== $this->contentType) {
            $res['ContentType'] = $this->contentType;
        }
        if (null !== $this->hitStatement) {
            $res['HitStatement'] = $this->hitStatement;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->relatedKnowledges) {
            $res['RelatedKnowledges'] = [];
            if (null !== $this->relatedKnowledges && \is_array($this->relatedKnowledges)) {
                $n = 0;
                foreach ($this->relatedKnowledges as $item) {
                    $res['RelatedKnowledges'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->summary) {
            $res['Summary'] = $this->summary;
        }
        if (null !== $this->title) {
            $res['Title'] = $this->title;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return knowledge
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AnswerSource'])) {
            $model->answerSource = $map['AnswerSource'];
        }
        if (isset($map['Category'])) {
            $model->category = $map['Category'];
        }
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }
        if (isset($map['ContentType'])) {
            $model->contentType = $map['ContentType'];
        }
        if (isset($map['HitStatement'])) {
            $model->hitStatement = $map['HitStatement'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['RelatedKnowledges'])) {
            if (!empty($map['RelatedKnowledges'])) {
                $model->relatedKnowledges = [];
                $n                        = 0;
                foreach ($map['RelatedKnowledges'] as $item) {
                    $model->relatedKnowledges[$n++] = null !== $item ? relatedKnowledges::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Summary'])) {
            $model->summary = $map['Summary'];
        }
        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }

        return $model;
    }
}
