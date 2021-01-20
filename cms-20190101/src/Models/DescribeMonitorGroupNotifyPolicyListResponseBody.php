<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models;

use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeMonitorGroupNotifyPolicyListResponseBody\notifyPolicyList;
use AlibabaCloud\Tea\Model;

class DescribeMonitorGroupNotifyPolicyListResponseBody extends Model
{
    /**
     * @var notifyPolicyList
     */
    public $notifyPolicyList;

    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $total;

    /**
     * @var string
     */
    public $code;

    /**
     * @var string
     */
    public $success;
    protected $_name = [
        'notifyPolicyList' => 'NotifyPolicyList',
        'message'          => 'Message',
        'requestId'        => 'RequestId',
        'total'            => 'Total',
        'code'             => 'Code',
        'success'          => 'Success',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->notifyPolicyList) {
            $res['NotifyPolicyList'] = null !== $this->notifyPolicyList ? $this->notifyPolicyList->toMap() : null;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->total) {
            $res['Total'] = $this->total;
        }
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
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
        if (isset($map['NotifyPolicyList'])) {
            $model->notifyPolicyList = notifyPolicyList::fromMap($map['NotifyPolicyList']);
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Total'])) {
            $model->total = $map['Total'];
        }
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}
