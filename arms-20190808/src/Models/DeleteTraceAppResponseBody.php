<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\Tea\Model;

class DeleteTraceAppResponseBody extends Model
{
    /**
     * @description The response in JSON format, including the HTTP status code, error code, response message, and trace ID.
     *
     * @example {\"code\":200,\"data\":\"{\\\"code\\\":200,\\\"data\\\":true,\\\"errorCode\\\":\\\"Application deleted.\\\",\\\"message\\\":\\\"Application deleted.\\\",\\\"success\\\":true,\\\"traceId\\\":\\\"0bc0594d15954826692915817e****\\\"}\",\"errorCode\":\"Application deleted.\",\"message\":\"Application deleted.\",\"success\":true,\"traceId\":\"0ab2646915954826692568137d****\"}
     *
     * @var string
     */
    public $data;

    /**
     * @description The ID of the request.
     *
     * @example 46355DD8-FC56-40C5-BFC6-269DE4F9****
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'data'      => 'Data',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->data) {
            $res['Data'] = $this->data;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteTraceAppResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Data'])) {
            $model->data = $map['Data'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
