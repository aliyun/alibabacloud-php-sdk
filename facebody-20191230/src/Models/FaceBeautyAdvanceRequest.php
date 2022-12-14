<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Facebody\V20191230\Models;

use AlibabaCloud\Tea\Model;
use GuzzleHttp\Psr7\Stream;

class FaceBeautyAdvanceRequest extends Model
{
    /**
     * @example http://viapi-test.oss-cn-shanghai.aliyuncs.com/viapi-3.0domepic/facebody/FaceBeauty/FaceBeauty4.png
     *
     * @var Stream
     */
    public $imageURLObject;

    /**
     * @example 1
     *
     * @var float
     */
    public $sharp;

    /**
     * @example 0.1
     *
     * @var float
     */
    public $smooth;

    /**
     * @example 0.3
     *
     * @var float
     */
    public $white;
    protected $_name = [
        'imageURLObject' => 'ImageURL',
        'sharp'          => 'Sharp',
        'smooth'         => 'Smooth',
        'white'          => 'White',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->imageURLObject) {
            $res['ImageURL'] = $this->imageURLObject;
        }
        if (null !== $this->sharp) {
            $res['Sharp'] = $this->sharp;
        }
        if (null !== $this->smooth) {
            $res['Smooth'] = $this->smooth;
        }
        if (null !== $this->white) {
            $res['White'] = $this->white;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return FaceBeautyAdvanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ImageURL'])) {
            $model->imageURLObject = $map['ImageURL'];
        }
        if (isset($map['Sharp'])) {
            $model->sharp = $map['Sharp'];
        }
        if (isset($map['Smooth'])) {
            $model->smooth = $map['Smooth'];
        }
        if (isset($map['White'])) {
            $model->white = $map['White'];
        }

        return $model;
    }
}
