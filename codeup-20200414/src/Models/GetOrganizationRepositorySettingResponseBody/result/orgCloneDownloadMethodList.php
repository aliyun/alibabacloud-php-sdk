<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Codeup\V20200414\Models\GetOrganizationRepositorySettingResponseBody\result;

use AlibabaCloud\Tea\Model;

class orgCloneDownloadMethodList extends Model
{
    /**
     * @var bool
     */
    public $allowed;

    /**
     * @var string
     */
    public $permissionCode;
    protected $_name = [
        'allowed'        => 'Allowed',
        'permissionCode' => 'PermissionCode',
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
        if (null !== $this->permissionCode) {
            $res['PermissionCode'] = $this->permissionCode;
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
        if (isset($map['Allowed'])) {
            $model->allowed = $map['Allowed'];
        }
        if (isset($map['PermissionCode'])) {
            $model->permissionCode = $map['PermissionCode'];
        }

        return $model;
    }
}
