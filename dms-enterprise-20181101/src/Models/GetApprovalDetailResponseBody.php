<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetApprovalDetailResponseBody\approvalDetail;
use AlibabaCloud\Tea\Model;

class GetApprovalDetailResponseBody extends Model
{
    /**
     * @description The approval details of the ticket.
     *
     * @var approvalDetail
     */
    public $approvalDetail;

    /**
     * @description The error code returned if the request fails.
     *
     * @example MissingWorkflowInstanceId
     *
     * @var string
     */
    public $errorCode;

    /**
     * @description The error message returned if the request fails.
     *
     * @example WorkflowInstanceId is mandatory for this action.
     *
     * @var string
     */
    public $errorMessage;

    /**
     * @description The ID of the request.
     *
     * @example 66DE630B-ECA1-52A3-9198-602066F9****
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
        'approvalDetail' => 'ApprovalDetail',
        'errorCode'      => 'ErrorCode',
        'errorMessage'   => 'ErrorMessage',
        'requestId'      => 'RequestId',
        'success'        => 'Success',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->approvalDetail) {
            $res['ApprovalDetail'] = null !== $this->approvalDetail ? $this->approvalDetail->toMap() : null;
        }
        if (null !== $this->errorCode) {
            $res['ErrorCode'] = $this->errorCode;
        }
        if (null !== $this->errorMessage) {
            $res['ErrorMessage'] = $this->errorMessage;
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
     * @return GetApprovalDetailResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApprovalDetail'])) {
            $model->approvalDetail = approvalDetail::fromMap($map['ApprovalDetail']);
        }
        if (isset($map['ErrorCode'])) {
            $model->errorCode = $map['ErrorCode'];
        }
        if (isset($map['ErrorMessage'])) {
            $model->errorMessage = $map['ErrorMessage'];
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
