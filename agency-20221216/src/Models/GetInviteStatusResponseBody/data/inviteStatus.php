<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Agency\V20221216\Models\GetInviteStatusResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Agency\V20221216\Models\GetInviteStatusResponseBody\data\inviteStatus\inviteStatusList;

class inviteStatus extends Model
{
    /**
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
     * @var bool
     */
    public $success;
    protected $_name = [
        'code' => 'Code',
        'inviteStatusList' => 'InviteStatusList',
        'message' => 'Message',
        'success' => 'Success',
    ];

    public function validate()
    {
        if (null !== $this->inviteStatusList) {
            $this->inviteStatusList->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }

        if (null !== $this->inviteStatusList) {
            $res['InviteStatusList'] = null !== $this->inviteStatusList ? $this->inviteStatusList->toArray($noStream) : $this->inviteStatusList;
        }

        if (null !== $this->message) {
            $res['Message'] = $this->message;
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
