<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveInteractionMetricDataResponseBody\nodes;
use AlibabaCloud\Tea\Model;

class DescribeLiveInteractionMetricDataResponseBody extends Model
{
    /**
     * @description The node data.
     *
     * @var nodes[]
     */
    public $nodes;

    /**
     * @description The ID of the request.
     *
     * @example A01C98C5-25AE-124A-83FE-514DF5C5BE36
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The summary data.
     *
     * @example 2000
     *
     * @var string
     */
    public $summaryData;
    protected $_name = [
        'nodes' => 'Nodes',
        'requestId' => 'RequestId',
        'summaryData' => 'SummaryData',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->nodes) {
            $res['Nodes'] = [];
            if (null !== $this->nodes && \is_array($this->nodes)) {
                $n = 0;
                foreach ($this->nodes as $item) {
                    $res['Nodes'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->summaryData) {
            $res['SummaryData'] = $this->summaryData;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeLiveInteractionMetricDataResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Nodes'])) {
            if (!empty($map['Nodes'])) {
                $model->nodes = [];
                $n = 0;
                foreach ($map['Nodes'] as $item) {
                    $model->nodes[$n++] = null !== $item ? nodes::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SummaryData'])) {
            $model->summaryData = $map['SummaryData'];
        }

        return $model;
    }
}
