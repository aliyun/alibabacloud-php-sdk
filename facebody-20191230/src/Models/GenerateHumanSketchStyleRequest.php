<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Facebody\V20191230\Models;

use AlibabaCloud\Tea\Model;

class GenerateHumanSketchStyleRequest extends Model
{
    /**
     * @var string
     */
    public $imageURL;

    /**
     * @var string
     */
    public $returnType;
    protected $_name = [
        'imageURL'   => 'ImageURL',
        'returnType' => 'ReturnType',
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
        if (null !== $this->returnType) {
            $res['ReturnType'] = $this->returnType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GenerateHumanSketchStyleRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ImageURL'])) {
            $model->imageURL = $map['ImageURL'];
        }
        if (isset($map['ReturnType'])) {
            $model->returnType = $map['ReturnType'];
        }

        return $model;
    }
}
