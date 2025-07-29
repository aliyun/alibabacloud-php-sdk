<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models\ListHotTopicSummariesResponseBody\data;

use AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models\ListHotTopicSummariesResponseBody\data\news\comments;
use AlibabaCloud\Tea\Model;

class news extends Model
{
    /**
     * @var comments[]
     */
    public $comments;

    /**
     * @example xx
     *
     * @var string
     */
    public $content;

    /**
     * @example 2024-09-10 15:32:00
     *
     * @var string
     */
    public $pubTime;

    /**
     * @example xx
     *
     * @var string
     */
    public $title;

    /**
     * @description url
     *
     * @example http://xxx
     *
     * @var string
     */
    public $url;
    protected $_name = [
        'comments' => 'comments',
        'content' => 'content',
        'pubTime' => 'pubTime',
        'title' => 'title',
        'url' => 'url',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->comments) {
            $res['comments'] = [];
            if (null !== $this->comments && \is_array($this->comments)) {
                $n = 0;
                foreach ($this->comments as $item) {
                    $res['comments'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->content) {
            $res['content'] = $this->content;
        }
        if (null !== $this->pubTime) {
            $res['pubTime'] = $this->pubTime;
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
        if (isset($map['comments'])) {
            if (!empty($map['comments'])) {
                $model->comments = [];
                $n = 0;
                foreach ($map['comments'] as $item) {
                    $model->comments[$n++] = null !== $item ? comments::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['content'])) {
            $model->content = $map['content'];
        }
        if (isset($map['pubTime'])) {
            $model->pubTime = $map['pubTime'];
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
