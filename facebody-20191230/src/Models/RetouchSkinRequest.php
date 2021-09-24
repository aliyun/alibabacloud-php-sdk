<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Facebody\V20191230\Models;

use AlibabaCloud\Tea\Model;

class RetouchSkinRequest extends Model
{
    /**
     * @var string
     */
    public $imageURL;

    /**
     * @var float
     */
    public $retouchDegree;

    /**
     * @var float
     */
    public $whiteningDegree;
    protected $_name = [
        'imageURL'        => 'ImageURL',
        'retouchDegree'   => 'RetouchDegree',
        'whiteningDegree' => 'WhiteningDegree',
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
        if (null !== $this->retouchDegree) {
            $res['RetouchDegree'] = $this->retouchDegree;
        }
        if (null !== $this->whiteningDegree) {
            $res['WhiteningDegree'] = $this->whiteningDegree;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RetouchSkinRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ImageURL'])) {
            $model->imageURL = $map['ImageURL'];
        }
        if (isset($map['RetouchDegree'])) {
            $model->retouchDegree = $map['RetouchDegree'];
        }
        if (isset($map['WhiteningDegree'])) {
            $model->whiteningDegree = $map['WhiteningDegree'];
        }

        return $model;
    }
}
