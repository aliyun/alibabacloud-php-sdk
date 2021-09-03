<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Codeup\V20200414\Models\GetOrganizationRepositorySettingResponseBody\result;

use AlibabaCloud\Tea\Model;

class orgCloneDownloadRoleList extends Model
{
    /**
     * @description 角色Code。5：企业外部成员；9999：企业成员（含管理员）
     *
     * @var int
     */
    public $roleCode;

    /**
     * @description 是否允许
     *
     * @var bool
     */
    public $allowed;
    protected $_name = [
        'roleCode' => 'RoleCode',
        'allowed'  => 'Allowed',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->roleCode) {
            $res['RoleCode'] = $this->roleCode;
        }
        if (null !== $this->allowed) {
            $res['Allowed'] = $this->allowed;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return orgCloneDownloadRoleList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RoleCode'])) {
            $model->roleCode = $map['RoleCode'];
        }
        if (isset($map['Allowed'])) {
            $model->allowed = $map['Allowed'];
        }

        return $model;
    }
}
