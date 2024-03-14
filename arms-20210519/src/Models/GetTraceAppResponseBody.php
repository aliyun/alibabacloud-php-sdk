<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20210519\Models;

use AlibabaCloud\SDK\ARMS\V20210519\Models\GetTraceAppResponseBody\traceApp;
use AlibabaCloud\Tea\Model;

class GetTraceAppResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var traceApp
     */
    public $traceApp;
    protected $_name = [
        'requestId' => 'RequestId',
        'traceApp'  => 'TraceApp',
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
        if (null !== $this->traceApp) {
            $res['TraceApp'] = null !== $this->traceApp ? $this->traceApp->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetTraceAppResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TraceApp'])) {
            $model->traceApp = traceApp::fromMap($map['TraceApp']);
        }

        return $model;
    }
}
