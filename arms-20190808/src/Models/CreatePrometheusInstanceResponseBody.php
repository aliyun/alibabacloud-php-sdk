<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\Tea\Model;

class CreatePrometheusInstanceResponseBody extends Model
{
    /**
     * @description The status code that is returned. Valid values:
     *
     *   `2XX: The request is successful.`
     *   `3XX: A redirection message is returned.`
     *   `4XX: The request is invalid.`
     *   `5XX: A server error occurred.`
     *
     * @example 200
     *
     * @var int
     */
    public $code;

    /**
     * @description The ID of the created Prometheus instance.
     *
     * @example qduukd****
     *
     * @var string
     */
    public $data;

    /**
     * @description The error message that is returned if the request failed.
     *
     * @example message
     *
     * @var string
     */
    public $message;

    /**
     * @description The request ID.
     *
     * @example 70675725-8F11-4817-8106-CFE0AD71****
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'code'      => 'Code',
        'data'      => 'Data',
        'message'   => 'Message',
        'requestId' => 'RequestId',
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
        if (null !== $this->data) {
            $res['Data'] = $this->data;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreatePrometheusInstanceResponseBody
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

        return $model;
    }
}
