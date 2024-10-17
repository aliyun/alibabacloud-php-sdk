<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Schedulerx2\V20190430\Models;

use AlibabaCloud\SDK\Schedulerx2\V20190430\Models\GetAppGroupResponseBody\accessDeniedDetail;
use AlibabaCloud\SDK\Schedulerx2\V20190430\Models\GetAppGroupResponseBody\data;
use AlibabaCloud\Tea\Model;

class GetAppGroupResponseBody extends Model
{
    /**
     * @var accessDeniedDetail
     */
    public $accessDeniedDetail;

    /**
     * @description The HTTP status code that is returned.
     *
     * @example 200
     *
     * @var int
     */
    public $code;

    /**
     * @description The information about the application group.
     *
     * @var data
     */
    public $data;

    /**
     * @description The additional information that is returned.
     *
     * @example app is not existed, groupId=xxxx, namesapce=xxxx
     *
     * @var string
     */
    public $message;

    /**
     * @description The ID of the request.
     *
     * @example 39090022-1F3B-4797-8518-6B61095F1AF0
     *
     * @var string
     */
    public $requestId;

    /**
     * @description Indicates whether the request was successful. Valid values:
     *
     * - **true**: The request was successful.
     * - **false**: The request failed.
     * @example true
     *
     * @var bool
     */
    public $success;
    protected $_name = [
        'accessDeniedDetail' => 'AccessDeniedDetail',
        'code'               => 'Code',
        'data'               => 'Data',
        'message'            => 'Message',
        'requestId'          => 'RequestId',
        'success'            => 'Success',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accessDeniedDetail) {
            $res['AccessDeniedDetail'] = null !== $this->accessDeniedDetail ? $this->accessDeniedDetail->toMap() : null;
        }
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
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetAppGroupResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccessDeniedDetail'])) {
            $model->accessDeniedDetail = accessDeniedDetail::fromMap($map['AccessDeniedDetail']);
        }
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
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}
