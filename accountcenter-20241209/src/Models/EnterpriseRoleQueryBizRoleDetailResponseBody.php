<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AccountCenter\V20241209\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AccountCenter\V20241209\Models\EnterpriseRoleQueryBizRoleDetailResponseBody\bizRoleDetail;

class EnterpriseRoleQueryBizRoleDetailResponseBody extends Model
{
    /**
     * @var bizRoleDetail
     */
    public $bizRoleDetail;

    /**
     * @var string
     */
    public $code;

    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var bool
     */
    public $success;
    protected $_name = [
        'bizRoleDetail' => 'BizRoleDetail',
        'code' => 'Code',
        'message' => 'Message',
        'requestId' => 'RequestId',
        'success' => 'Success',
    ];

    public function validate()
    {
        if (null !== $this->bizRoleDetail) {
            $this->bizRoleDetail->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bizRoleDetail) {
            $res['BizRoleDetail'] = null !== $this->bizRoleDetail ? $this->bizRoleDetail->toArray($noStream) : $this->bizRoleDetail;
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

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BizRoleDetail'])) {
            $model->bizRoleDetail = bizRoleDetail::fromMap($map['BizRoleDetail']);
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

        return $model;
    }
}
