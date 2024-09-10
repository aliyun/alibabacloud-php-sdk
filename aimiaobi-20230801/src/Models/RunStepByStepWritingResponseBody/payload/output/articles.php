<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\RunStepByStepWritingResponseBody\payload\output;

use AlibabaCloud\Tea\Model;

class articles extends Model
{
    /**
     * @example 作者
     *
     * @var string
     */
    public $author;

    /**
     * @example 文章内容
     *
     * @var string
     */
    public $content;

    /**
     * @example 文档-自定义的唯一ID
     *
     * @var string
     */
    public $docId;

    /**
     * @example f1da53894e784759946d22e2cb2b522a
     *
     * @var string
     */
    public $docUuid;

    /**
     * @example http://www.example.com
     *
     * @var string
     */
    public $mediaUrl;

    /**
     * @example 2024-09-10 14:17:53
     *
     * @var string
     */
    public $pubTime;

    /**
     * @example 央视网
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
     * @example 文章标签
     *
     * @var string
     */
    public $tag;

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
        'author'   => 'Author',
        'content'  => 'Content',
        'docId'    => 'DocId',
        'docUuid'  => 'DocUuid',
        'mediaUrl' => 'MediaUrl',
        'pubTime'  => 'PubTime',
        'source'   => 'Source',
        'summary'  => 'Summary',
        'tag'      => 'Tag',
        'title'    => 'Title',
        'url'      => 'Url',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->author) {
            $res['Author'] = $this->author;
        }
        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }
        if (null !== $this->docId) {
            $res['DocId'] = $this->docId;
        }
        if (null !== $this->docUuid) {
            $res['DocUuid'] = $this->docUuid;
        }
        if (null !== $this->mediaUrl) {
            $res['MediaUrl'] = $this->mediaUrl;
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
        if (null !== $this->tag) {
            $res['Tag'] = $this->tag;
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
     * @return articles
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Author'])) {
            $model->author = $map['Author'];
        }
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }
        if (isset($map['DocId'])) {
            $model->docId = $map['DocId'];
        }
        if (isset($map['DocUuid'])) {
            $model->docUuid = $map['DocUuid'];
        }
        if (isset($map['MediaUrl'])) {
            $model->mediaUrl = $map['MediaUrl'];
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
        if (isset($map['Tag'])) {
            $model->tag = $map['Tag'];
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
