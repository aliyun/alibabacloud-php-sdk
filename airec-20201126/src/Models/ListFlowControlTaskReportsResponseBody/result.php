<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Airec\V20201126\Models\ListFlowControlTaskReportsResponseBody;

use AlibabaCloud\SDK\Airec\V20201126\Models\ListFlowControlTaskReportsResponseBody\result\metrics;
use AlibabaCloud\SDK\Airec\V20201126\Models\ListFlowControlTaskReportsResponseBody\result\total;
use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @var metrics[]
     */
    public $metrics;

    /**
     * @var total
     */
    public $total;
    protected $_name = [
        'metrics' => 'metrics',
        'total'   => 'total',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->metrics) {
            $res['metrics'] = [];
            if (null !== $this->metrics && \is_array($this->metrics)) {
                $n = 0;
                foreach ($this->metrics as $item) {
                    $res['metrics'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->total) {
            $res['total'] = null !== $this->total ? $this->total->toMap() : null;
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
        if (isset($map['metrics'])) {
            if (!empty($map['metrics'])) {
                $model->metrics = [];
                $n              = 0;
                foreach ($map['metrics'] as $item) {
                    $model->metrics[$n++] = null !== $item ? metrics::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['total'])) {
            $model->total = total::fromMap($map['total']);
        }

        return $model;
    }
}
