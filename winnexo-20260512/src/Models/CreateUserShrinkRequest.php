<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WinNexo\V20260512\Models;

use AlibabaCloud\Dara\Model;

class CreateUserShrinkRequest extends Model
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
    public $wnAccountId;
    protected $_name = [
        'displayName' => 'displayName',
        'passwordEncrypted' => 'passwordEncrypted',
        'roleCodesShrink' => 'roleCodes',
        'tenantId' => 'tenantId',
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

        if (isset($map['wnAccountId'])) {
            $model->wnAccountId = $map['wnAccountId'];
        }

        return $model;
    }
}
