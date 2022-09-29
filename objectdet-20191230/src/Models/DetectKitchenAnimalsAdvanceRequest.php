<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Objectdet\V20191230\Models;

use AlibabaCloud\Tea\Model;
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
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return DetectKitchenAnimalsAdvanceRequest
     */
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
