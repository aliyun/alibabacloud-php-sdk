<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CDRS\V20201101\Models\RecognizeImageResponseBody\data;

use AlibabaCloud\Tea\Model;

class bodyList extends Model
{
    /**
     * @example code1
     *
     * @var string
     */
    public $cropAlgorithmCode;

    /**
     * @example [-0.04595605,-0.0038912394,-0.012384229]
     *
     * @var string
     */
    public $feature;

    /**
     * @example 489
     *
     * @var int
     */
    public $leftTopX;

    /**
     * @example 600
     *
     * @var int
     */
    public $leftTopY;

    /**
     * @example 10
     *
     * @var int
     */
    public $rightBottomX;

    /**
     * @example 20
     *
     * @var int
     */
    public $rightBottomY;

    /**
     * @example iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAACZUlEQVQ4T42TX2hSURzHf+feq1OnaDFIF42uWougkNSH3XDWxgraQ0RImdQwofcgih5GT7Uoas8xm9UyAgdRjyNClJYs/xEELlY5w2ZlpJtM5/0X95aiqdV5OnDO+dzf7/v7XAT/XggA+E7XhMOmZTKZtqvl2CuZhFeUq7wSIcRLcW61wmKVtTJPJZPJdOODJoDVanXjGEwFXGlcKaGBwJo/POw1cAwLnng8fq8GqQOsVqv96ZmPQZZHcH2e/H7Lo/uGYYSWF8rnmc/jM7m+cSqlEh7a7xgG4/F4WNiLALPZ3COToJXHp5aJ2ws7ixNurbqlNwCgLqYheG4JRryGKs2hrbFYLC/eGxww5/zOzJbJ18bSFVevUkaw7TNDOFyYyuSvHXzXM+rTfwlFEloRMLTftHr/RFaFb6MWN6mIfoyjgfmagidv5CLo2N4yENrdAAgHnmNS9IfgrqMPyNKLl0mVCLANmNlHzgzWRdoKagXSAEsDdTkL0WhUBPgvmcBxiBQBCKCwsfRcc8Sn58KRBC4CDlBmZuZkBpfrbQWV/P8Aoz6SC0WSvwAjNtOPaUdWQ/RRi5tVRH+tgloQofNrLS0cf0gW58JJze8Q9634nZ+0QohXx3qVQgYtC8PEFhpCzIUiCZ0IEOzrkhDvZ08vY5MLO4oTbp263RhqYxz2GtkqzRoFK+vjtlgsZ5+Npe8KIt2YJ/M3Pbr8X0Ry12z8U2U7gfNzs660tFvCAI6aVT48bWAqNAzVLKyb2FiuYGW3lH8rwUGxwfAK4UyKQYnm0Po6jfYI9nX8mdr17XA48EAg0EFNgJ/jCg8gGGphCgAAAABJRU5ErkJggg==
     *
     * @var string
     */
    public $targetImageContent;
    protected $_name = [
        'cropAlgorithmCode'  => 'CropAlgorithmCode',
        'feature'            => 'Feature',
        'leftTopX'           => 'LeftTopX',
        'leftTopY'           => 'LeftTopY',
        'rightBottomX'       => 'RightBottomX',
        'rightBottomY'       => 'RightBottomY',
        'targetImageContent' => 'TargetImageContent',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cropAlgorithmCode) {
            $res['CropAlgorithmCode'] = $this->cropAlgorithmCode;
        }
        if (null !== $this->feature) {
            $res['Feature'] = $this->feature;
        }
        if (null !== $this->leftTopX) {
            $res['LeftTopX'] = $this->leftTopX;
        }
        if (null !== $this->leftTopY) {
            $res['LeftTopY'] = $this->leftTopY;
        }
        if (null !== $this->rightBottomX) {
            $res['RightBottomX'] = $this->rightBottomX;
        }
        if (null !== $this->rightBottomY) {
            $res['RightBottomY'] = $this->rightBottomY;
        }
        if (null !== $this->targetImageContent) {
            $res['TargetImageContent'] = $this->targetImageContent;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return bodyList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CropAlgorithmCode'])) {
            $model->cropAlgorithmCode = $map['CropAlgorithmCode'];
        }
        if (isset($map['Feature'])) {
            $model->feature = $map['Feature'];
        }
        if (isset($map['LeftTopX'])) {
            $model->leftTopX = $map['LeftTopX'];
        }
        if (isset($map['LeftTopY'])) {
            $model->leftTopY = $map['LeftTopY'];
        }
        if (isset($map['RightBottomX'])) {
            $model->rightBottomX = $map['RightBottomX'];
        }
        if (isset($map['RightBottomY'])) {
            $model->rightBottomY = $map['RightBottomY'];
        }
        if (isset($map['TargetImageContent'])) {
            $model->targetImageContent = $map['TargetImageContent'];
        }

        return $model;
    }
}
