<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizePdfResponseBody\data;

use AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizePdfResponseBody\data\wordsInfo\positions;
use AlibabaCloud\Tea\Model;

class wordsInfo extends Model
{
    /**
     * @example 0
     *
     * @var int
     */
    public $angle;

    /**
     * @example 16
     *
     * @var int
     */
    public $height;

    /**
     * @var positions[]
     */
    public $positions;

    /**
     * @example 205
     *
     * @var int
     */
    public $width;

    /**
     * @var string
     */
    public $word;

    /**
     * @example 863
     *
     * @var int
     */
    public $x;

    /**
     * @example 46
     *
     * @var int
     */
    public $y;
    protected $_name = [
        'angle'     => 'Angle',
        'height'    => 'Height',
        'positions' => 'Positions',
        'width'     => 'Width',
        'word'      => 'Word',
        'x'         => 'X',
        'y'         => 'Y',
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
        if (null !== $this->height) {
            $res['Height'] = $this->height;
        }
        if (null !== $this->positions) {
            $res['Positions'] = [];
            if (null !== $this->positions && \is_array($this->positions)) {
                $n = 0;
                foreach ($this->positions as $item) {
                    $res['Positions'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->width) {
            $res['Width'] = $this->width;
        }
        if (null !== $this->word) {
            $res['Word'] = $this->word;
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
     * @return wordsInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Angle'])) {
            $model->angle = $map['Angle'];
        }
        if (isset($map['Height'])) {
            $model->height = $map['Height'];
        }
        if (isset($map['Positions'])) {
            if (!empty($map['Positions'])) {
                $model->positions = [];
                $n                = 0;
                foreach ($map['Positions'] as $item) {
                    $model->positions[$n++] = null !== $item ? positions::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Width'])) {
            $model->width = $map['Width'];
        }
        if (isset($map['Word'])) {
            $model->word = $map['Word'];
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
