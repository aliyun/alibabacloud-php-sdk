<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\SDK\Aliding\V20230426\Models\InviteUsersRequest\inviteeList;
use AlibabaCloud\SDK\Aliding\V20230426\Models\InviteUsersRequest\phoneInviteeList;
use AlibabaCloud\SDK\Aliding\V20230426\Models\InviteUsersRequest\tenantContext;
use AlibabaCloud\Tea\Model;

class InviteUsersRequest extends Model
{
    /**
     * @var inviteeList[]
     */
    public $inviteeList;

    /**
     * @var tenantContext
     */
    public $tenantContext;

    /**
     * @example 61289fxxx
     *
     * @var string
     */
    public $conferenceId;

    /**
     * @var phoneInviteeList[]
     */
    public $phoneInviteeList;
    protected $_name = [
        'inviteeList'      => 'InviteeList',
        'tenantContext'    => 'TenantContext',
        'conferenceId'     => 'conferenceId',
        'phoneInviteeList' => 'phoneInviteeList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->inviteeList) {
            $res['InviteeList'] = [];
            if (null !== $this->inviteeList && \is_array($this->inviteeList)) {
                $n = 0;
                foreach ($this->inviteeList as $item) {
                    $res['InviteeList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->tenantContext) {
            $res['TenantContext'] = null !== $this->tenantContext ? $this->tenantContext->toMap() : null;
        }
        if (null !== $this->conferenceId) {
            $res['conferenceId'] = $this->conferenceId;
        }
        if (null !== $this->phoneInviteeList) {
            $res['phoneInviteeList'] = [];
            if (null !== $this->phoneInviteeList && \is_array($this->phoneInviteeList)) {
                $n = 0;
                foreach ($this->phoneInviteeList as $item) {
                    $res['phoneInviteeList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return InviteUsersRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InviteeList'])) {
            if (!empty($map['InviteeList'])) {
                $model->inviteeList = [];
                $n                  = 0;
                foreach ($map['InviteeList'] as $item) {
                    $model->inviteeList[$n++] = null !== $item ? inviteeList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TenantContext'])) {
            $model->tenantContext = tenantContext::fromMap($map['TenantContext']);
        }
        if (isset($map['conferenceId'])) {
            $model->conferenceId = $map['conferenceId'];
        }
        if (isset($map['phoneInviteeList'])) {
            if (!empty($map['phoneInviteeList'])) {
                $model->phoneInviteeList = [];
                $n                       = 0;
                foreach ($map['phoneInviteeList'] as $item) {
                    $model->phoneInviteeList[$n++] = null !== $item ? phoneInviteeList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
