<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Tea\Model;

class ApprovePermissionApplyOrderResponse extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var bool
     */
    public $approveSuccess;
    protected $_name = [
        'requestId'      => 'RequestId',
        'approveSuccess' => 'ApproveSuccess',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('approveSuccess', $this->approveSuccess, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->approveSuccess) {
            $res['ApproveSuccess'] = $this->approveSuccess;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ApprovePermissionApplyOrderResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ApproveSuccess'])) {
            $model->approveSuccess = $map['ApproveSuccess'];
        }

        return $model;
    }
}
