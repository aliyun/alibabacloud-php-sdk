<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\Tea\Model;

class BindPrometheusGrafanaInstanceResponseBody extends Model
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
     * @description Indicates whether the request was successful.
     *
     *   true
     *   false
     *
     * @example true
     *
     * @var bool
     */
    public $data;

    /**
     * @description The message returned.
     *
     * @example message
     *
     * @var string
     */
    public $message;

    /**
     * @description Id of the request
     *
     * @example 27E653FA-5958-45BE-8AA9-14D884DC****
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
     * @return BindPrometheusGrafanaInstanceResponseBody
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
