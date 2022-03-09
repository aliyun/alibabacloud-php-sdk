<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Holowatcher\V20200730\Models;

use AlibabaCloud\Tea\Model;

class FloorPlan extends Model
{
    /**
     * @description angle
     *
     * @var int
     */
    public $angle;

    /**
     * @description imgHeight
     *
     * @var int
     */
    public $imgHeight;

    /**
     * @description imgWidth
     *
     * @var int
     */
    public $imgWidth;

    /**
     * @description scale
     *
     * @var int
     */
    public $scale;

    /**
     * @description translationX
     *
     * @var int
     */
    public $translationX;

    /**
     * @description translationY
     *
     * @var int
     */
    public $translationY;
    protected $_name = [
        'angle'        => 'Angle',
        'imgHeight'    => 'ImgHeight',
        'imgWidth'     => 'ImgWidth',
        'scale'        => 'Scale',
        'translationX' => 'TranslationX',
        'translationY' => 'TranslationY',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->angle) {
            $res['Angle'] = $this->angle;
        }
        if (null !== $this->imgHeight) {
            $res['ImgHeight'] = $this->imgHeight;
        }
        if (null !== $this->imgWidth) {
            $res['ImgWidth'] = $this->imgWidth;
        }
        if (null !== $this->scale) {
            $res['Scale'] = $this->scale;
        }
        if (null !== $this->translationX) {
            $res['TranslationX'] = $this->translationX;
        }
        if (null !== $this->translationY) {
            $res['TranslationY'] = $this->translationY;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return FloorPlan
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Angle'])) {
            $model->angle = $map['Angle'];
        }
        if (isset($map['ImgHeight'])) {
            $model->imgHeight = $map['ImgHeight'];
        }
        if (isset($map['ImgWidth'])) {
            $model->imgWidth = $map['ImgWidth'];
        }
        if (isset($map['Scale'])) {
            $model->scale = $map['Scale'];
        }
        if (isset($map['TranslationX'])) {
            $model->translationX = $map['TranslationX'];
        }
        if (isset($map['TranslationY'])) {
            $model->translationY = $map['TranslationY'];
        }

        return $model;
    }
}
