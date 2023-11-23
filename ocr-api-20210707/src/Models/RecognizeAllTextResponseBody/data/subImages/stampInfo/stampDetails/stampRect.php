<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeAllTextResponseBody\data\subImages\stampInfo\stampDetails;

use AlibabaCloud\Tea\Model;

class stampRect extends Model
{
    /**
     * @example 100
     *
     * @var int
     */
    public $centerX;

    /**
     * @example 200
     *
     * @var int
     */
    public $centerY;

    /**
     * @example 50
     *
     * @var int
     */
    public $height;

    /**
     * @example 50
     *
     * @var int
     */
    public $width;
    protected $_name = [
        'centerX' => 'CenterX',
        'centerY' => 'CenterY',
        'height'  => 'Height',
        'width'   => 'Width',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->centerX) {
            $res['CenterX'] = $this->centerX;
        }
        if (null !== $this->centerY) {
            $res['CenterY'] = $this->centerY;
        }
        if (null !== $this->height) {
            $res['Height'] = $this->height;
        }
        if (null !== $this->width) {
            $res['Width'] = $this->width;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return stampRect
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CenterX'])) {
            $model->centerX = $map['CenterX'];
        }
        if (isset($map['CenterY'])) {
            $model->centerY = $map['CenterY'];
        }
        if (isset($map['Height'])) {
            $model->height = $map['Height'];
        }
        if (isset($map['Width'])) {
            $model->width = $map['Width'];
        }

        return $model;
    }
}
