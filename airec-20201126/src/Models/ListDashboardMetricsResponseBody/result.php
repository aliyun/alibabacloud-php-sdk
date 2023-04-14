<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Airec\V20201126\Models\ListDashboardMetricsResponseBody;

use AlibabaCloud\SDK\Airec\V20201126\Models\ListDashboardMetricsResponseBody\result\detail;
use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @description The details about the metric.
     *
     * @var detail[]
     */
    public $detail;

    /**
     * @description The statistical results.
     *
     * @example xxx
     *
     * @var mixed[]
     */
    public $total;
    protected $_name = [
        'detail' => 'detail',
        'total'  => 'total',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->detail) {
            $res['detail'] = [];
            if (null !== $this->detail && \is_array($this->detail)) {
                $n = 0;
                foreach ($this->detail as $item) {
                    $res['detail'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->total) {
            $res['total'] = $this->total;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['detail'])) {
            if (!empty($map['detail'])) {
                $model->detail = [];
                $n             = 0;
                foreach ($map['detail'] as $item) {
                    $model->detail[$n++] = null !== $item ? detail::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['total'])) {
            $model->total = $map['total'];
        }

        return $model;
    }
}
