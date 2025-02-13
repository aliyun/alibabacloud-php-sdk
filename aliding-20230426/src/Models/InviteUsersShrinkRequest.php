<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\Dara\Model;

class InviteUsersShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $inviteeListShrink;
    /**
     * @var string
     */
    public $tenantContextShrink;
    /**
     * @var string
     */
    public $conferenceId;
    /**
     * @var string
     */
    public $phoneInviteeListShrink;
    protected $_name = [
        'inviteeListShrink'      => 'InviteeList',
        'tenantContextShrink'    => 'TenantContext',
        'conferenceId'           => 'conferenceId',
        'phoneInviteeListShrink' => 'phoneInviteeList',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->inviteeListShrink) {
            $res['InviteeList'] = $this->inviteeListShrink;
        }

        if (null !== $this->tenantContextShrink) {
            $res['TenantContext'] = $this->tenantContextShrink;
        }

        if (null !== $this->conferenceId) {
            $res['conferenceId'] = $this->conferenceId;
        }

        if (null !== $this->phoneInviteeListShrink) {
            $res['phoneInviteeList'] = $this->phoneInviteeListShrink;
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
        if (isset($map['InviteeList'])) {
            $model->inviteeListShrink = $map['InviteeList'];
        }

        if (isset($map['TenantContext'])) {
            $model->tenantContextShrink = $map['TenantContext'];
        }

        if (isset($map['conferenceId'])) {
            $model->conferenceId = $map['conferenceId'];
        }

        if (isset($map['phoneInviteeList'])) {
            $model->phoneInviteeListShrink = $map['phoneInviteeList'];
        }

        return $model;
    }
}
