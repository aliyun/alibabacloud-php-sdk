<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizePdfResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizePdfResponseBody\data\wordsInfo\positions;

class wordsInfo extends Model
{
    /**
     * @var int
     */
    public $angle;

    /**
     * @var int
     */
    public $height;

    /**
     * @var positions[]
     */
    public $positions;

    /**
     * @var int
     */
    public $width;

    /**
     * @var string
     */
    public $word;

    /**
     * @var int
     */
    public $x;

    /**
     * @var int
     */
    public $y;
    protected $_name = [
        'angle' => 'Angle',
        'height' => 'Height',
        'positions' => 'Positions',
        'width' => 'Width',
        'word' => 'Word',
        'x' => 'X',
        'y' => 'Y',
    ];

    public function validate()
    {
        if (\is_array($this->positions)) {
            Model::validateArray($this->positions);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->angle) {
            $res['Angle'] = $this->angle;
        }

        if (null !== $this->height) {
            $res['Height'] = $this->height;
        }

        if (null !== $this->positions) {
            if (\is_array($this->positions)) {
                $res['Positions'] = [];
                $n1 = 0;
                foreach ($this->positions as $item1) {
                    $res['Positions'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
                $n1 = 0;
                foreach ($map['Positions'] as $item1) {
                    $model->positions[$n1] = positions::fromMap($item1);
                    ++$n1;
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
