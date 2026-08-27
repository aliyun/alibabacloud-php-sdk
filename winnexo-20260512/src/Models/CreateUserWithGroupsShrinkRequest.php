<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WinNexo\V20260512\Models;

use AlibabaCloud\Dara\Model;

class CreateUserWithGroupsShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $displayName;

    /**
     * @var string
     */
    public $passwordEncrypted;

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
    public $wnAccountId;
    protected $_name = [
        'displayName' => 'displayName',
        'passwordEncrypted' => 'passwordEncrypted',
        'roleCodesShrink' => 'roleCodes',
        'tenantId' => 'tenantId',
        'userGroupIdsShrink' => 'userGroupIds',
        'wnAccountId' => 'wnAccountId',
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

        if (null !== $this->passwordEncrypted) {
            $res['passwordEncrypted'] = $this->passwordEncrypted;
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

        if (null !== $this->wnAccountId) {
            $res['wnAccountId'] = $this->wnAccountId;
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

        if (isset($map['passwordEncrypted'])) {
            $model->passwordEncrypted = $map['passwordEncrypted'];
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

        if (isset($map['wnAccountId'])) {
            $model->wnAccountId = $map['wnAccountId'];
        }

        return $model;
    }
}
