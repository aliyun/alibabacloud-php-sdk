<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Facebody\V20191230\Models\BodyPostureResponseBody\data\outputs\results\bodies;

use AlibabaCloud\Dara\Model;

class positions extends Model
{
    /**
     * @var float[]
     */
    public $points;
    protected $_name = [
        'points' => 'Points',
    ];

    public function validate()
    {
        if (\is_array($this->points)) {
            Model::validateArray($this->points);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->points) {
            if (\is_array($this->points)) {
                $res['Points'] = [];
                $n1 = 0;
                foreach ($this->points as $item1) {
                    $res['Points'][$n1] = $item1;
                    ++$n1;
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
        if (isset($map['Points'])) {
            if (!empty($map['Points'])) {
                $model->points = [];
                $n1 = 0;
                foreach ($map['Points'] as $item1) {
                    $model->points[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
