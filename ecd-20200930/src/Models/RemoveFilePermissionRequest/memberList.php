<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models\RemoveFilePermissionRequest;

use AlibabaCloud\SDK\Ecd\V20200930\Models\RemoveFilePermissionRequest\memberList\cdsIdentity;
use AlibabaCloud\Tea\Model;

class memberList extends Model
{
    /**
     * @var cdsIdentity
     */
    public $cdsIdentity;

    /**
     * @example SystemFileUploaderAndDownloader
     *
     * @var string
     */
    public $roleId;
    protected $_name = [
        'cdsIdentity' => 'CdsIdentity',
        'roleId'      => 'RoleId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cdsIdentity) {
            $res['CdsIdentity'] = null !== $this->cdsIdentity ? $this->cdsIdentity->toMap() : null;
        }
        if (null !== $this->roleId) {
            $res['RoleId'] = $this->roleId;
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
        if (isset($map['CdsIdentity'])) {
            $model->cdsIdentity = cdsIdentity::fromMap($map['CdsIdentity']);
        }
        if (isset($map['RoleId'])) {
            $model->roleId = $map['RoleId'];
        }

        return $model;
    }
}
