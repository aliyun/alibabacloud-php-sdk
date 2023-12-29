<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dypnsapi\V20170525\Models;

use AlibabaCloud\SDK\Dypnsapi\V20170525\Models\CreateVerifySchemeResponseBody\gateVerifySchemeDTO;
use AlibabaCloud\Tea\Model;

class CreateVerifySchemeResponseBody extends Model
{
    /**
     * @description The response code.
     *
     *   If OK is returned, the request is successful.
     *   For more information about other error codes, see [API response codes](~~85198~~).
     *
     * @example OK
     *
     * @var string
     */
    public $code;

    /**
     * @description The response parameters.
     *
     * @var gateVerifySchemeDTO
     */
    public $gateVerifySchemeDTO;

    /**
     * @description The HTTP status code.
     *
     * @example 200
     *
     * @var int
     */
    public $httpStatusCode;

    /**
     * @description The returned message.
     *
     * @example OK
     *
     * @var string
     */
    public $message;

    /**
     * @description The request ID.
     *
     * @example A1E75E69-3049-5FDB-A376-D745837CD2B1
     *
     * @var string
     */
    public $requestId;

    /**
     * @description Indicates whether the request is successful. Valid values:
     *
     *   **true**
     *   **false**
     *
     * @example true
     *
     * @var bool
     */
    public $success;
    protected $_name = [
        'code'                => 'Code',
        'gateVerifySchemeDTO' => 'GateVerifySchemeDTO',
        'httpStatusCode'      => 'HttpStatusCode',
        'message'             => 'Message',
        'requestId'           => 'RequestId',
        'success'             => 'Success',
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
        if (null !== $this->gateVerifySchemeDTO) {
            $res['GateVerifySchemeDTO'] = null !== $this->gateVerifySchemeDTO ? $this->gateVerifySchemeDTO->toMap() : null;
        }
        if (null !== $this->httpStatusCode) {
            $res['HttpStatusCode'] = $this->httpStatusCode;
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
     * @return CreateVerifySchemeResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['GateVerifySchemeDTO'])) {
            $model->gateVerifySchemeDTO = gateVerifySchemeDTO::fromMap($map['GateVerifySchemeDTO']);
        }
        if (isset($map['HttpStatusCode'])) {
            $model->httpStatusCode = $map['HttpStatusCode'];
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
