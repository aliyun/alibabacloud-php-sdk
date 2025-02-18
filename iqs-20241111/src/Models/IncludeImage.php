<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IQS\V20241111\Models;

use AlibabaCloud\Dara\Model;

class IncludeImage extends Model
{
    /**
     * @var int
     */
    public $height;
    /**
     * @var string
     */
    public $imageLink;
    /**
     * @var int
     */
    public $width;
    protected $_name = [
        'height'    => 'height',
        'imageLink' => 'imageLink',
        'width'     => 'width',
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

        if (null !== $this->imageLink) {
            $res['imageLink'] = $this->imageLink;
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

        if (isset($map['imageLink'])) {
            $model->imageLink = $map['imageLink'];
        }

        if (isset($map['width'])) {
            $model->width = $map['width'];
        }

        return $model;
    }
}
