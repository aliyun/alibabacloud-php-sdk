<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MaxCompute\V20220104\Models;

use AlibabaCloud\Tea\Model;

class UpdateComputeQuotaPlanResponseBody extends Model
{
    /**
     * @description The data returned.
     *
     * @example success
     *
     * @var string
     */
    public $data;

    /**
     * @description The error code.
     *
     * @example QUOTA_PLAN_NOT_FOUND
     *
     * @var string
     */
    public $errorCode;

    /**
     * @description The error message.
     *
     * @example plan \\"***\\" does not exist
     *
     * @var string
     */
    public $errorMsg;

    /**
     * @description The HTTP status code.
     *
     * - 1xx: informational response. The request is received and is being processed.
     * - 2xx: success. The request is successfully received, understood, and accepted by the server.
     * - 3xx: redirection. The request is redirected, and further actions are required to complete the request.
     * - 4xx: client error. The request contains invalid request parameters or syntaxes, or specific request conditions cannot be met.
     * - 5xx: server error. The server cannot meet requirements due to other reasons.
     *
     * @example 200
     *
     * @var int
     */
    public $httpCode;

    /**
     * @description The request ID.
     *
     * @example 0be3e0aa16667684362147582e038f
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'data' => 'data',
        'errorCode' => 'errorCode',
        'errorMsg' => 'errorMsg',
        'httpCode' => 'httpCode',
        'requestId' => 'requestId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->data) {
            $res['data'] = $this->data;
        }
        if (null !== $this->errorCode) {
            $res['errorCode'] = $this->errorCode;
        }
        if (null !== $this->errorMsg) {
            $res['errorMsg'] = $this->errorMsg;
        }
        if (null !== $this->httpCode) {
            $res['httpCode'] = $this->httpCode;
        }
        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateComputeQuotaPlanResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['data'])) {
            $model->data = $map['data'];
        }
        if (isset($map['errorCode'])) {
            $model->errorCode = $map['errorCode'];
        }
        if (isset($map['errorMsg'])) {
            $model->errorMsg = $map['errorMsg'];
        }
        if (isset($map['httpCode'])) {
            $model->httpCode = $map['httpCode'];
        }
        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        return $model;
    }
}
