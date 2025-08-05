<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MaxCompute\V20220104\Models\GetQuotaUsageResponseBody;

use AlibabaCloud\SDK\MaxCompute\V20220104\Models\GetQuotaUsageResponseBody\data\plot;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The metric results.
     *
     * @var mixed[]
     */
    public $metrics;

    /**
     * @description The information about the chart.
     *
     * @var plot[]
     */
    public $plot;
    protected $_name = [
        'metrics' => 'metrics',
        'plot' => 'plot',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->metrics) {
            $res['metrics'] = $this->metrics;
        }
        if (null !== $this->plot) {
            $res['plot'] = [];
            if (null !== $this->plot && \is_array($this->plot)) {
                $n = 0;
                foreach ($this->plot as $item) {
                    $res['plot'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['metrics'])) {
            $model->metrics = $map['metrics'];
        }
        if (isset($map['plot'])) {
            if (!empty($map['plot'])) {
                $model->plot = [];
                $n = 0;
                foreach ($map['plot'] as $item) {
                    $model->plot[$n++] = null !== $item ? plot::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
