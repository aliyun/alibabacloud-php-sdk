<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models;

use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribePeakTrendResponseBody\flowChart;
use AlibabaCloud\Tea\Model;

class DescribePeakTrendResponseBody extends Model
{
    /**
     * @var flowChart[]
     */
    public $flowChart;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'flowChart' => 'FlowChart',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->flowChart) {
            $res['FlowChart'] = [];
            if (null !== $this->flowChart && \is_array($this->flowChart)) {
                $n = 0;
                foreach ($this->flowChart as $item) {
                    $res['FlowChart'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribePeakTrendResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FlowChart'])) {
            if (!empty($map['FlowChart'])) {
                $model->flowChart = [];
                $n                = 0;
                foreach ($map['FlowChart'] as $item) {
                    $model->flowChart[$n++] = null !== $item ? flowChart::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
