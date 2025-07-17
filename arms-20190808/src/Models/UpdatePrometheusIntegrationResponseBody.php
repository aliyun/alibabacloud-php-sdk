<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\SDK\ARMS\V20190808\Models\UpdatePrometheusIntegrationResponseBody\data;
use AlibabaCloud\Tea\Model;

class UpdatePrometheusIntegrationResponseBody extends Model
{
    /**
     * @description The status code or error code.
     *
     * @example 200
     *
     * @var int
     */
    public $code;

    /**
     * @description The struct returned.
     *
     * @var data
     */
    public $data;

    /**
     * @description The message returned.
     *
     * @example Successful
     *
     * @var string
     */
    public $message;

    /**
     * @description Id of the request
     *
     * @example 2DB771C3-D1BB-5363-8A5F-ADB2AF2948DB
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'code' => 'Code',
        'data' => 'Data',
        'message' => 'Message',
        'requestId' => 'RequestId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->data) {
            $res['Data'] = null !== $this->data ? $this->data->toMap() : null;
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
     * @return UpdatePrometheusIntegrationResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Data'])) {
            $model->data = data::fromMap($map['Data']);
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
