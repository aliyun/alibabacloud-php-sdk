<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dysmsapi\V20180501\Models;

use AlibabaCloud\Tea\Model;

class BatchSendMessageToGlobeResponseBody extends Model
{
    /**
     * @description The list of mobile phone numbers that failed to receive the message.
     *
     * @example ["931520581****","931530581****"]
     *
     * @var string
     */
    public $failedList;

    /**
     * @description The sender ID returned.
     *
     * @example Alicloud321
     *
     * @var string
     */
    public $from;

    /**
     * @description The ID of the message.
     *
     * @example ["123****","124****"]
     *
     * @var string
     */
    public $messageIdList;

    /**
     * @description The ID of the request.
     *
     * @example F655A8D5-B967-440B-8683-DAD6FF8D28D3
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The status code. If OK is returned, the request is successful. For more information, see [Error codes](https://www.alibabacloud.com/help/zh/short-message-service/latest/error-codes).
     *
     * @example OK
     *
     * @var string
     */
    public $responseCode;

    /**
     * @description The description of the status code.
     *
     * @example The SMS Send Request was accepted
     *
     * @var string
     */
    public $responseDescription;

    /**
     * @description The number of mobile phone numbers that received the message.
     *
     * @example 2
     *
     * @var string
     */
    public $successCount;
    protected $_name = [
        'failedList'          => 'FailedList',
        'from'                => 'From',
        'messageIdList'       => 'MessageIdList',
        'requestId'           => 'RequestId',
        'responseCode'        => 'ResponseCode',
        'responseDescription' => 'ResponseDescription',
        'successCount'        => 'SuccessCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->failedList) {
            $res['FailedList'] = $this->failedList;
        }
        if (null !== $this->from) {
            $res['From'] = $this->from;
        }
        if (null !== $this->messageIdList) {
            $res['MessageIdList'] = $this->messageIdList;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->responseCode) {
            $res['ResponseCode'] = $this->responseCode;
        }
        if (null !== $this->responseDescription) {
            $res['ResponseDescription'] = $this->responseDescription;
        }
        if (null !== $this->successCount) {
            $res['SuccessCount'] = $this->successCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return BatchSendMessageToGlobeResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FailedList'])) {
            $model->failedList = $map['FailedList'];
        }
        if (isset($map['From'])) {
            $model->from = $map['From'];
        }
        if (isset($map['MessageIdList'])) {
            $model->messageIdList = $map['MessageIdList'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ResponseCode'])) {
            $model->responseCode = $map['ResponseCode'];
        }
        if (isset($map['ResponseDescription'])) {
            $model->responseDescription = $map['ResponseDescription'];
        }
        if (isset($map['SuccessCount'])) {
            $model->successCount = $map['SuccessCount'];
        }

        return $model;
    }
}
