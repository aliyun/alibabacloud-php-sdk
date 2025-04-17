<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models;

use AlibabaCloud\Dara\Model;

class Boundary extends Model
{
    /**
     * @var int
     */
    public $height;

    /**
     * @var int
     */
    public $left;

    /**
     * @var PointInt64[]
     */
    public $polygon;

    /**
     * @var int
     */
    public $top;

    /**
     * @var int
     */
    public $width;
    protected $_name = [
        'height' => 'Height',
        'left' => 'Left',
        'polygon' => 'Polygon',
        'top' => 'Top',
        'width' => 'Width',
    ];

    public function validate()
    {
        if (\is_array($this->polygon)) {
            Model::validateArray($this->polygon);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->height) {
            $res['Height'] = $this->height;
        }

        if (null !== $this->left) {
            $res['Left'] = $this->left;
        }

        if (null !== $this->polygon) {
            if (\is_array($this->polygon)) {
                $res['Polygon'] = [];
                $n1 = 0;
                foreach ($this->polygon as $item1) {
                    $res['Polygon'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->top) {
            $res['Top'] = $this->top;
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
        if (isset($map['Height'])) {
            $model->height = $map['Height'];
        }

        if (isset($map['Left'])) {
            $model->left = $map['Left'];
        }

        if (isset($map['Polygon'])) {
            if (!empty($map['Polygon'])) {
                $model->polygon = [];
                $n1 = 0;
                foreach ($map['Polygon'] as $item1) {
                    $model->polygon[$n1++] = PointInt64::fromMap($item1);
                }
            }
        }

        if (isset($map['Top'])) {
            $model->top = $map['Top'];
        }

        if (isset($map['Width'])) {
            $model->width = $map['Width'];
        }

        return $model;
    }
}
