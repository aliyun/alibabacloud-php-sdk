<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeSQLLogCountResponseBody\items\series;

use AlibabaCloud\Dara\Model;

class values extends Model
{
    /**
     * @var string[]
     */
    public $point;
    protected $_name = [
        'point' => 'Point',
    ];

    public function validate()
    {
        if (\is_array($this->point)) {
            Model::validateArray($this->point);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->point) {
            if (\is_array($this->point)) {
                $res['Point'] = [];
                $n1 = 0;
                foreach ($this->point as $item1) {
                    $res['Point'][$n1++] = $item1;
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
        if (isset($map['Point'])) {
            if (!empty($map['Point'])) {
                $model->point = [];
                $n1 = 0;
                foreach ($map['Point'] as $item1) {
                    $model->point[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
