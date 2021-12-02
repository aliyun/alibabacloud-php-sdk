<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Facebody\V20191230\Models;

use AlibabaCloud\Tea\Model;

class RetouchBodyRequest extends Model
{
    /**
     * @var string
     */
    public $imageURL;

    /**
     * @var float
     */
    public $lengthenDegree;

    /**
     * @var float
     */
    public $slimDegree;
    protected $_name = [
        'imageURL'       => 'ImageURL',
        'lengthenDegree' => 'LengthenDegree',
        'slimDegree'     => 'SlimDegree',
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
        if (null !== $this->lengthenDegree) {
            $res['LengthenDegree'] = $this->lengthenDegree;
        }
        if (null !== $this->slimDegree) {
            $res['SlimDegree'] = $this->slimDegree;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RetouchBodyRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ImageURL'])) {
            $model->imageURL = $map['ImageURL'];
        }
        if (isset($map['LengthenDegree'])) {
            $model->lengthenDegree = $map['LengthenDegree'];
        }
        if (isset($map['SlimDegree'])) {
            $model->slimDegree = $map['SlimDegree'];
        }

        return $model;
    }
}
