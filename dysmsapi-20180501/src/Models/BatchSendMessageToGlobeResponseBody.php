<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dysmsapi\V20180501\Models;

use AlibabaCloud\Tea\Model;

class BatchSendMessageToGlobeResponseBody extends Model
{
    /**
     * @var string
     */
    public $failedList;

    /**
     * @var string
     */
    public $from;

    /**
     * @var string
     */
    public $messageIdList;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $responseCode;

    /**
     * @var string
     */
    public $responseDescription;

    /**
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
