<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models\ListPermissionsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Aliding\V20230426\Models\ListPermissionsResponseBody\permissions\member;
use AlibabaCloud\SDK\Aliding\V20230426\Models\ListPermissionsResponseBody\permissions\role;

class permissions extends Model
{
    /**
     * @var string
     */
    public $dentryUuid;

    /**
     * @var member
     */
    public $member;

    /**
     * @var role
     */
    public $role;
    protected $_name = [
        'dentryUuid' => 'DentryUuid',
        'member' => 'Member',
        'role' => 'Role',
    ];

    public function validate()
    {
        if (null !== $this->member) {
            $this->member->validate();
        }
        if (null !== $this->role) {
            $this->role->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dentryUuid) {
            $res['DentryUuid'] = $this->dentryUuid;
        }

        if (null !== $this->member) {
            $res['Member'] = null !== $this->member ? $this->member->toArray($noStream) : $this->member;
        }

        if (null !== $this->role) {
            $res['Role'] = null !== $this->role ? $this->role->toArray($noStream) : $this->role;
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

        if (isset($map['Member'])) {
            $model->member = member::fromMap($map['Member']);
        }

        if (isset($map['Role'])) {
            $model->role = role::fromMap($map['Role']);
        }

        return $model;
    }
}
