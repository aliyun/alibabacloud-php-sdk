<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dts\V20200101\Models;

use AlibabaCloud\SDK\Dts\V20200101\Models\DescribeSubscriptionMetaResponseBody\subscriptionMetaList;
use AlibabaCloud\Tea\Model;

class DescribeSubscriptionMetaResponseBody extends Model
{
    /**
     * @description The error code returned if the request failed.
     *
     * @example InternalError
     *
     * @var string
     */
    public $errCode;

    /**
     * @description The error message returned if the request failed.
     *
     * @example The Value of Input Parameter %s is not valid.
     *
     * @var string
     */
    public $errMessage;

    /**
     * @description The HTTP status code.
     *
     * @example 200
     *
     * @var string
     */
    public $httpStatusCode;

    /**
     * @description The ID of the request.
     *
     * @example C12E7A51-09A4-5796-94BE-08B6DA******
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The details of the subtasks.
     *
     * @var subscriptionMetaList[]
     */
    public $subscriptionMetaList;

    /**
     * @description Indicates whether the request was successful.
     *
     * @example true
     *
     * @var string
     */
    public $success;
    protected $_name = [
        'errCode'              => 'ErrCode',
        'errMessage'           => 'ErrMessage',
        'httpStatusCode'       => 'HttpStatusCode',
        'requestId'            => 'RequestId',
        'subscriptionMetaList' => 'SubscriptionMetaList',
        'success'              => 'Success',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->errCode) {
            $res['ErrCode'] = $this->errCode;
        }
        if (null !== $this->errMessage) {
            $res['ErrMessage'] = $this->errMessage;
        }
        if (null !== $this->httpStatusCode) {
            $res['HttpStatusCode'] = $this->httpStatusCode;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->subscriptionMetaList) {
            $res['SubscriptionMetaList'] = [];
            if (null !== $this->subscriptionMetaList && \is_array($this->subscriptionMetaList)) {
                $n = 0;
                foreach ($this->subscriptionMetaList as $item) {
                    $res['SubscriptionMetaList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeSubscriptionMetaResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ErrCode'])) {
            $model->errCode = $map['ErrCode'];
        }
        if (isset($map['ErrMessage'])) {
            $model->errMessage = $map['ErrMessage'];
        }
        if (isset($map['HttpStatusCode'])) {
            $model->httpStatusCode = $map['HttpStatusCode'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SubscriptionMetaList'])) {
            if (!empty($map['SubscriptionMetaList'])) {
                $model->subscriptionMetaList = [];
                $n                           = 0;
                foreach ($map['SubscriptionMetaList'] as $item) {
                    $model->subscriptionMetaList[$n++] = null !== $item ? subscriptionMetaList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}
