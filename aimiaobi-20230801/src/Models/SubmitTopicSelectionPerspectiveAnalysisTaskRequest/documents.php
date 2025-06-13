<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\SubmitTopicSelectionPerspectiveAnalysisTaskRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\SubmitTopicSelectionPerspectiveAnalysisTaskRequest\documents\comments;

class documents extends Model
{
    /**
     * @var string
     */
    public $author;

    /**
     * @var comments[]
     */
    public $comments;

    /**
     * @var string
     */
    public $content;

    /**
     * @var string
     */
    public $pubTime;

    /**
     * @var string
     */
    public $source;

    /**
     * @var string
     */
    public $summary;

    /**
     * @var string
     */
    public $title;

    /**
     * @var string
     */
    public $url;
    protected $_name = [
        'author' => 'Author',
        'comments' => 'Comments',
        'content' => 'Content',
        'pubTime' => 'PubTime',
        'source' => 'Source',
        'summary' => 'Summary',
        'title' => 'Title',
        'url' => 'Url',
    ];

    public function validate()
    {
        if (\is_array($this->comments)) {
            Model::validateArray($this->comments);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->author) {
            $res['Author'] = $this->author;
        }

        if (null !== $this->comments) {
            if (\is_array($this->comments)) {
                $res['Comments'] = [];
                $n1 = 0;
                foreach ($this->comments as $item1) {
                    $res['Comments'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }

        if (null !== $this->pubTime) {
            $res['PubTime'] = $this->pubTime;
        }

        if (null !== $this->source) {
            $res['Source'] = $this->source;
        }

        if (null !== $this->summary) {
            $res['Summary'] = $this->summary;
        }

        if (null !== $this->title) {
            $res['Title'] = $this->title;
        }

        if (null !== $this->url) {
            $res['Url'] = $this->url;
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
        if (isset($map['Author'])) {
            $model->author = $map['Author'];
        }

        if (isset($map['Comments'])) {
            if (!empty($map['Comments'])) {
                $model->comments = [];
                $n1 = 0;
                foreach ($map['Comments'] as $item1) {
                    $model->comments[$n1] = comments::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }

        if (isset($map['PubTime'])) {
            $model->pubTime = $map['PubTime'];
        }

        if (isset($map['Source'])) {
            $model->source = $map['Source'];
        }

        if (isset($map['Summary'])) {
            $model->summary = $map['Summary'];
        }

        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }

        if (isset($map['Url'])) {
            $model->url = $map['Url'];
        }

        return $model;
    }
}
