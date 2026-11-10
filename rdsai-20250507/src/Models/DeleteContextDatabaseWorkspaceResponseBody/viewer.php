<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RdsAi\V20250507\Models\DeleteContextDatabaseWorkspaceResponseBody;

use AlibabaCloud\Dara\Model;

class viewer extends Model
{
    /**
     * @var string
     */
    public $boundMemberId;

    /**
     * @var string
     */
    public $boundMemberRole;

    /**
     * @var string
     */
    public $boundMemberStatus;

    /**
     * @var string
     */
    public $callerType;

    /**
     * @var string
     */
    public $identityMode;

    /**
     * @var string
     */
    public $selectedMemberId;
    protected $_name = [
        'boundMemberId' => 'BoundMemberId',
        'boundMemberRole' => 'BoundMemberRole',
        'boundMemberStatus' => 'BoundMemberStatus',
        'callerType' => 'CallerType',
        'identityMode' => 'IdentityMode',
        'selectedMemberId' => 'SelectedMemberId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->boundMemberId) {
            $res['BoundMemberId'] = $this->boundMemberId;
        }

        if (null !== $this->boundMemberRole) {
            $res['BoundMemberRole'] = $this->boundMemberRole;
        }

        if (null !== $this->boundMemberStatus) {
            $res['BoundMemberStatus'] = $this->boundMemberStatus;
        }

        if (null !== $this->callerType) {
            $res['CallerType'] = $this->callerType;
        }

        if (null !== $this->identityMode) {
            $res['IdentityMode'] = $this->identityMode;
        }

        if (null !== $this->selectedMemberId) {
            $res['SelectedMemberId'] = $this->selectedMemberId;
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
        if (isset($map['BoundMemberId'])) {
            $model->boundMemberId = $map['BoundMemberId'];
        }

        if (isset($map['BoundMemberRole'])) {
            $model->boundMemberRole = $map['BoundMemberRole'];
        }

        if (isset($map['BoundMemberStatus'])) {
            $model->boundMemberStatus = $map['BoundMemberStatus'];
        }

        if (isset($map['CallerType'])) {
            $model->callerType = $map['CallerType'];
        }

        if (isset($map['IdentityMode'])) {
            $model->identityMode = $map['IdentityMode'];
        }

        if (isset($map['SelectedMemberId'])) {
            $model->selectedMemberId = $map['SelectedMemberId'];
        }

        return $model;
    }
}
