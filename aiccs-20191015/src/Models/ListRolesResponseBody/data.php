<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiccs\V20191015\Models\ListRolesResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description 角色id
     *
     * @var int
     */
    public $roleId;

    /**
     * @description 创建时间
     *
     * @var string
     */
    public $createTime;

    /**
     * @description 租户id
     *
     * @var int
     */
    public $buId;

    /**
     * @description 角色名称
     *
     * @var string
     */
    public $title;

    /**
     * @description 角色code
     *
     * @var string
     */
    public $code;

    /**
     * @description 角色描述
     *
     * @var string
     */
    public $description;

    /**
     * @description 所属角色组id
     *
     * @var int
     */
    public $roleGroupId;

    /**
     * @description 所属角色组名称
     *
     * @var string
     */
    public $roleGroupName;
    protected $_name = [
        'roleId'        => 'RoleId',
        'createTime'    => 'CreateTime',
        'buId'          => 'BuId',
        'title'         => 'Title',
        'code'          => 'Code',
        'description'   => 'Description',
        'roleGroupId'   => 'RoleGroupId',
        'roleGroupName' => 'RoleGroupName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->roleId) {
            $res['RoleId'] = $this->roleId;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->buId) {
            $res['BuId'] = $this->buId;
        }
        if (null !== $this->title) {
            $res['Title'] = $this->title;
        }
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->roleGroupId) {
            $res['RoleGroupId'] = $this->roleGroupId;
        }
        if (null !== $this->roleGroupName) {
            $res['RoleGroupName'] = $this->roleGroupName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RoleId'])) {
            $model->roleId = $map['RoleId'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['BuId'])) {
            $model->buId = $map['BuId'];
        }
        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['RoleGroupId'])) {
            $model->roleGroupId = $map['RoleGroupId'];
        }
        if (isset($map['RoleGroupName'])) {
            $model->roleGroupName = $map['RoleGroupName'];
        }

        return $model;
    }
}
