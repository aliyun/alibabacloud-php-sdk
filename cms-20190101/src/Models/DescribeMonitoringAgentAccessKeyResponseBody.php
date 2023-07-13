<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models;

use AlibabaCloud\Tea\Model;

class DescribeMonitoringAgentAccessKeyResponseBody extends Model
{
    /**
     * @description The AccessKey ID that is required to install the agent.
     *
     * @example E7A27f9****
     *
     * @var string
     */
    public $accessKey;

    /**
     * @example 200
     *
     * @var int
     */
    public $code;

    /**
     * @example The specified resource is not found.
     *
     * @var string
     */
    public $message;

    /**
     * @description The ID of the request.
     *
     * @example C0F655E9-D793-51E6-BD78-CABBCCFC1047
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The HTTP status code.
     *
     * >  The status code 200 indicates that the call was successful.
     * @example sBjNOUhLylrxMX-Xv1****
     *
     * @var string
     */
    public $secretKey;

    /**
     * @description The operation that you want to perform. Set the value to **DescribeMonitoringAgentAccessKey**.
     *
     * @example true
     *
     * @var bool
     */
    public $success;
    protected $_name = [
        'accessKey' => 'AccessKey',
        'code'      => 'Code',
        'message'   => 'Message',
        'requestId' => 'RequestId',
        'secretKey' => 'SecretKey',
        'success'   => 'Success',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accessKey) {
            $res['AccessKey'] = $this->accessKey;
        }
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->secretKey) {
            $res['SecretKey'] = $this->secretKey;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeMonitoringAgentAccessKeyResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccessKey'])) {
            $model->accessKey = $map['AccessKey'];
        }
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SecretKey'])) {
            $model->secretKey = $map['SecretKey'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}
