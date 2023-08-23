<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ons\V20190214\Models;

use AlibabaCloud\SDK\Ons\V20190214\Models\OnsTraceGetResultResponseBody\traceData;
use AlibabaCloud\Tea\Model;

class OnsTraceGetResultResponseBody extends Model
{
    /**
     * @description The ID of the request. This parameter is a common parameter. Each request has a unique ID. You can use this ID to troubleshoot issues.
     *
     * @example 84EE24D2-851F-40D6-B99E-4D6AB909****
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The details of the message trace.
     *
     * @var traceData
     */
    public $traceData;
    protected $_name = [
        'requestId' => 'RequestId',
        'traceData' => 'TraceData',
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
        if (null !== $this->traceData) {
            $res['TraceData'] = null !== $this->traceData ? $this->traceData->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return OnsTraceGetResultResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TraceData'])) {
            $model->traceData = traceData::fromMap($map['TraceData']);
        }

        return $model;
    }
}
