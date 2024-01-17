<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\ListHotNewsWithTypeResponseBody\data;

use AlibabaCloud\Tea\Model;

class news extends Model
{
    /**
     * @var string
     */
    public $author;

    /**
     * @var string
     */
    public $content;

    /**
     * @example 3f7045e099474ba28ceca1b4eb6d6e21
     *
     * @var string
     */
    public $docUuid;

    /**
     * @var string[]
     */
    public $imageUrls;

    /**
     * @example 2023-04-11 06:14:07
     *
     * @var string
     */
    public $pubTime;

    /**
     * @var string
     */
    public $searchSource;

    /**
     * @var string
     */
    public $searchSourceName;

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
    public $tag;

    /**
     * @var string
     */
    public $title;

    /**
     * @example 2023-10-14 14:30:00
     *
     * @var string
     */
    public $updateTime;

    /**
     * @example http://xxxxx/xxx
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
     * @return news
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
