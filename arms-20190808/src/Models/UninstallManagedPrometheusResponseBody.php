<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\Tea\Model;

class UninstallManagedPrometheusResponseBody extends Model
{
    /**
     * @description The status code. The status code 200 indicates that the request was successful. If another status code is returned, the request failed.
     *
     * @example 200
     *
     * @var int
     */
    public $code;

    /**
     * @description The response content. The status of the Prometheus instance is returned.
     *
     * @example success
     *
     * @var string
     */
    public $data;

    /**
     * @description The error message that is returned if the request fails.
     *
     * @example vpcId is blank
     *
     * @var string
     */
    public $message;

    /**
     * @description The request ID.
     *
     * @example 2A0CEDF1-06FE-44AC-8E21-21A5BE65****
     *
     * @var string
     */
    public $requestId;

    /**
     * @description Indicates whether the Prometheus instance was removed.
     *
     * @example true
     *
     * @var bool
     */
    public $success;
    protected $_name = [
        'code' => 'Code',
        'data' => 'Data',
        'message' => 'Message',
        'requestId' => 'RequestId',
        'success' => 'Success',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->data) {
            $res['Data'] = $this->data;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UninstallManagedPrometheusResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Data'])) {
            $model->data = $map['Data'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}
