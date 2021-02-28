<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Chatbot\V20171011\Models\ChatResponseBody\messages;

use AlibabaCloud\SDK\Chatbot\V20171011\Models\ChatResponseBody\messages\knowledge\relatedKnowledges;
use AlibabaCloud\Tea\Model;

class knowledge extends Model
{
    /**
     * @var string
     */
    public $hitStatement;

    /**
     * @var string
     */
    public $summary;

    /**
     * @var relatedKnowledges[]
     */
    public $relatedKnowledges;

    /**
     * @var string
     */
    public $category;

    /**
     * @var string
     */
    public $title;

    /**
     * @var string
     */
    public $content;

    /**
     * @var string
     */
    public $answerSource;

    /**
     * @var string
     */
    public $id;
    protected $_name = [
        'hitStatement'      => 'HitStatement',
        'summary'           => 'Summary',
        'relatedKnowledges' => 'RelatedKnowledges',
        'category'          => 'Category',
        'title'             => 'Title',
        'content'           => 'Content',
        'answerSource'      => 'AnswerSource',
        'id'                => 'Id',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->hitStatement) {
            $res['HitStatement'] = $this->hitStatement;
        }
        if (null !== $this->summary) {
            $res['Summary'] = $this->summary;
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
        if (null !== $this->category) {
            $res['Category'] = $this->category;
        }
        if (null !== $this->title) {
            $res['Title'] = $this->title;
        }
        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }
        if (null !== $this->answerSource) {
            $res['AnswerSource'] = $this->answerSource;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
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
        if (isset($map['HitStatement'])) {
            $model->hitStatement = $map['HitStatement'];
        }
        if (isset($map['Summary'])) {
            $model->summary = $map['Summary'];
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
        if (isset($map['Category'])) {
            $model->category = $map['Category'];
        }
        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }
        if (isset($map['AnswerSource'])) {
            $model->answerSource = $map['AnswerSource'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        return $model;
    }
}
