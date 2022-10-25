<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Codeup\V20200414\Models\GetOrganizationRepositorySettingResponseBody\result;

use AlibabaCloud\Tea\Model;

class orgCloneDownloadRoleList extends Model
{
    /**
     * @var bool
     */
    public $allowed;

    /**
     * @var int
     */
    public $roleCode;
    protected $_name = [
        'allowed'  => 'Allowed',
        'roleCode' => 'RoleCode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->allowed) {
            $res['Allowed'] = $this->allowed;
        }
        if (null !== $this->roleCode) {
            $res['RoleCode'] = $this->roleCode;
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
        if (isset($map['Allowed'])) {
            $model->allowed = $map['Allowed'];
        }
        if (isset($map['RoleCode'])) {
            $model->roleCode = $map['RoleCode'];
        }

        return $model;
    }
}
