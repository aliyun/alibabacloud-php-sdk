<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeAllTextResponseBody\data\subImages;

use AlibabaCloud\Dara\Model;

class subImageRect extends Model
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
    public $height;

    /**
     * @var int
     */
    public $width;
    protected $_name = [
        'centerX' => 'CenterX',
        'centerY' => 'CenterY',
        'height' => 'Height',
        'width' => 'Width',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
