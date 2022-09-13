<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pds\V20220301\Models\FileRemovePermissionRequest;

use AlibabaCloud\SDK\Pds\V20220301\Models\Identity;
use AlibabaCloud\Tea\Model;

class memberList extends Model
{
    /**
     * @var Identity
     */
    public $identity;

    /**
     * @var string
     */
    public $roleId;
    protected $_name = [
        'identity' => 'identity',
        'roleId'   => 'role_id',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->identity) {
            $res['identity'] = null !== $this->identity ? $this->identity->toMap() : null;
        }
        if (null !== $this->roleId) {
            $res['role_id'] = $this->roleId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return memberList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['identity'])) {
            $model->identity = Identity::fromMap($map['identity']);
        }
        if (isset($map['role_id'])) {
            $model->roleId = $map['role_id'];
        }

        return $model;
    }
}
