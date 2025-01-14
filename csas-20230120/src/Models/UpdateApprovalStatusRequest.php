<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models;

use AlibabaCloud\Tea\Model;

class UpdateApprovalStatusRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example approval-872b5e911b35****
     *
     * @var string
     */
    public $approvalId;

    /**
     * @description This parameter is required.
     *
     * @example Approved
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'approvalId' => 'ApprovalId',
        'status'     => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->approvalId) {
            $res['ApprovalId'] = $this->approvalId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateApprovalStatusRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApprovalId'])) {
            $model->approvalId = $map['ApprovalId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
