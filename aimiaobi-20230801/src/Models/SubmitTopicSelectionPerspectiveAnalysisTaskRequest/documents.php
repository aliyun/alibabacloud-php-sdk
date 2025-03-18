<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\SubmitTopicSelectionPerspectiveAnalysisTaskRequest;

use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\SubmitTopicSelectionPerspectiveAnalysisTaskRequest\documents\comments;
use AlibabaCloud\Tea\Model;

class documents extends Model
{
    /**
     * @example 作者
     *
     * @var string
     */
    public $author;

    /**
     * @var comments[]
     */
    public $comments;

    /**
     * @description This parameter is required.
     *
     * @example 文章内容
     *
     * @var string
     */
    public $content;

    /**
     * @example 2024-01-22 10:29:00
     *
     * @var string
     */
    public $pubTime;

    /**
     * @example 新浪
     *
     * @var string
     */
    public $source;

    /**
     * @example 文章摘要
     *
     * @var string
     */
    public $summary;

    /**
     * @example 文章标题
     *
     * @var string
     */
    public $title;

    /**
     * @example https://www.example.com/aaa.docx
     *
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

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->author) {
            $res['Author'] = $this->author;
        }
        if (null !== $this->comments) {
            $res['Comments'] = [];
            if (null !== $this->comments && \is_array($this->comments)) {
                $n = 0;
                foreach ($this->comments as $item) {
                    $res['Comments'][$n++] = null !== $item ? $item->toMap() : $item;
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

    /**
     * @param array $map
     *
     * @return documents
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Author'])) {
            $model->author = $map['Author'];
        }
        if (isset($map['Comments'])) {
            if (!empty($map['Comments'])) {
                $model->comments = [];
                $n = 0;
                foreach ($map['Comments'] as $item) {
                    $model->comments[$n++] = null !== $item ? comments::fromMap($item) : $item;
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
