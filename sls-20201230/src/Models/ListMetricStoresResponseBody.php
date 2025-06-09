<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models;

use AlibabaCloud\Dara\Model;

class ListMetricStoresResponseBody extends Model
{
    /**
     * @var int
     */
    public $count;

    /**
     * @var string[]
     */
    public $metricstores;

    /**
     * @var int
     */
    public $total;
    protected $_name = [
        'count' => 'count',
        'metricstores' => 'metricstores',
        'total' => 'total',
    ];

    public function validate()
    {
        if (\is_array($this->metricstores)) {
            Model::validateArray($this->metricstores);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->count) {
            $res['count'] = $this->count;
        }

        if (null !== $this->metricstores) {
            if (\is_array($this->metricstores)) {
                $res['metricstores'] = [];
                $n1 = 0;
                foreach ($this->metricstores as $item1) {
                    $res['metricstores'][$n1++] = $item1;
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

        if (isset($map['metricstores'])) {
            if (!empty($map['metricstores'])) {
                $model->metricstores = [];
                $n1 = 0;
                foreach ($map['metricstores'] as $item1) {
                    $model->metricstores[$n1++] = $item1;
                }
            }
        }

        if (isset($map['total'])) {
            $model->total = $map['total'];
        }

        return $model;
    }
}
