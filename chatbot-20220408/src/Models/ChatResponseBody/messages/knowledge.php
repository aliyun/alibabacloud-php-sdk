<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Chatbot\V20220408\Models\ChatResponseBody\messages;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Chatbot\V20220408\Models\ChatResponseBody\messages\knowledge\relatedKnowledges;

class knowledge extends Model
{
    /**
     * @var string
     */
    public $answerSource;

    /**
     * @var string
     */
    public $category;

    /**
     * @var string
     */
    public $content;

    /**
     * @var string
     */
    public $contentType;

    /**
     * @var string
     */
    public $hitStatement;

    /**
     * @var string
     */
    public $id;

    /**
     * @var relatedKnowledges[]
     */
    public $relatedKnowledges;

    /**
     * @var float
     */
    public $score;

    /**
     * @var string
     */
    public $summary;

    /**
     * @var string
     */
    public $title;
    protected $_name = [
        'answerSource' => 'AnswerSource',
        'category' => 'Category',
        'content' => 'Content',
        'contentType' => 'ContentType',
        'hitStatement' => 'HitStatement',
        'id' => 'Id',
        'relatedKnowledges' => 'RelatedKnowledges',
        'score' => 'Score',
        'summary' => 'Summary',
        'title' => 'Title',
    ];

    public function validate()
    {
        if (\is_array($this->relatedKnowledges)) {
            Model::validateArray($this->relatedKnowledges);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->relatedKnowledges)) {
                $res['RelatedKnowledges'] = [];
                $n1 = 0;
                foreach ($this->relatedKnowledges as $item1) {
                    $res['RelatedKnowledges'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->score) {
            $res['Score'] = $this->score;
        }

        if (null !== $this->summary) {
            $res['Summary'] = $this->summary;
        }

        if (null !== $this->title) {
            $res['Title'] = $this->title;
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
                $n1 = 0;
                foreach ($map['RelatedKnowledges'] as $item1) {
                    $model->relatedKnowledges[$n1] = relatedKnowledges::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Score'])) {
            $model->score = $map['Score'];
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
