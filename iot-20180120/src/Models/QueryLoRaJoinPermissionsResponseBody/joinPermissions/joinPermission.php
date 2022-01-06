<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\QueryLoRaJoinPermissionsResponseBody\joinPermissions;

use AlibabaCloud\Tea\Model;

class joinPermission extends Model
{
    /**
     * @var string
     */
    public $classMode;

    /**
     * @var bool
     */
    public $enabled;

    /**
     * @var string
     */
    public $joinPermissionId;

    /**
     * @var string
     */
    public $joinPermissionName;

    /**
     * @var string
     */
    public $joinPermissionType;

    /**
     * @var string
     */
    public $ownerAliyunPk;
    protected $_name = [
        'classMode'          => 'ClassMode',
        'enabled'            => 'Enabled',
        'joinPermissionId'   => 'JoinPermissionId',
        'joinPermissionName' => 'JoinPermissionName',
        'joinPermissionType' => 'JoinPermissionType',
        'ownerAliyunPk'      => 'OwnerAliyunPk',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->classMode) {
            $res['ClassMode'] = $this->classMode;
        }
        if (null !== $this->enabled) {
            $res['Enabled'] = $this->enabled;
        }
        if (null !== $this->joinPermissionId) {
            $res['JoinPermissionId'] = $this->joinPermissionId;
        }
        if (null !== $this->joinPermissionName) {
            $res['JoinPermissionName'] = $this->joinPermissionName;
        }
        if (null !== $this->joinPermissionType) {
            $res['JoinPermissionType'] = $this->joinPermissionType;
        }
        if (null !== $this->ownerAliyunPk) {
            $res['OwnerAliyunPk'] = $this->ownerAliyunPk;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return joinPermission
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClassMode'])) {
            $model->classMode = $map['ClassMode'];
        }
        if (isset($map['Enabled'])) {
            $model->enabled = $map['Enabled'];
        }
        if (isset($map['JoinPermissionId'])) {
            $model->joinPermissionId = $map['JoinPermissionId'];
        }
        if (isset($map['JoinPermissionName'])) {
            $model->joinPermissionName = $map['JoinPermissionName'];
        }
        if (isset($map['JoinPermissionType'])) {
            $model->joinPermissionType = $map['JoinPermissionType'];
        }
        if (isset($map['OwnerAliyunPk'])) {
            $model->ownerAliyunPk = $map['OwnerAliyunPk'];
        }

        return $model;
    }
}
