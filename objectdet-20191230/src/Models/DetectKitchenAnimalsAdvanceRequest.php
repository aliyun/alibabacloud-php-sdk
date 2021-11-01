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
     * @var string
     */
    public $imageURLB;
    protected $_name = [
        'imageURLAObject' => 'ImageURLAObject',
        'imageURLB'       => 'ImageURLB',
    ];

    public function validate()
    {
        Model::validateRequired('imageURLAObject', $this->imageURLAObject, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->imageURLAObject) {
            $res['ImageURLAObject'] = $this->imageURLAObject;
        }
        if (null !== $this->imageURLB) {
            $res['ImageURLB'] = $this->imageURLB;
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
        if (isset($map['ImageURLAObject'])) {
            $model->imageURLAObject = $map['ImageURLAObject'];
        }
        if (isset($map['ImageURLB'])) {
            $model->imageURLB = $map['ImageURLB'];
        }

        return $model;
    }
}
