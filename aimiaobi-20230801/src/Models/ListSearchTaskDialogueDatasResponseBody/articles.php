<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\ListSearchTaskDialogueDatasResponseBody;

use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\ListSearchTaskDialogueDatasResponseBody\articles\multimodalMedias;
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
     * @example xx
     *
     * @var string
     */
    public $categoryUuid;

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
     * @example text
     *
     * @var string
     */
    public $docType;

    /**
     * @example xxx
     *
     * @var string
     */
    public $docUuid;

    /**
     * @example xx
     *
     * @var string
     */
    public $extend1;

    /**
     * @example xx
     *
     * @var string
     */
    public $extend2;

    /**
     * @example xx
     *
     * @var string
     */
    public $extend3;

    /**
     * @var multimodalMedias[]
     */
    public $multimodalMedias;

    /**
     * @example 2024-11-25 14:25:59
     *
     * @var string
     */
    public $pubTime;

    /**
     * @example 新华社
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
        'categoryUuid' => 'CategoryUuid',
        'content' => 'Content',
        'docId' => 'DocId',
        'docType' => 'DocType',
        'docUuid' => 'DocUuid',
        'extend1' => 'Extend1',
        'extend2' => 'Extend2',
        'extend3' => 'Extend3',
        'multimodalMedias' => 'MultimodalMedias',
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
        if (null !== $this->categoryUuid) {
            $res['CategoryUuid'] = $this->categoryUuid;
        }
        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }
        if (null !== $this->docId) {
            $res['DocId'] = $this->docId;
        }
        if (null !== $this->docType) {
            $res['DocType'] = $this->docType;
        }
        if (null !== $this->docUuid) {
            $res['DocUuid'] = $this->docUuid;
        }
        if (null !== $this->extend1) {
            $res['Extend1'] = $this->extend1;
        }
        if (null !== $this->extend2) {
            $res['Extend2'] = $this->extend2;
        }
        if (null !== $this->extend3) {
            $res['Extend3'] = $this->extend3;
        }
        if (null !== $this->multimodalMedias) {
            $res['MultimodalMedias'] = [];
            if (null !== $this->multimodalMedias && \is_array($this->multimodalMedias)) {
                $n = 0;
                foreach ($this->multimodalMedias as $item) {
                    $res['MultimodalMedias'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
     * @return articles
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Author'])) {
            $model->author = $map['Author'];
        }
        if (isset($map['CategoryUuid'])) {
            $model->categoryUuid = $map['CategoryUuid'];
        }
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }
        if (isset($map['DocId'])) {
            $model->docId = $map['DocId'];
        }
        if (isset($map['DocType'])) {
            $model->docType = $map['DocType'];
        }
        if (isset($map['DocUuid'])) {
            $model->docUuid = $map['DocUuid'];
        }
        if (isset($map['Extend1'])) {
            $model->extend1 = $map['Extend1'];
        }
        if (isset($map['Extend2'])) {
            $model->extend2 = $map['Extend2'];
        }
        if (isset($map['Extend3'])) {
            $model->extend3 = $map['Extend3'];
        }
        if (isset($map['MultimodalMedias'])) {
            if (!empty($map['MultimodalMedias'])) {
                $model->multimodalMedias = [];
                $n = 0;
                foreach ($map['MultimodalMedias'] as $item) {
                    $model->multimodalMedias[$n++] = null !== $item ? multimodalMedias::fromMap($item) : $item;
                }
            }
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
