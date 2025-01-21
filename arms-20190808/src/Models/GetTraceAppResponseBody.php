<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ARMS\V20190808\Models\GetTraceAppResponseBody\traceApp;

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
        if (null !== $this->traceApp) {
            $this->traceApp->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->traceApp) {
            $res['TraceApp'] = null !== $this->traceApp ? $this->traceApp->toArray($noStream) : $this->traceApp;
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

        if (isset($map['TraceApp'])) {
            $model->traceApp = traceApp::fromMap($map['TraceApp']);
        }

        return $model;
    }
}
