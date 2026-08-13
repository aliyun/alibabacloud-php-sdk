<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WinNexo\V20260512\Models;

use AlibabaCloud\Dara\Model;

class UpdateUserShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $displayName;

    /**
     * @var bool
     */
    public $isActive;

    /**
     * @var string
     */
    public $roleCodesShrink;

    /**
     * @var string
     */
    public $tenantId;

    /**
     * @var string
     */
    public $userGroupIdsShrink;

    /**
     * @var string
     */
    public $wnUserId;
    protected $_name = [
        'displayName' => 'displayName',
        'isActive' => 'isActive',
        'roleCodesShrink' => 'roleCodes',
        'tenantId' => 'tenantId',
        'userGroupIdsShrink' => 'userGroupIds',
        'wnUserId' => 'wnUserId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->displayName) {
            $res['displayName'] = $this->displayName;
        }

        if (null !== $this->isActive) {
            $res['isActive'] = $this->isActive;
        }

        if (null !== $this->roleCodesShrink) {
            $res['roleCodes'] = $this->roleCodesShrink;
        }

        if (null !== $this->tenantId) {
            $res['tenantId'] = $this->tenantId;
        }

        if (null !== $this->userGroupIdsShrink) {
            $res['userGroupIds'] = $this->userGroupIdsShrink;
        }

        if (null !== $this->wnUserId) {
            $res['wnUserId'] = $this->wnUserId;
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
        if (isset($map['displayName'])) {
            $model->displayName = $map['displayName'];
        }

        if (isset($map['isActive'])) {
            $model->isActive = $map['isActive'];
        }

        if (isset($map['roleCodes'])) {
            $model->roleCodesShrink = $map['roleCodes'];
        }

        if (isset($map['tenantId'])) {
            $model->tenantId = $map['tenantId'];
        }

        if (isset($map['userGroupIds'])) {
            $model->userGroupIdsShrink = $map['userGroupIds'];
        }

        if (isset($map['wnUserId'])) {
            $model->wnUserId = $map['wnUserId'];
        }

        return $model;
    }
}
