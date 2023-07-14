<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\SDK\ARMS\V20190808\Models\GetTraceAppResponseBody\traceApp;
use AlibabaCloud\Tea\Model;

class GetTraceAppResponseBody extends Model
{
    /**
     * @description The request ID.
     *
     * @example D80ADAAC-8C32-5479-BD14-C28CF832****
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The information about the array object.
     *
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
