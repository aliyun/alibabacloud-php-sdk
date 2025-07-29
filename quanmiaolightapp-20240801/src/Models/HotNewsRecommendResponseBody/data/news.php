<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models\HotNewsRecommendResponseBody\data;

use AlibabaCloud\Tea\Model;

class news extends Model
{
    /**
     * @example xx
     *
     * @var string
     */
    public $content;

    /**
     * @var string[]
     */
    public $imageUrls;

    /**
     * @example 2024-09-10 15:32:00
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
    public $source;

    /**
     * @example xx
     *
     * @var string
     */
    public $title;

    /**
     * @example http://xxx
     *
     * @var string
     */
    public $url;
    protected $_name = [
        'content' => 'content',
        'imageUrls' => 'imageUrls',
        'pubTime' => 'pubTime',
        'searchSource' => 'searchSource',
        'source' => 'source',
        'title' => 'title',
        'url' => 'url',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->content) {
            $res['content'] = $this->content;
        }
        if (null !== $this->imageUrls) {
            $res['imageUrls'] = $this->imageUrls;
        }
        if (null !== $this->pubTime) {
            $res['pubTime'] = $this->pubTime;
        }
        if (null !== $this->searchSource) {
            $res['searchSource'] = $this->searchSource;
        }
        if (null !== $this->source) {
            $res['source'] = $this->source;
        }
        if (null !== $this->title) {
            $res['title'] = $this->title;
        }
        if (null !== $this->url) {
            $res['url'] = $this->url;
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
        if (isset($map['content'])) {
            $model->content = $map['content'];
        }
        if (isset($map['imageUrls'])) {
            if (!empty($map['imageUrls'])) {
                $model->imageUrls = $map['imageUrls'];
            }
        }
        if (isset($map['pubTime'])) {
            $model->pubTime = $map['pubTime'];
        }
        if (isset($map['searchSource'])) {
            $model->searchSource = $map['searchSource'];
        }
        if (isset($map['source'])) {
            $model->source = $map['source'];
        }
        if (isset($map['title'])) {
            $model->title = $map['title'];
        }
        if (isset($map['url'])) {
            $model->url = $map['url'];
        }

        return $model;
    }
}
