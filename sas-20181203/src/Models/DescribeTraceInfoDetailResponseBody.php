<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeTraceInfoDetailResponseBody\traceInfoDetail;
use AlibabaCloud\Tea\Model;

class DescribeTraceInfoDetailResponseBody extends Model
{
    /**
     * @description The ID of the request.
     *
     * @example 24A20733-10A0-4AF6-BE6B-XXXXXXXXX
     *
     * @var string
     */
    public $requestId;

    /**
     * @description Indicates whether the request was successful. Valid values:
     *
     *   **true**: The request was successful.
     *   **false**: The request failed.
     *
     * @example true
     *
     * @var bool
     */
    public $success;

    /**
     * @description The details of the tracing diagram.
     *
     * @var traceInfoDetail
     */
    public $traceInfoDetail;
    protected $_name = [
        'requestId'       => 'RequestId',
        'success'         => 'Success',
        'traceInfoDetail' => 'TraceInfoDetail',
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
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }
        if (null !== $this->traceInfoDetail) {
            $res['TraceInfoDetail'] = null !== $this->traceInfoDetail ? $this->traceInfoDetail->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeTraceInfoDetailResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }
        if (isset($map['TraceInfoDetail'])) {
            $model->traceInfoDetail = traceInfoDetail::fromMap($map['TraceInfoDetail']);
        }

        return $model;
    }
}
