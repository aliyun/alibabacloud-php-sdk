<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cams\V20200606\Models\BeeBotChatResponseBody\data\messages;

use AlibabaCloud\SDK\Cams\V20200606\Models\BeeBotChatResponseBody\data\messages\knowledge\relatedKnowledges;
use AlibabaCloud\Tea\Model;

class knowledge extends Model
{
    /**
     * @description Distinguish answer types.
     *
     * @example KnowledgeBase
     *
     * @var string
     */
    public $answerSource;

    /**
     * @description Knowledge category.
     *
     * @example provident fund.
     *
     * @var string
     */
    public $category;

    /**
     * @description Hit the content of the problem.
     *
     * @example Provident fund withdrawal, please search for provident fund withdrawal on the homepage and submit the form for handling the matter.
     *
     * @var string
     */
    public $content;

    /**
     * @description Indication of plain/rich text answers.
     *
     * @example PLAIN_TEXT
     *
     * @var string
     */
    public $contentType;

    /**
     * @description Hit statement.
     *
     * @example provident fund
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
     * @description Related knowledge list.
     *
     * @var relatedKnowledges[]
     */
    public $relatedKnowledges;

    /**
     * @description Introduction to hit problems.
     *
     * @example Withdrawal of housing provident fund
     *
     * @var string
     */
    public $summary;

    /**
     * @description Hit the title of the problem.
     *
     * @example Withdrawal of housing provident fund.
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
