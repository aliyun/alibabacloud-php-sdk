<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Agency\V20221216\Models\GetUnassociatedCustomerResponseBody\inviteInfoList;

use AlibabaCloud\Tea\Model;

class inviteInfo extends Model
{
    /**
     * @description The name of Customer who are to be invited.
     *
     * @example My Client
     *
     * @var string
     */
    public $accountNickname;

    /**
     * @description The Email of Customer who are to be invited.
     *
     * @example 12345@qq.com
     *
     * @var string
     */
    public $email;

    /**
     * @description The time of email been sent out.
     *
     * @example 2023-05-10
     *
     * @var string
     */
    public $gmtCreate;

    /**
     * @description Invitation ID
     *
     * @example 190
     *
     * @var int
     */
    public $inviteId;

    /**
     * @description Invitation Status:
     * 0 No visit on registration URL
     * 1 Successful Registration
     * 2 Unsuccessful Registration
     * 3 Registration URL have been visited, but no submitted sheet/ticket.
     *
     * @example 1
     *
     * @var int
     */
    public $status;
    protected $_name = [
        'accountNickname' => 'AccountNickname',
        'email'           => 'Email',
        'gmtCreate'       => 'GmtCreate',
        'inviteId'        => 'InviteId',
        'status'          => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accountNickname) {
            $res['AccountNickname'] = $this->accountNickname;
        }
        if (null !== $this->email) {
            $res['Email'] = $this->email;
        }
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->inviteId) {
            $res['InviteId'] = $this->inviteId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return inviteInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccountNickname'])) {
            $model->accountNickname = $map['AccountNickname'];
        }
        if (isset($map['Email'])) {
            $model->email = $map['Email'];
        }
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['InviteId'])) {
            $model->inviteId = $map['InviteId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
