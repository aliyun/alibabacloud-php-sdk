<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Dara\Model;

class ApprovePermissionApplyOrderResponseBody extends Model
{
    /**
     * @var bool
     */
    public $approveSuccess;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'approveSuccess' => 'ApproveSuccess',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
