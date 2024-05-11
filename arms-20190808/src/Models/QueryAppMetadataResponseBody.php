<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\Tea\Model;

class QueryAppMetadataResponseBody extends Model
{
    /**
     * @description The HTTP status code returned for the request. Valid values:
     *
     *   2XX: The request is successful.
     *   3XX: A redirection message is returned.
     *   4XX: The request is invalid.
     *   5XX: A server error occurs.
     *
     * @example 200
     *
     * @var int
     */
    public $code;

    /**
     * @description The returned struct.
     *
     * @example {\\"408d5533\\": \\"SELECT * FROM user_base_info\\"}
     *
     * @var mixed[]
     */
    public $data;

    /**
     * @description The HTTP status code returned.
     *
     * @example 200
     *
     * @var int
     */
    public $httpStatusCode;

    /**
     * @description The ID of the request.
     *
     * @example 51877BAC-330C-5845-BDFD-C7859AD33FB7
     *
     * @var string
     */
    public $requestId;

    /**
     * @description Indicates whether the call was successful. Valid values:
     *
     *   `true`: The call was successful.
     *   `false`: The call failed.
     *
     * @example True
     *
     * @var bool
     */
    public $success;
    protected $_name = [
        'code'           => 'Code',
        'data'           => 'Data',
        'httpStatusCode' => 'HttpStatusCode',
        'requestId'      => 'RequestId',
        'success'        => 'Success',
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
        if (null !== $this->httpStatusCode) {
            $res['HttpStatusCode'] = $this->httpStatusCode;
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
     * @return QueryAppMetadataResponseBody
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
        if (isset($map['HttpStatusCode'])) {
            $model->httpStatusCode = $map['HttpStatusCode'];
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
