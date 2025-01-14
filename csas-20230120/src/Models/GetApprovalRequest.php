<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models;

use AlibabaCloud\Tea\Model;

class GetApprovalRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example approval-872b5e911b35****
     *
     * @var string
     */
    public $approvalId;
    protected $_name = [
        'approvalId' => 'ApprovalId',
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetApprovalRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApprovalId'])) {
            $model->approvalId = $map['ApprovalId'];
        }

        return $model;
    }
}
