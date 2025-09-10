<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Objectdet\V20191230\Models;

use AlibabaCloud\Dara\Model;
use GuzzleHttp\Psr7\Stream;

class DetectKitchenAnimalsAdvanceRequest extends Model
{
    /**
     * @var Stream
     */
    public $imageURLAObject;

    /**
     * @var Stream
     */
    public $imageURLBObject;
    protected $_name = [
        'imageURLAObject' => 'ImageURLA',
        'imageURLBObject' => 'ImageURLB',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->imageURLAObject) {
            $res['ImageURLA'] = $this->imageURLAObject;
        }

        if (null !== $this->imageURLBObject) {
            $res['ImageURLB'] = $this->imageURLBObject;
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
            $model->imageURLAObject = $map['ImageURLA'];
        }

        if (isset($map['ImageURLB'])) {
            $model->imageURLBObject = $map['ImageURLB'];
        }

        return $model;
    }
}
