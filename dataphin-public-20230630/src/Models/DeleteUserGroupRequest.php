<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models;

use AlibabaCloud\Tea\Model;

class DeleteUserGroupRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example 30001011
     *
     * @var int
     */
    public $opTenantId;

    /**
     * @description This parameter is required.
     *
     * @example 232131
     *
     * @var string
     */
    public $userGroupId;
    protected $_name = [
        'opTenantId' => 'OpTenantId',
        'userGroupId' => 'UserGroupId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->opTenantId) {
            $res['OpTenantId'] = $this->opTenantId;
        }
        if (null !== $this->userGroupId) {
            $res['UserGroupId'] = $this->userGroupId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteUserGroupRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OpTenantId'])) {
            $model->opTenantId = $map['OpTenantId'];
        }
        if (isset($map['UserGroupId'])) {
            $model->userGroupId = $map['UserGroupId'];
        }

        return $model;
    }
}
