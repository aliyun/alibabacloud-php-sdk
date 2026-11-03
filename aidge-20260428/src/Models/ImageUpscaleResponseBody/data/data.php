<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aidge\V20260428\Models\ImageUpscaleResponseBody\data;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var int
     */
    public $imageHeight;

    /**
     * @var string
     */
    public $imageUrl;

    /**
     * @var int
     */
    public $imageWidth;
    protected $_name = [
        'imageHeight' => 'ImageHeight',
        'imageUrl' => 'ImageUrl',
        'imageWidth' => 'ImageWidth',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->imageHeight) {
            $res['ImageHeight'] = $this->imageHeight;
        }

        if (null !== $this->imageUrl) {
            $res['ImageUrl'] = $this->imageUrl;
        }

        if (null !== $this->imageWidth) {
            $res['ImageWidth'] = $this->imageWidth;
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
        if (isset($map['ImageHeight'])) {
            $model->imageHeight = $map['ImageHeight'];
        }

        if (isset($map['ImageUrl'])) {
            $model->imageUrl = $map['ImageUrl'];
        }

        if (isset($map['ImageWidth'])) {
            $model->imageWidth = $map['ImageWidth'];
        }

        return $model;
    }
}
