<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Facebody\V20191230\Models;

use AlibabaCloud\Tea\Model;
use GuzzleHttp\Psr7\Stream;

class RetouchSkinAdvanceRequest extends Model
{
    /**
     * @var Stream
     */
    public $imageURLObject;

    /**
     * @var float
     */
    public $retouchDegree;

    /**
     * @var float
     */
    public $whiteningDegree;
    protected $_name = [
        'imageURLObject'  => 'ImageURLObject',
        'retouchDegree'   => 'RetouchDegree',
        'whiteningDegree' => 'WhiteningDegree',
    ];

    public function validate()
    {
        Model::validateRequired('imageURLObject', $this->imageURLObject, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->imageURLObject) {
            $res['ImageURLObject'] = $this->imageURLObject;
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
     * @return RetouchSkinAdvanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ImageURLObject'])) {
            $model->imageURLObject = $map['ImageURLObject'];
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
