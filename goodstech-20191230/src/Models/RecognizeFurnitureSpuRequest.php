<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Goodstech\V20191230\Models;

use AlibabaCloud\Tea\Model;

class RecognizeFurnitureSpuRequest extends Model
{
    /**
     * @var string
     */
    public $imageURL;

    /**
     * @var float
     */
    public $XLength;

    /**
     * @var float
     */
    public $YLength;

    /**
     * @var float
     */
    public $ZLength;
    protected $_name = [
        'imageURL' => 'ImageURL',
        'XLength'  => 'XLength',
        'YLength'  => 'YLength',
        'ZLength'  => 'ZLength',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->imageURL) {
            $res['ImageURL'] = $this->imageURL;
        }
        if (null !== $this->XLength) {
            $res['XLength'] = $this->XLength;
        }
        if (null !== $this->YLength) {
            $res['YLength'] = $this->YLength;
        }
        if (null !== $this->ZLength) {
            $res['ZLength'] = $this->ZLength;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RecognizeFurnitureSpuRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ImageURL'])) {
            $model->imageURL = $map['ImageURL'];
        }
        if (isset($map['XLength'])) {
            $model->XLength = $map['XLength'];
        }
        if (isset($map['YLength'])) {
            $model->YLength = $map['YLength'];
        }
        if (isset($map['ZLength'])) {
            $model->ZLength = $map['ZLength'];
        }

        return $model;
    }
}
