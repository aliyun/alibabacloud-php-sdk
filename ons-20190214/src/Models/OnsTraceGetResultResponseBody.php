<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ons\V20190214\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ons\V20190214\Models\OnsTraceGetResultResponseBody\traceData;

class OnsTraceGetResultResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var traceData
     */
    public $traceData;
    protected $_name = [
        'requestId' => 'RequestId',
        'traceData' => 'TraceData',
    ];

    public function validate()
    {
        if (null !== $this->traceData) {
            $this->traceData->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->traceData) {
            $res['TraceData'] = null !== $this->traceData ? $this->traceData->toArray($noStream) : $this->traceData;
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

        if (isset($map['TraceData'])) {
            $model->traceData = traceData::fromMap($map['TraceData']);
        }

        return $model;
    }
}
