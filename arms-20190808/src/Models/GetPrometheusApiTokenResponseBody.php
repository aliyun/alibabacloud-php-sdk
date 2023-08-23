<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\Tea\Model;

class GetPrometheusApiTokenResponseBody extends Model
{
    /**
     * @description The request ID.
     *
     * @example 1A9C645C-C83F-4C9D-8CCB-29BEC9E1****
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The token required for integrating Prometheus Service.
     *
     * @example 6dcbb77ef4ba6ef5466b5debf9e2****
     *
     * @var string
     */
    public $token;
    protected $_name = [
        'requestId' => 'RequestId',
        'token'     => 'Token',
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
        if (null !== $this->token) {
            $res['Token'] = $this->token;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetPrometheusApiTokenResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Token'])) {
            $model->token = $map['Token'];
        }

        return $model;
    }
}
