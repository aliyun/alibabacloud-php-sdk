<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Codeup\V20200414\Models\GetOrganizationRepositorySettingResponseBody\result;

use AlibabaCloud\Tea\Model;

class orgCloneDownloadMethodList extends Model
{
    /**
     * @description 权限码。ssh-clone：SSH克隆；http-clone：HTTP克隆；download：下载ZIP/TAR
     *
     * @var string
     */
    public $permissionCode;

    /**
     * @description 是否允许
     *
     * @var bool
     */
    public $allowed;
    protected $_name = [
        'permissionCode' => 'PermissionCode',
        'allowed'        => 'Allowed',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->permissionCode) {
            $res['PermissionCode'] = $this->permissionCode;
        }
        if (null !== $this->allowed) {
            $res['Allowed'] = $this->allowed;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return orgCloneDownloadMethodList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PermissionCode'])) {
            $model->permissionCode = $map['PermissionCode'];
        }
        if (isset($map['Allowed'])) {
            $model->allowed = $map['Allowed'];
        }

        return $model;
    }
}
