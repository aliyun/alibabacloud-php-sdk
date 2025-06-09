<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models;

use AlibabaCloud\Dara\Model;

class ListMachinesResponseBody extends Model
{
    /**
     * @var int
     */
    public $count;

    /**
     * @var Machine[]
     */
    public $machines;

    /**
     * @var int
     */
    public $total;
    protected $_name = [
        'count' => 'count',
        'machines' => 'machines',
        'total' => 'total',
    ];

    public function validate()
    {
        if (\is_array($this->machines)) {
            Model::validateArray($this->machines);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->count) {
            $res['count'] = $this->count;
        }

        if (null !== $this->machines) {
            if (\is_array($this->machines)) {
                $res['machines'] = [];
                $n1 = 0;
                foreach ($this->machines as $item1) {
                    $res['machines'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->total) {
            $res['total'] = $this->total;
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
        if (isset($map['count'])) {
            $model->count = $map['count'];
        }

        if (isset($map['machines'])) {
            if (!empty($map['machines'])) {
                $model->machines = [];
                $n1 = 0;
                foreach ($map['machines'] as $item1) {
                    $model->machines[$n1++] = Machine::fromMap($item1);
                }
            }
        }

        if (isset($map['total'])) {
            $model->total = $map['total'];
        }

        return $model;
    }
}
