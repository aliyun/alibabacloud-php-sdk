<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SysOM\V20231230\Models\ListAlertStrategiesResponseBody\data;

use AlibabaCloud\Dara\Model;

class strategy extends Model
{
    /**
     * @var string[]
     */
    public $clusters;

    /**
     * @var string[]
     */
    public $items;
    protected $_name = [
        'clusters' => 'clusters',
        'items' => 'items',
    ];

    public function validate()
    {
        if (\is_array($this->clusters)) {
            Model::validateArray($this->clusters);
        }
        if (\is_array($this->items)) {
            Model::validateArray($this->items);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clusters) {
            if (\is_array($this->clusters)) {
                $res['clusters'] = [];
                $n1 = 0;
                foreach ($this->clusters as $item1) {
                    $res['clusters'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->items) {
            if (\is_array($this->items)) {
                $res['items'] = [];
                $n1 = 0;
                foreach ($this->items as $item1) {
                    $res['items'][$n1] = $item1;
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
        if (isset($map['clusters'])) {
            if (!empty($map['clusters'])) {
                $model->clusters = [];
                $n1 = 0;
                foreach ($map['clusters'] as $item1) {
                    $model->clusters[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['items'])) {
            if (!empty($map['items'])) {
                $model->items = [];
                $n1 = 0;
                foreach ($map['items'] as $item1) {
                    $model->items[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
