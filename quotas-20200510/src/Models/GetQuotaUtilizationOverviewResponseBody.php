<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quotas\V20200510\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Quotas\V20200510\Models\GetQuotaUtilizationOverviewResponseBody\quotaOverview;

class GetQuotaUtilizationOverviewResponseBody extends Model
{
    /**
     * @var string
     */
    public $errorCode;

    /**
     * @var string
     */
    public $errorMsg;

    /**
     * @var string
     */
    public $generatedAt;

    /**
     * @var string
     */
    public $message;

    /**
     * @var quotaOverview
     */
    public $quotaOverview;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $status;

    /**
     * @var bool
     */
    public $success;
    protected $_name = [
        'errorCode' => 'ErrorCode',
        'errorMsg' => 'ErrorMsg',
        'generatedAt' => 'GeneratedAt',
        'message' => 'Message',
        'quotaOverview' => 'QuotaOverview',
        'requestId' => 'RequestId',
        'status' => 'Status',
        'success' => 'Success',
    ];

    public function validate()
    {
        if (null !== $this->quotaOverview) {
            $this->quotaOverview->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->errorCode) {
            $res['ErrorCode'] = $this->errorCode;
        }

        if (null !== $this->errorMsg) {
            $res['ErrorMsg'] = $this->errorMsg;
        }

        if (null !== $this->generatedAt) {
            $res['GeneratedAt'] = $this->generatedAt;
        }

        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }

        if (null !== $this->quotaOverview) {
            $res['QuotaOverview'] = null !== $this->quotaOverview ? $this->quotaOverview->toArray($noStream) : $this->quotaOverview;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ErrorCode'])) {
            $model->errorCode = $map['ErrorCode'];
        }

        if (isset($map['ErrorMsg'])) {
            $model->errorMsg = $map['ErrorMsg'];
        }

        if (isset($map['GeneratedAt'])) {
            $model->generatedAt = $map['GeneratedAt'];
        }

        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }

        if (isset($map['QuotaOverview'])) {
            $model->quotaOverview = quotaOverview::fromMap($map['QuotaOverview']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}
