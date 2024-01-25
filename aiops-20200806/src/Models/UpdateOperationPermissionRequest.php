<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiops\V20200806\Models;

use AlibabaCloud\Tea\Model;

class UpdateOperationPermissionRequest extends Model
{
    /**
     * @var int
     */
    public $permissionType;

    /**
     * @var string
     */
    public $switchFrontOperaUid;

    /**
     * @var int
     */
    public $uid;
    protected $_name = [
        'permissionType'      => 'PermissionType',
        'switchFrontOperaUid' => 'SwitchFrontOperaUid',
        'uid'                 => 'Uid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->permissionType) {
            $res['PermissionType'] = $this->permissionType;
        }
        if (null !== $this->switchFrontOperaUid) {
            $res['SwitchFrontOperaUid'] = $this->switchFrontOperaUid;
        }
        if (null !== $this->uid) {
            $res['Uid'] = $this->uid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateOperationPermissionRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PermissionType'])) {
            $model->permissionType = $map['PermissionType'];
        }
        if (isset($map['SwitchFrontOperaUid'])) {
            $model->switchFrontOperaUid = $map['SwitchFrontOperaUid'];
        }
        if (isset($map['Uid'])) {
            $model->uid = $map['Uid'];
        }

        return $model;
    }
}
