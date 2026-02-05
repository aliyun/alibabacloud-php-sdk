<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IQS\V20241111\Models;

use AlibabaCloud\Dara\Model;

class UnifiedImageItem extends Model
{
    /**
     * @var int
     */
    public $height;

    /**
     * @var string
     */
    public $hostPageUrl;

    /**
     * @var string
     */
    public $imageUrl;

    /**
     * @var string
     */
    public $publishedTime;

    /**
     * @var string
     */
    public $title;

    /**
     * @var int
     */
    public $width;
    protected $_name = [
        'height' => 'height',
        'hostPageUrl' => 'hostPageUrl',
        'imageUrl' => 'imageUrl',
        'publishedTime' => 'publishedTime',
        'title' => 'title',
        'width' => 'width',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->height) {
            $res['height'] = $this->height;
        }

        if (null !== $this->hostPageUrl) {
            $res['hostPageUrl'] = $this->hostPageUrl;
        }

        if (null !== $this->imageUrl) {
            $res['imageUrl'] = $this->imageUrl;
        }

        if (null !== $this->publishedTime) {
            $res['publishedTime'] = $this->publishedTime;
        }

        if (null !== $this->title) {
            $res['title'] = $this->title;
        }

        if (null !== $this->width) {
            $res['width'] = $this->width;
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
        if (isset($map['height'])) {
            $model->height = $map['height'];
        }

        if (isset($map['hostPageUrl'])) {
            $model->hostPageUrl = $map['hostPageUrl'];
        }

        if (isset($map['imageUrl'])) {
            $model->imageUrl = $map['imageUrl'];
        }

        if (isset($map['publishedTime'])) {
            $model->publishedTime = $map['publishedTime'];
        }

        if (isset($map['title'])) {
            $model->title = $map['title'];
        }

        if (isset($map['width'])) {
            $model->width = $map['width'];
        }

        return $model;
    }
}
