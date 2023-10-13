<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Agency\V20221216\Models\GetInviteStatusResponseBody\data;

use AlibabaCloud\SDK\Agency\V20221216\Models\GetInviteStatusResponseBody\data\inviteStatus\inviteStatusList;
use AlibabaCloud\Tea\Model;

class inviteStatus extends Model
{
    /**
     * @example 200
     *
     * @var string
     */
    public $code;

    /**
     * @var inviteStatusList
     */
    public $inviteStatusList;

    /**
     * @var string
     */
    public $message;

    /**
     * @example true
     *
     * @var bool
     */
    public $success;
    protected $_name = [
        'code'             => 'Code',
        'inviteStatusList' => 'InviteStatusList',
        'message'          => 'Message',
        'success'          => 'Success',
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
        if (null !== $this->inviteStatusList) {
            $res['InviteStatusList'] = null !== $this->inviteStatusList ? $this->inviteStatusList->toMap() : null;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return inviteStatus
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['InviteStatusList'])) {
            $model->inviteStatusList = inviteStatusList::fromMap($map['InviteStatusList']);
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}
