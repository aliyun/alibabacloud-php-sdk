<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models;

use AlibabaCloud\Tea\Model;

class UpdateGatewayServiceTrafficPolicyResponseBody extends Model
{
    /**
     * @description The status code returned.
     *
     * @example 200
     *
     * @var int
     */
    public $code;

    /**
     * @description The details of the data.
     *
     * @example {\"GatewayUniqueId\": \"gw-2b8ebd75dc554c37a4279ba9917379f2\", \"Id\": 417, \"GatewayTrafficPolicy\": {\"LoadBalancerSettings\": {\"LoadbalancerType\": \"ROUND_ROBIN\"}, \"TlsSetting\": {\"TlsMode\": \"DISABLE\"}}}
     *
     * @var GatewayService
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
     * @description The message returned.
     *
     * @example The request was successfully processed.
     *
     * @var string
     */
    public $message;

    /**
     * @description The ID of the request.
     *
     * @example 11A61389-F896-5231-A4FB-074D9E2E0055
     *
     * @var string
     */
    public $requestId;

    /**
     * @description Indicates whether the request was successful.
     *
     *   **true**: The request was successful.
     *   **false**: The request failed.
     *
     * @example true
     *
     * @var bool
     */
    public $success;
    protected $_name = [
        'code'           => 'Code',
        'data'           => 'Data',
        'httpStatusCode' => 'HttpStatusCode',
        'message'        => 'Message',
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
            $res['Data'] = null !== $this->data ? $this->data->toMap() : null;
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
     * @return UpdateGatewayServiceTrafficPolicyResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Data'])) {
            $model->data = GatewayService::fromMap($map['Data']);
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
