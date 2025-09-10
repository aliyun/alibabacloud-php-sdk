<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Objectdet\V20191230\Models;

use AlibabaCloud\Dara\Model;

class DetectKitchenAnimalsRequest extends Model
{
    /**
     * @var string
     */
    public $imageURLA;

    /**
     * @var string
     */
    public $imageURLB;
    protected $_name = [
        'imageURLA' => 'ImageURLA',
        'imageURLB' => 'ImageURLB',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->imageURLA) {
            $res['ImageURLA'] = $this->imageURLA;
        }

        if (null !== $this->imageURLB) {
            $res['ImageURLB'] = $this->imageURLB;
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
        if (isset($map['ImageURLA'])) {
            $model->imageURLA = $map['ImageURLA'];
        }

        if (isset($map['ImageURLB'])) {
            $model->imageURLB = $map['ImageURLB'];
        }

        return $model;
    }
}
