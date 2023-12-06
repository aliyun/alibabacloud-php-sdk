<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imageseg\V20191230\Models\SegmentHeadResponseBody\data;

use AlibabaCloud\Tea\Model;

class elements extends Model
{
    /**
     * @example 180
     *
     * @var int
     */
    public $height;

    /**
     * @example http://viapi-cn-shanghai-dha-segmenter.oss-cn-shanghai.aliyuncs.com/upload/result_headsegmenter/2020-6-2/invi_headsegmenter_015910809094981099086_TAamhR.png?Expires=1591082709&OSSAccessKeyId=LTAI4FoLmvQ9urWXgSRp****&Signature=xuUE%2FbYeB9LpR18VXawOVeutQU****
     *
     * @var string
     */
    public $imageURL;

    /**
     * @example 116
     *
     * @var int
     */
    public $width;

    /**
     * @example 445
     *
     * @var int
     */
    public $x;

    /**
     * @example 102
     *
     * @var int
     */
    public $y;
    protected $_name = [
        'height'   => 'Height',
        'imageURL' => 'ImageURL',
        'width'    => 'Width',
        'x'        => 'X',
        'y'        => 'Y',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->height) {
            $res['Height'] = $this->height;
        }
        if (null !== $this->imageURL) {
            $res['ImageURL'] = $this->imageURL;
        }
        if (null !== $this->width) {
            $res['Width'] = $this->width;
        }
        if (null !== $this->x) {
            $res['X'] = $this->x;
        }
        if (null !== $this->y) {
            $res['Y'] = $this->y;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return elements
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Height'])) {
            $model->height = $map['Height'];
        }
        if (isset($map['ImageURL'])) {
            $model->imageURL = $map['ImageURL'];
        }
        if (isset($map['Width'])) {
            $model->width = $map['Width'];
        }
        if (isset($map['X'])) {
            $model->x = $map['X'];
        }
        if (isset($map['Y'])) {
            $model->y = $map['Y'];
        }

        return $model;
    }
}
