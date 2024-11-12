<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dts\V20200101\Models;

use AlibabaCloud\Tea\Model;

class ModifyConsumerGroupPasswordResponseBody extends Model
{
    /**
     * @description The current password of the consumer group.
     *
     * @example InternalError
     *
     * @var string
     */
    public $errCode;

    /**
     * @description The ID of the Alibaba Cloud account. You do not need to specify this parameter because this parameter will be removed in the future.
     *
     * @example The request processing has failed due to some unknown error.
     *
     * @var string
     */
    public $errMessage;

    /**
     * @description The username of the consumer group. You can call the [DescribeConsumerGroup](https://help.aliyun.com/document_detail/122886.html) operation to query the username.
     *
     * @example A06B5CFF-9576-4BC1-BE62-A3D43E1F****
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The new password of the consumer group.
     *
     *   A password must contain two or more of the following characters: uppercase letters, lowercase letters, digits, and special characters.
     *   A password must be 8 to 32 characters in length.
     *
     * @example true
     *
     * @var string
     */
    public $success;
    protected $_name = [
        'errCode'    => 'ErrCode',
        'errMessage' => 'ErrMessage',
        'requestId'  => 'RequestId',
        'success'    => 'Success',
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
     * @return ModifyConsumerGroupPasswordResponseBody
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}
