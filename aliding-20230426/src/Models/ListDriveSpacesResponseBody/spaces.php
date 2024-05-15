<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models\ListDriveSpacesResponseBody;

use AlibabaCloud\Tea\Model;

class spaces extends Model
{
    /**
     * @example 2016-02-28T10:47:08Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @example 2016-02-28T10:47:08Z
     *
     * @var string
     */
    public $modifyTime;

    /**
     * @example acl
     *
     * @var string
     */
    public $permissionMode;

    /**
     * @example 2147483648
     *
     * @var int
     */
    public $quota;

    /**
     * @example 123456789
     *
     * @var string
     */
    public $spaceId;

    /**
     * @var string
     */
    public $spaceName;

    /**
     * @example org
     *
     * @var string
     */
    public $spaceType;

    /**
     * @example 640445953
     *
     * @var int
     */
    public $usedQuota;
    protected $_name = [
        'createTime'     => 'CreateTime',
        'modifyTime'     => 'ModifyTime',
        'permissionMode' => 'PermissionMode',
        'quota'          => 'Quota',
        'spaceId'        => 'SpaceId',
        'spaceName'      => 'SpaceName',
        'spaceType'      => 'SpaceType',
        'usedQuota'      => 'UsedQuota',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->modifyTime) {
            $res['ModifyTime'] = $this->modifyTime;
        }
        if (null !== $this->permissionMode) {
            $res['PermissionMode'] = $this->permissionMode;
        }
        if (null !== $this->quota) {
            $res['Quota'] = $this->quota;
        }
        if (null !== $this->spaceId) {
            $res['SpaceId'] = $this->spaceId;
        }
        if (null !== $this->spaceName) {
            $res['SpaceName'] = $this->spaceName;
        }
        if (null !== $this->spaceType) {
            $res['SpaceType'] = $this->spaceType;
        }
        if (null !== $this->usedQuota) {
            $res['UsedQuota'] = $this->usedQuota;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return spaces
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['ModifyTime'])) {
            $model->modifyTime = $map['ModifyTime'];
        }
        if (isset($map['PermissionMode'])) {
            $model->permissionMode = $map['PermissionMode'];
        }
        if (isset($map['Quota'])) {
            $model->quota = $map['Quota'];
        }
        if (isset($map['SpaceId'])) {
            $model->spaceId = $map['SpaceId'];
        }
        if (isset($map['SpaceName'])) {
            $model->spaceName = $map['SpaceName'];
        }
        if (isset($map['SpaceType'])) {
            $model->spaceType = $map['SpaceType'];
        }
        if (isset($map['UsedQuota'])) {
            $model->usedQuota = $map['UsedQuota'];
        }

        return $model;
    }
}
