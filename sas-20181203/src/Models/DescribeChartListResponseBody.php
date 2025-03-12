<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeChartListResponseBody\chartList;
use AlibabaCloud\Tea\Model;

class DescribeChartListResponseBody extends Model
{
    /**
     * @description The charts.
     *
     * @var chartList[]
     */
    public $chartList;

    /**
     * @description The request ID.
     *
     * @example 35B434CC-1615-5937-A04E-A9BC2868DB45
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'chartList' => 'ChartList',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->chartList) {
            $res['ChartList'] = [];
            if (null !== $this->chartList && \is_array($this->chartList)) {
                $n = 0;
                foreach ($this->chartList as $item) {
                    $res['ChartList'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return DescribeChartListResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ChartList'])) {
            if (!empty($map['ChartList'])) {
                $model->chartList = [];
                $n                = 0;
                foreach ($map['ChartList'] as $item) {
                    $model->chartList[$n++] = null !== $item ? chartList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
