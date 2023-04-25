<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alikafka\V20190916\Models;

use AlibabaCloud\SDK\Alikafka\V20190916\Models\GetQuotaTipResponseBody\quotaData;
use AlibabaCloud\Tea\Model;

class GetQuotaTipResponseBody extends Model
{
    /**
     * @description The HTTP status code returned. The HTTP status code 200 indicates that the request is successful.
     *
     * @example 200
     *
     * @var int
     */
    public $code;

    /**
     * @description The additional message. This message is typically used to describe API call failures for troubleshooting.
     *
     * @example operation success.
     *
     * @var string
     */
    public $message;

    /**
     * @description The quota.
     *
     * @var quotaData
     */
    public $quotaData;

    /**
     * @description The ID of the request.
     *
     * @example 0178A3A7-E87B-5E50-A16F-3E62F534****
     *
     * @var string
     */
    public $requestId;

    /**
     * @description Indicates whether the request is successful.
     *
     * @example True
     *
     * @var bool
     */
    public $success;
    protected $_name = [
        'code'      => 'Code',
        'message'   => 'Message',
        'quotaData' => 'QuotaData',
        'requestId' => 'RequestId',
        'success'   => 'Success',
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
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->quotaData) {
            $res['QuotaData'] = null !== $this->quotaData ? $this->quotaData->toMap() : null;
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
     * @return GetQuotaTipResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['QuotaData'])) {
            $model->quotaData = quotaData::fromMap($map['QuotaData']);
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
