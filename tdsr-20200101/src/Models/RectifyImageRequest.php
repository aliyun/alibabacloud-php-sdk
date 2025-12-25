<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Tdsr\V20200101\Models;

use AlibabaCloud\Dara\Model;

class RectifyImageRequest extends Model
{
    /**
     * @var int
     */
    public $cameraHeight;

    /**
     * @var string
     */
    public $url;
    protected $_name = [
        'cameraHeight' => 'CameraHeight',
        'url' => 'Url',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cameraHeight) {
            $res['CameraHeight'] = $this->cameraHeight;
        }

        if (null !== $this->url) {
            $res['Url'] = $this->url;
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
        if (isset($map['CameraHeight'])) {
            $model->cameraHeight = $map['CameraHeight'];
        }

        if (isset($map['Url'])) {
            $model->url = $map['Url'];
        }

        return $model;
    }
}
