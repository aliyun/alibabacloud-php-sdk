<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Tea\Model;

class ApprovePermissionApplyOrderResponseBody extends Model
{
    /**
     * @example true
     *
     * @var bool
     */
    public $approveSuccess;

    /**
     * @example 0bc1ec92159376****
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'approveSuccess' => 'ApproveSuccess',
        'requestId'      => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->approveSuccess) {
            $res['ApproveSuccess'] = $this->approveSuccess;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ApprovePermissionApplyOrderResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApproveSuccess'])) {
            $model->approveSuccess = $map['ApproveSuccess'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
