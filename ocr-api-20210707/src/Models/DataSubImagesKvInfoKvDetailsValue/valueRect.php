<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ocrapi\V20210707\Models\DataSubImagesKvInfoKvDetailsValue;

use AlibabaCloud\Tea\Model;

class valueRect extends Model
{
    /**
     * @var int
     */
    public $centerX;

    /**
     * @var int
     */
    public $centerY;

    /**
     * @var int
     */
    public $width;

    /**
     * @var int
     */
    public $height;
    protected $_name = [
        'centerX' => 'CenterX',
        'centerY' => 'CenterY',
        'width'   => 'Width',
        'height'  => 'Height',
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
        if (null !== $this->width) {
            $res['Width'] = $this->width;
        }
        if (null !== $this->height) {
            $res['Height'] = $this->height;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return valueRect
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
        if (isset($map['Width'])) {
            $model->width = $map['Width'];
        }
        if (isset($map['Height'])) {
            $model->height = $map['Height'];
        }

        return $model;
    }
}
