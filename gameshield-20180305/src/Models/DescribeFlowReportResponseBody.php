<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gameshield\V20180305\Models;

use AlibabaCloud\SDK\Gameshield\V20180305\Models\DescribeFlowReportResponseBody\flowReport;
use AlibabaCloud\Tea\Model;

class DescribeFlowReportResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var flowReport[]
     */
    public $flowReport;
    protected $_name = [
        'requestId'  => 'RequestId',
        'flowReport' => 'FlowReport',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->flowReport) {
            $res['FlowReport'] = [];
            if (null !== $this->flowReport && \is_array($this->flowReport)) {
                $n = 0;
                foreach ($this->flowReport as $item) {
                    $res['FlowReport'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeFlowReportResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['FlowReport'])) {
            if (!empty($map['FlowReport'])) {
                $model->flowReport = [];
                $n                 = 0;
                foreach ($map['FlowReport'] as $item) {
                    $model->flowReport[$n++] = null !== $item ? flowReport::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
