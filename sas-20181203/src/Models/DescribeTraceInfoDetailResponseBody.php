<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeTraceInfoDetailResponseBody\traceInfoDetail;

class DescribeTraceInfoDetailResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;
    /**
     * @var bool
     */
    public $success;
    /**
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
        if (null !== $this->traceInfoDetail) {
            $this->traceInfoDetail->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }

        if (null !== $this->traceInfoDetail) {
            $res['TraceInfoDetail'] = null !== $this->traceInfoDetail ? $this->traceInfoDetail->toArray($noStream) : $this->traceInfoDetail;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
