<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models\HotNewsRecommendResponseBody\data;

use AlibabaCloud\Dara\Model;

class news extends Model
{
    /**
     * @var string
     */
    public $content;

    /**
     * @var string[]
     */
    public $imageUrls;

    /**
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
     * @var string
     */
    public $title;

    /**
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

    public function validate()
    {
        if (\is_array($this->imageUrls)) {
            Model::validateArray($this->imageUrls);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->content) {
            $res['content'] = $this->content;
        }

        if (null !== $this->imageUrls) {
            if (\is_array($this->imageUrls)) {
                $res['imageUrls'] = [];
                $n1 = 0;
                foreach ($this->imageUrls as $item1) {
                    $res['imageUrls'][$n1] = $item1;
                    ++$n1;
                }
            }
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['content'])) {
            $model->content = $map['content'];
        }

        if (isset($map['imageUrls'])) {
            if (!empty($map['imageUrls'])) {
                $model->imageUrls = [];
                $n1 = 0;
                foreach ($map['imageUrls'] as $item1) {
                    $model->imageUrls[$n1] = $item1;
                    ++$n1;
                }
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
