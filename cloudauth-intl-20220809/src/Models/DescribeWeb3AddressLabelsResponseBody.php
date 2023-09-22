<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudauthintl\V20220809\Models;

use AlibabaCloud\SDK\Cloudauthintl\V20220809\Models\DescribeWeb3AddressLabelsResponseBody\data;
use AlibabaCloud\Tea\Model;

class DescribeWeb3AddressLabelsResponseBody extends Model
{
    /**
     * @description Return code. For the full list of codes, see Codes and Messages.
     *
     * @example Success
     *
     * @var string
     */
    public $code;

    /**
     * @description data
     *
     * @var data
     */
    public $data;

    /**
     * @description The HTTP status code
     *
     * @example 200
     *
     * @var int
     */
    public $httpStatusCode;

    /**
     * @description Response detailed message.
     *
     * @example success
     *
     * @var string
     */
    public $message;

    /**
     * @description The unique ID of the request, which can be used to locate issues.
     *
     * @example 7F971622-38C0-5F56-B2EC-315367979B4F
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'code'           => 'Code',
        'data'           => 'Data',
        'httpStatusCode' => 'HttpStatusCode',
        'message'        => 'Message',
        'requestId'      => 'RequestId',
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeWeb3AddressLabelsResponseBody
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
        if (isset($map['HttpStatusCode'])) {
            $model->httpStatusCode = $map['HttpStatusCode'];
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
