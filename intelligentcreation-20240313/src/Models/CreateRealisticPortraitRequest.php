<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IntelligentCreation\V20240313\Models;

use AlibabaCloud\Tea\Model;

class CreateRealisticPortraitRequest extends Model
{
    /**
     * @var int[]
     */
    public $ages;

    /**
     * @example 1
     *
     * @var int
     */
    public $cloth;

    /**
     * @example 1
     *
     * @var int
     */
    public $color;

    /**
     * @example 11
     *
     * @var string
     */
    public $custom;

    /**
     * @var int[]
     */
    public $face;

    /**
     * @example 1
     *
     * @var int
     */
    public $figure;

    /**
     * @example 1
     *
     * @var int
     */
    public $gender;

    /**
     * @example 1
     *
     * @var int
     */
    public $hairColor;

    /**
     * @example 1
     *
     * @var int
     */
    public $hairstyle;

    /**
     * @example 500
     *
     * @var int
     */
    public $height;

    /**
     * @var string
     */
    public $imageUrl;

    /**
     * @example 4
     *
     * @var int
     */
    public $numbers;

    /**
     * @example 1:1
     *
     * @var string
     */
    public $ratio;

    /**
     * @example 500
     *
     * @var int
     */
    public $width;
    protected $_name = [
        'ages'      => 'ages',
        'cloth'     => 'cloth',
        'color'     => 'color',
        'custom'    => 'custom',
        'face'      => 'face',
        'figure'    => 'figure',
        'gender'    => 'gender',
        'hairColor' => 'hairColor',
        'hairstyle' => 'hairstyle',
        'height'    => 'height',
        'imageUrl'  => 'imageUrl',
        'numbers'   => 'numbers',
        'ratio'     => 'ratio',
        'width'     => 'width',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ages) {
            $res['ages'] = $this->ages;
        }
        if (null !== $this->cloth) {
            $res['cloth'] = $this->cloth;
        }
        if (null !== $this->color) {
            $res['color'] = $this->color;
        }
        if (null !== $this->custom) {
            $res['custom'] = $this->custom;
        }
        if (null !== $this->face) {
            $res['face'] = $this->face;
        }
        if (null !== $this->figure) {
            $res['figure'] = $this->figure;
        }
        if (null !== $this->gender) {
            $res['gender'] = $this->gender;
        }
        if (null !== $this->hairColor) {
            $res['hairColor'] = $this->hairColor;
        }
        if (null !== $this->hairstyle) {
            $res['hairstyle'] = $this->hairstyle;
        }
        if (null !== $this->height) {
            $res['height'] = $this->height;
        }
        if (null !== $this->imageUrl) {
            $res['imageUrl'] = $this->imageUrl;
        }
        if (null !== $this->numbers) {
            $res['numbers'] = $this->numbers;
        }
        if (null !== $this->ratio) {
            $res['ratio'] = $this->ratio;
        }
        if (null !== $this->width) {
            $res['width'] = $this->width;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateRealisticPortraitRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ages'])) {
            if (!empty($map['ages'])) {
                $model->ages = $map['ages'];
            }
        }
        if (isset($map['cloth'])) {
            $model->cloth = $map['cloth'];
        }
        if (isset($map['color'])) {
            $model->color = $map['color'];
        }
        if (isset($map['custom'])) {
            $model->custom = $map['custom'];
        }
        if (isset($map['face'])) {
            if (!empty($map['face'])) {
                $model->face = $map['face'];
            }
        }
        if (isset($map['figure'])) {
            $model->figure = $map['figure'];
        }
        if (isset($map['gender'])) {
            $model->gender = $map['gender'];
        }
        if (isset($map['hairColor'])) {
            $model->hairColor = $map['hairColor'];
        }
        if (isset($map['hairstyle'])) {
            $model->hairstyle = $map['hairstyle'];
        }
        if (isset($map['height'])) {
            $model->height = $map['height'];
        }
        if (isset($map['imageUrl'])) {
            $model->imageUrl = $map['imageUrl'];
        }
        if (isset($map['numbers'])) {
            $model->numbers = $map['numbers'];
        }
        if (isset($map['ratio'])) {
            $model->ratio = $map['ratio'];
        }
        if (isset($map['width'])) {
            $model->width = $map['width'];
        }

        return $model;
    }
}
