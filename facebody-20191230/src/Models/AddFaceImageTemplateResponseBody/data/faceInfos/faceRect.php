<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Facebody\V20191230\Models\AddFaceImageTemplateResponseBody\data\faceInfos;

use AlibabaCloud\Tea\Model;

class faceRect extends Model
{
    /**
     * @var string
     */
    public $height;

    /**
     * @var string
     */
    public $width;

    /**
     * @var string
     */
    public $x;

    /**
     * @var string
     */
    public $y;
    protected $_name = [
        'height' => 'Height',
        'width'  => 'Width',
        'x'      => 'X',
        'y'      => 'Y',
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
     * @return faceRect
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Height'])) {
            $model->height = $map['Height'];
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
