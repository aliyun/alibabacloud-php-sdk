<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Facebody\V20191230\Models\RecognizeHandGestureResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example 53
     *
     * @var int
     */
    public $height;

    /**
     * @example 0.921875
     *
     * @var float
     */
    public $score;

    /**
     * @example right
     *
     * @var string
     */
    public $type;

    /**
     * @example 46
     *
     * @var int
     */
    public $width;

    /**
     * @example 237
     *
     * @var int
     */
    public $x;

    /**
     * @example 216
     *
     * @var int
     */
    public $y;
    protected $_name = [
        'height' => 'Height',
        'score'  => 'Score',
        'type'   => 'Type',
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
        if (null !== $this->score) {
            $res['Score'] = $this->score;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
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
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Height'])) {
            $model->height = $map['Height'];
        }
        if (isset($map['Score'])) {
            $model->score = $map['Score'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
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
