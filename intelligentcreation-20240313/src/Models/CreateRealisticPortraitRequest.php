<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IntelligentCreation\V20240313\Models;

use AlibabaCloud\Dara\Model;

class CreateRealisticPortraitRequest extends Model
{
    /**
     * @var int[]
     */
    public $ages;

    /**
     * @var int
     */
    public $cloth;

    /**
     * @var int
     */
    public $color;

    /**
     * @var string
     */
    public $custom;

    /**
     * @var int[]
     */
    public $face;

    /**
     * @var int
     */
    public $figure;

    /**
     * @var int
     */
    public $gender;

    /**
     * @var int
     */
    public $hairColor;

    /**
     * @var int
     */
    public $hairstyle;

    /**
     * @var int
     */
    public $height;

    /**
     * @var string
     */
    public $imageUrl;

    /**
     * @var int
     */
    public $numbers;

    /**
     * @var string
     */
    public $ratio;

    /**
     * @var int
     */
    public $width;
    protected $_name = [
        'ages' => 'ages',
        'cloth' => 'cloth',
        'color' => 'color',
        'custom' => 'custom',
        'face' => 'face',
        'figure' => 'figure',
        'gender' => 'gender',
        'hairColor' => 'hairColor',
        'hairstyle' => 'hairstyle',
        'height' => 'height',
        'imageUrl' => 'imageUrl',
        'numbers' => 'numbers',
        'ratio' => 'ratio',
        'width' => 'width',
    ];

    public function validate()
    {
        if (\is_array($this->ages)) {
            Model::validateArray($this->ages);
        }
        if (\is_array($this->face)) {
            Model::validateArray($this->face);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->ages) {
            if (\is_array($this->ages)) {
                $res['ages'] = [];
                $n1 = 0;
                foreach ($this->ages as $item1) {
                    $res['ages'][$n1] = $item1;
                    ++$n1;
                }
            }
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
            if (\is_array($this->face)) {
                $res['face'] = [];
                $n1 = 0;
                foreach ($this->face as $item1) {
                    $res['face'][$n1] = $item1;
                    ++$n1;
                }
            }
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ages'])) {
            if (!empty($map['ages'])) {
                $model->ages = [];
                $n1 = 0;
                foreach ($map['ages'] as $item1) {
                    $model->ages[$n1] = $item1;
                    ++$n1;
                }
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
                $model->face = [];
                $n1 = 0;
                foreach ($map['face'] as $item1) {
                    $model->face[$n1] = $item1;
                    ++$n1;
                }
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
