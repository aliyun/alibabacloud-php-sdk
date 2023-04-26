<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pds\V20220301\Models\FileRemovePermissionRequest;

use AlibabaCloud\SDK\Pds\V20220301\Models\Identity;
use AlibabaCloud\Tea\Model;

class memberList extends Model
{
    /**
     * @description 可授权对象，表示一个用户或者一个群组
     *
     * @var Identity
     */
    public $identity;

    /**
     * @description 目前支持两种方式设置权限，一种是通过指定角色设置权限，另一种是自定义操作权限，此字段用于指定角色设置权限，与action\_list互斥，当两个字段同时设置时，以此字段为准
     *
     * SystemFileViewer（预览者）
     * @example SystemFileDownloader
     *
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
