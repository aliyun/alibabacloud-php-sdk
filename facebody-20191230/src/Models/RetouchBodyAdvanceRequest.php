<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Facebody\V20191230\Models;

use AlibabaCloud\Tea\Model;
use GuzzleHttp\Psr7\Stream;

class RetouchBodyAdvanceRequest extends Model
{
    /**
     * @var Stream
     */
    public $imageURLObject;

    /**
     * @var float
     */
    public $slimDegree;

    /**
     * @var float
     */
    public $lengthenDegree;
    protected $_name = [
        'imageURLObject' => 'ImageURLObject',
        'slimDegree'     => 'SlimDegree',
        'lengthenDegree' => 'LengthenDegree',
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
        if (null !== $this->slimDegree) {
            $res['SlimDegree'] = $this->slimDegree;
        }
        if (null !== $this->lengthenDegree) {
            $res['LengthenDegree'] = $this->lengthenDegree;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RetouchBodyAdvanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ImageURLObject'])) {
            $model->imageURLObject = $map['ImageURLObject'];
        }
        if (isset($map['SlimDegree'])) {
            $model->slimDegree = $map['SlimDegree'];
        }
        if (isset($map['LengthenDegree'])) {
            $model->lengthenDegree = $map['LengthenDegree'];
        }

        return $model;
    }
}
