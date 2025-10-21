<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ververica\V20220718\Models;

use AlibabaCloud\Dara\Model;

class Row extends Model
{
    /**
     * @var Cell[]
     */
    public $cells;
    protected $_name = [
        'cells' => 'cells',
    ];

    public function validate()
    {
        if (\is_array($this->cells)) {
            Model::validateArray($this->cells);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cells) {
            if (\is_array($this->cells)) {
                $res['cells'] = [];
                $n1 = 0;
                foreach ($this->cells as $item1) {
                    $res['cells'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['cells'])) {
            if (!empty($map['cells'])) {
                $model->cells = [];
                $n1 = 0;
                foreach ($map['cells'] as $item1) {
                    $model->cells[$n1] = Cell::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
