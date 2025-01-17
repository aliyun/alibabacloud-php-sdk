<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models\ListHotTopicSummariesResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models\ListHotTopicSummariesResponseBody\data\news\comments;

class news extends Model
{
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
    public $title;
    /**
     * @var string
     */
    public $url;
    protected $_name = [
        'comments' => 'comments',
        'content'  => 'content',
        'pubTime'  => 'pubTime',
        'title'    => 'title',
        'url'      => 'url',
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
        if (null !== $this->comments) {
            if (\is_array($this->comments)) {
                $res['comments'] = [];
                $n1              = 0;
                foreach ($this->comments as $item1) {
                    $res['comments'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['comments'])) {
            if (!empty($map['comments'])) {
                $model->comments = [];
                $n1              = 0;
                foreach ($map['comments'] as $item1) {
                    $model->comments[$n1++] = comments::fromMap($item1);
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
