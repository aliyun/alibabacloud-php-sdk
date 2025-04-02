<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Aliding\V20230426\Models\InviteUsersRequest\inviteeList;
use AlibabaCloud\SDK\Aliding\V20230426\Models\InviteUsersRequest\phoneInviteeList;
use AlibabaCloud\SDK\Aliding\V20230426\Models\InviteUsersRequest\tenantContext;

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
     * @var string
     */
    public $conferenceId;

    /**
     * @var phoneInviteeList[]
     */
    public $phoneInviteeList;
    protected $_name = [
        'inviteeList' => 'InviteeList',
        'tenantContext' => 'TenantContext',
        'conferenceId' => 'conferenceId',
        'phoneInviteeList' => 'phoneInviteeList',
    ];

    public function validate()
    {
        if (\is_array($this->inviteeList)) {
            Model::validateArray($this->inviteeList);
        }
        if (null !== $this->tenantContext) {
            $this->tenantContext->validate();
        }
        if (\is_array($this->phoneInviteeList)) {
            Model::validateArray($this->phoneInviteeList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->inviteeList) {
            if (\is_array($this->inviteeList)) {
                $res['InviteeList'] = [];
                $n1 = 0;
                foreach ($this->inviteeList as $item1) {
                    $res['InviteeList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->tenantContext) {
            $res['TenantContext'] = null !== $this->tenantContext ? $this->tenantContext->toArray($noStream) : $this->tenantContext;
        }

        if (null !== $this->conferenceId) {
            $res['conferenceId'] = $this->conferenceId;
        }

        if (null !== $this->phoneInviteeList) {
            if (\is_array($this->phoneInviteeList)) {
                $res['phoneInviteeList'] = [];
                $n1 = 0;
                foreach ($this->phoneInviteeList as $item1) {
                    $res['phoneInviteeList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
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
            if (!empty($map['InviteeList'])) {
                $model->inviteeList = [];
                $n1 = 0;
                foreach ($map['InviteeList'] as $item1) {
                    $model->inviteeList[$n1++] = inviteeList::fromMap($item1);
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
                $n1 = 0;
                foreach ($map['phoneInviteeList'] as $item1) {
                    $model->phoneInviteeList[$n1++] = phoneInviteeList::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
