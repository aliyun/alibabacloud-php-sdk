<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models;

use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeAlertHistoryListResponseBody\alarmHistoryList;
use AlibabaCloud\Tea\Model;

class DescribeAlertHistoryListResponseBody extends Model
{
    /**
     * @description The details of historical alerts.
     *
     * @var alarmHistoryList
     */
    public $alarmHistoryList;

    /**
     * @description The status code.
     *
     * > The status code 200 indicates that the request was successful.
     * @example 200
     *
     * @var string
     */
    public $code;

    /**
     * @description The error message.
     *
     * @example The Request is not authorization.
     *
     * @var string
     */
    public $message;

    /**
     * @description The request ID.
     *
     * @example C3C69FBE-2262-541F-A409-C52F380BAE63
     *
     * @var string
     */
    public $requestId;

    /**
     * @description Indicates whether the request was successful. Valid values:
     *
     *   true
     *   false
     *
     * @example true
     *
     * @var bool
     */
    public $success;

    /**
     * @description The total number of entries returned.
     *
     * @example 2
     *
     * @var string
     */
    public $total;
    protected $_name = [
        'alarmHistoryList' => 'AlarmHistoryList',
        'code'             => 'Code',
        'message'          => 'Message',
        'requestId'        => 'RequestId',
        'success'          => 'Success',
        'total'            => 'Total',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->alarmHistoryList) {
            $res['AlarmHistoryList'] = null !== $this->alarmHistoryList ? $this->alarmHistoryList->toMap() : null;
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
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }
        if (null !== $this->total) {
            $res['Total'] = $this->total;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeAlertHistoryListResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AlarmHistoryList'])) {
            $model->alarmHistoryList = alarmHistoryList::fromMap($map['AlarmHistoryList']);
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
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }
        if (isset($map['Total'])) {
            $model->total = $map['Total'];
        }

        return $model;
    }
}
