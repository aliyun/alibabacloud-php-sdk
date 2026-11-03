<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aidge\V20260428\Models;

use AlibabaCloud\Dara\Model;

class ImageUpscaleRequest extends Model
{
    /**
     * @var string
     */
    public $imageUrl;

    /**
     * @var int
     */
    public $upscaleFactor;
    protected $_name = [
        'imageUrl' => 'ImageUrl',
        'upscaleFactor' => 'UpscaleFactor',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->imageUrl) {
            $res['ImageUrl'] = $this->imageUrl;
        }

        if (null !== $this->upscaleFactor) {
            $res['UpscaleFactor'] = $this->upscaleFactor;
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
        if (isset($map['ImageUrl'])) {
            $model->imageUrl = $map['ImageUrl'];
        }

        if (isset($map['UpscaleFactor'])) {
            $model->upscaleFactor = $map['UpscaleFactor'];
        }

        return $model;
    }
}
