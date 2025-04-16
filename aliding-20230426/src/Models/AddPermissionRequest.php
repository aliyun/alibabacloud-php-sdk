<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Aliding\V20230426\Models\AddPermissionRequest\members;
use AlibabaCloud\SDK\Aliding\V20230426\Models\AddPermissionRequest\option;
use AlibabaCloud\SDK\Aliding\V20230426\Models\AddPermissionRequest\tenantContext;

class AddPermissionRequest extends Model
{
    /**
     * @var string
     */
    public $dentryUuid;

    /**
     * @var members[]
     */
    public $members;

    /**
     * @var option
     */
    public $option;

    /**
     * @var string
     */
    public $roleId;

    /**
     * @var tenantContext
     */
    public $tenantContext;
    protected $_name = [
        'dentryUuid' => 'DentryUuid',
        'members' => 'Members',
        'option' => 'Option',
        'roleId' => 'RoleId',
        'tenantContext' => 'TenantContext',
    ];

    public function validate()
    {
        if (\is_array($this->members)) {
            Model::validateArray($this->members);
        }
        if (null !== $this->option) {
            $this->option->validate();
        }
        if (null !== $this->tenantContext) {
            $this->tenantContext->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dentryUuid) {
            $res['DentryUuid'] = $this->dentryUuid;
        }

        if (null !== $this->members) {
            if (\is_array($this->members)) {
                $res['Members'] = [];
                $n1 = 0;
                foreach ($this->members as $item1) {
                    $res['Members'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->option) {
            $res['Option'] = null !== $this->option ? $this->option->toArray($noStream) : $this->option;
        }

        if (null !== $this->roleId) {
            $res['RoleId'] = $this->roleId;
        }

        if (null !== $this->tenantContext) {
            $res['TenantContext'] = null !== $this->tenantContext ? $this->tenantContext->toArray($noStream) : $this->tenantContext;
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
            if (!empty($map['Members'])) {
                $model->members = [];
                $n1 = 0;
                foreach ($map['Members'] as $item1) {
                    $model->members[$n1++] = members::fromMap($item1);
                }
            }
        }

        if (isset($map['Option'])) {
            $model->option = option::fromMap($map['Option']);
        }

        if (isset($map['RoleId'])) {
            $model->roleId = $map['RoleId'];
        }

        if (isset($map['TenantContext'])) {
            $model->tenantContext = tenantContext::fromMap($map['TenantContext']);
        }

        return $model;
    }
}
