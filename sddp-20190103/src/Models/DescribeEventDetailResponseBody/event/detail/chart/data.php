<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sddp\V20190103\Models\DescribeEventDetailResponseBody\event\detail\chart;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string[]
     */
    public $x;
    /**
     * @var string[]
     */
    public $y;
    /**
     * @var string[]
     */
    public $z;
    protected $_name = [
        'x' => 'X',
        'y' => 'Y',
        'z' => 'Z',
    ];

    public function validate()
    {
        if (\is_array($this->x)) {
            Model::validateArray($this->x);
        }
        if (\is_array($this->y)) {
            Model::validateArray($this->y);
        }
        if (\is_array($this->z)) {
            Model::validateArray($this->z);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->x) {
            if (\is_array($this->x)) {
                $res['X'] = [];
                $n1       = 0;
                foreach ($this->x as $item1) {
                    $res['X'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->y) {
            if (\is_array($this->y)) {
                $res['Y'] = [];
                $n1       = 0;
                foreach ($this->y as $item1) {
                    $res['Y'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->z) {
            if (\is_array($this->z)) {
                $res['Z'] = [];
                $n1       = 0;
                foreach ($this->z as $item1) {
                    $res['Z'][$n1++] = $item1;
                }
            }
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
        if (isset($map['X'])) {
            if (!empty($map['X'])) {
                $model->x = [];
                $n1       = 0;
                foreach ($map['X'] as $item1) {
                    $model->x[$n1++] = $item1;
                }
            }
        }

        if (isset($map['Y'])) {
            if (!empty($map['Y'])) {
                $model->y = [];
                $n1       = 0;
                foreach ($map['Y'] as $item1) {
                    $model->y[$n1++] = $item1;
                }
            }
        }

        if (isset($map['Z'])) {
            if (!empty($map['Z'])) {
                $model->z = [];
                $n1       = 0;
                foreach ($map['Z'] as $item1) {
                    $model->z[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
