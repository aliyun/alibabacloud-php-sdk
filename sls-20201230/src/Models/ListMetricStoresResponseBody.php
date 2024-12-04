<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models;

use AlibabaCloud\Tea\Model;

class ListMetricStoresResponseBody extends Model
{
    /**
     * @description The total number of entries returned.
     *
     * @example 10
     *
     * @var int
     */
    public $count;

    /**
     * @description The names of the Metricstores.
     *
     * @var string[]
     */
    public $metricstores;

    /**
     * @description The total number of queried Metricstores.
     *
     * @example 100
     *
     * @var int
     */
    public $total;
    protected $_name = [
        'count'        => 'count',
        'metricstores' => 'metricstores',
        'total'        => 'total',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->count) {
            $res['count'] = $this->count;
        }
        if (null !== $this->metricstores) {
            $res['metricstores'] = $this->metricstores;
        }
        if (null !== $this->total) {
            $res['total'] = $this->total;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListMetricStoresResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['count'])) {
            $model->count = $map['count'];
        }
        if (isset($map['metricstores'])) {
            if (!empty($map['metricstores'])) {
                $model->metricstores = $map['metricstores'];
            }
        }
        if (isset($map['total'])) {
            $model->total = $map['total'];
        }

        return $model;
    }
}
