<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models;

use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeMonitorGroupNotifyPolicyListResponseBody\notifyPolicyList;
use AlibabaCloud\Tea\Model;

class DescribeMonitorGroupNotifyPolicyListResponseBody extends Model
{
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
     * @description The returned policies.
     *
     * @var notifyPolicyList
     */
    public $notifyPolicyList;

    /**
     * @description The request ID.
     *
     * @example 6072F026-C441-41A6-B114-35A1E8F8FDD3
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
     * @var string
     */
    public $success;

    /**
     * @description The total number of entries returned.
     *
     * @example 11
     *
     * @var int
     */
    public $total;
    protected $_name = [
        'code'             => 'Code',
        'message'          => 'Message',
        'notifyPolicyList' => 'NotifyPolicyList',
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
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->notifyPolicyList) {
            $res['NotifyPolicyList'] = null !== $this->notifyPolicyList ? $this->notifyPolicyList->toMap() : null;
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
     * @return DescribeMonitorGroupNotifyPolicyListResponseBody
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
        if (isset($map['NotifyPolicyList'])) {
            $model->notifyPolicyList = notifyPolicyList::fromMap($map['NotifyPolicyList']);
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
