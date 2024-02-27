<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Agency\V20221216\Models\GetInviteStatusResponseBody\data;

use AlibabaCloud\SDK\Agency\V20221216\Models\GetInviteStatusResponseBody\data\inviteStatus\inviteStatusList;
use AlibabaCloud\Tea\Model;

class inviteStatus extends Model
{
    /**
     * @description Result Code. Value Range:
     *   200 OK
     *   1109 system error
     *
     * @example 200
     *
     * @var string
     */
    public $code;

    /**
     * @description List of Invitation Status result
     *
     * @var inviteStatusList
     */
    public $inviteStatusList;

    /**
     * @description The message returned.
     *
     * @example success
     *
     * @var string
     */
    public $message;

    /**
     * @description Candidate Value: True/False, which indicates whether the current API call itself is successful. It does not guarantee the success of subsequent business operations.
     *
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
