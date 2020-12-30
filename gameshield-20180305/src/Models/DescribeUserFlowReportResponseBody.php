<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gameshield\V20180305\Models;

use AlibabaCloud\SDK\Gameshield\V20180305\Models\DescribeUserFlowReportResponseBody\flowReport;
use AlibabaCloud\Tea\Model;

class DescribeUserFlowReportResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var mixed[]
     */
    public $promptInfo;

    /**
     * @var flowReport
     */
    public $flowReport;
    protected $_name = [
        'requestId'  => 'RequestId',
        'promptInfo' => 'PromptInfo',
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
        if (null !== $this->promptInfo) {
            $res['PromptInfo'] = $this->promptInfo;
        }
        if (null !== $this->flowReport) {
            $res['FlowReport'] = null !== $this->flowReport ? $this->flowReport->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeUserFlowReportResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['PromptInfo'])) {
            $model->promptInfo = $map['PromptInfo'];
        }
        if (isset($map['FlowReport'])) {
            $model->flowReport = flowReport::fromMap($map['FlowReport']);
        }

        return $model;
    }
}
