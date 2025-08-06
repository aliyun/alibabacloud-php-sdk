<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\Dara\Model;

class AddPermissionShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $dentryUuid;

    /**
     * @var string
     */
    public $membersShrink;

    /**
     * @var string
     */
    public $optionShrink;

    /**
     * @var string
     */
    public $roleId;

    /**
     * @var string
     */
    public $tenantContextShrink;
    protected $_name = [
        'dentryUuid' => 'DentryUuid',
        'membersShrink' => 'Members',
        'optionShrink' => 'Option',
        'roleId' => 'RoleId',
        'tenantContextShrink' => 'TenantContext',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dentryUuid) {
            $res['DentryUuid'] = $this->dentryUuid;
        }

        if (null !== $this->membersShrink) {
            $res['Members'] = $this->membersShrink;
        }

        if (null !== $this->optionShrink) {
            $res['Option'] = $this->optionShrink;
        }

        if (null !== $this->roleId) {
            $res['RoleId'] = $this->roleId;
        }

        if (null !== $this->tenantContextShrink) {
            $res['TenantContext'] = $this->tenantContextShrink;
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
        if (isset($map['DentryUuid'])) {
            $model->dentryUuid = $map['DentryUuid'];
        }

        if (isset($map['Members'])) {
            $model->membersShrink = $map['Members'];
        }

        if (isset($map['Option'])) {
            $model->optionShrink = $map['Option'];
        }

        if (isset($map['RoleId'])) {
            $model->roleId = $map['RoleId'];
        }

        if (isset($map['TenantContext'])) {
            $model->tenantContextShrink = $map['TenantContext'];
        }

        return $model;
    }
}
