<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models\ListPermissionsResponseBody;

use AlibabaCloud\SDK\Aliding\V20230426\Models\ListPermissionsResponseBody\permissions\member;
use AlibabaCloud\SDK\Aliding\V20230426\Models\ListPermissionsResponseBody\permissions\role;
use AlibabaCloud\Tea\Model;

class permissions extends Model
{
    /**
     * @example 123456
     *
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

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->dentryUuid) {
            $res['DentryUuid'] = $this->dentryUuid;
        }
        if (null !== $this->member) {
            $res['Member'] = null !== $this->member ? $this->member->toMap() : null;
        }
        if (null !== $this->role) {
            $res['Role'] = null !== $this->role ? $this->role->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return permissions
     */
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
