<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\SearchNewsResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
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
     * @example 9a598b44c6444da5907b8ea68a5f82c4
     *
     * @var string
     */
    public $docUuid;

    /**
     * @var string[]
     */
    public $imageUrls;

    /**
     * @example 2024-01-18 06:46:22
     *
     * @var string
     */
    public $pubTime;

    /**
     * @example QuarkCommonNews
     *
     * @var string
     */
    public $searchSource;

    /**
     * @example 夸克检索
     *
     * @var string
     */
    public $searchSourceName;

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
     * @example 2024-01-18 06:46:22
     *
     * @var string
     */
    public $updateTime;

    /**
     * @example 文章URL
     *
     * @var string
     */
    public $url;
    protected $_name = [
        'author'           => 'Author',
        'content'          => 'Content',
        'docUuid'          => 'DocUuid',
        'imageUrls'        => 'ImageUrls',
        'pubTime'          => 'PubTime',
        'searchSource'     => 'SearchSource',
        'searchSourceName' => 'SearchSourceName',
        'source'           => 'Source',
        'summary'          => 'Summary',
        'tag'              => 'Tag',
        'title'            => 'Title',
        'updateTime'       => 'UpdateTime',
        'url'              => 'Url',
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
        if (null !== $this->docUuid) {
            $res['DocUuid'] = $this->docUuid;
        }
        if (null !== $this->imageUrls) {
            $res['ImageUrls'] = $this->imageUrls;
        }
        if (null !== $this->pubTime) {
            $res['PubTime'] = $this->pubTime;
        }
        if (null !== $this->searchSource) {
            $res['SearchSource'] = $this->searchSource;
        }
        if (null !== $this->searchSourceName) {
            $res['SearchSourceName'] = $this->searchSourceName;
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
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }
        if (null !== $this->url) {
            $res['Url'] = $this->url;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
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
        if (isset($map['DocUuid'])) {
            $model->docUuid = $map['DocUuid'];
        }
        if (isset($map['ImageUrls'])) {
            if (!empty($map['ImageUrls'])) {
                $model->imageUrls = $map['ImageUrls'];
            }
        }
        if (isset($map['PubTime'])) {
            $model->pubTime = $map['PubTime'];
        }
        if (isset($map['SearchSource'])) {
            $model->searchSource = $map['SearchSource'];
        }
        if (isset($map['SearchSourceName'])) {
            $model->searchSourceName = $map['SearchSourceName'];
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
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }
        if (isset($map['Url'])) {
            $model->url = $map['Url'];
        }

        return $model;
    }
}
