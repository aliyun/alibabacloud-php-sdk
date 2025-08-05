<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MaxCompute\V20220104\Models;

use AlibabaCloud\Tea\Model;

class UpdateComputeQuotaScheduleResponseBody extends Model
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
     * @description HTTP status code.
     * - 1xx: Informational - The request has been received and is being processed.
     * - 2xx: Success - The request action was successfully received, understood, and accepted by the server.
     * - 3xx: Redirection - Further action must be taken to complete the request.
     * - 4xx: Client Error - The request contains an error in the request parameters, syntax, or specific request conditions cannot be met.
     * - 5xx: Server Error - The server could not fulfill the request due to other reasons.
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
     * @return UpdateComputeQuotaScheduleResponseBody
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
