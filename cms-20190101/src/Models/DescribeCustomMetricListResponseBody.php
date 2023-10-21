<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models;

use AlibabaCloud\Tea\Model;

class DescribeCustomMetricListResponseBody extends Model
{
    /**
     * @description The HTTP status code.
     *
     * >  The value 200 indicates that the call is successful.
     * @example 200
     *
     * @var string
     */
    public $code;

    /**
     * @description The returned message.
     *
     * @example success
     *
     * @var string
     */
    public $message;

    /**
     * @description The ID of the request.
     *
     * @example 1AF425E4-1DEA-54F2-910A-8117C9686140
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The reported custom metrics that are found in the query.
     *
     * @example {\"all\":0,\"size\":10,\"param\":{\"metric\":\"{\\\"metricName\\\":\\\"cpu_total\\\",\\\"groupId\\\":7378****,\\\"project\\\":\\\"acs_customMetric_120886317861****\\\",\\\"dimension\\\":\\\"sampleName1=value1&sampleName2=value2\\\",\\\"status\\\":1}\",\"service\":\"metric-center.aliyun-inc.com\"},\"page\":1,\"list\":[]}
     *
     * @var string
     */
    public $result;
    protected $_name = [
        'code'      => 'Code',
        'message'   => 'Message',
        'requestId' => 'RequestId',
        'result'    => 'Result',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->result) {
            $res['Result'] = $this->result;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeCustomMetricListResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Result'])) {
            $model->result = $map['Result'];
        }

        return $model;
    }
}
