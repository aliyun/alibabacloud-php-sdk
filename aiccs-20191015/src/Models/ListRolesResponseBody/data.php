<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiccs\V20191015\Models\ListRolesResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example 1
     *
     * @var int
     */
    public $buId;

    /**
     * @example admin
     *
     * @var string
     */
    public $code;

    /**
     * @example 2020-01-03T20:25:33Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @example Admin
     *
     * @var string
     */
    public $description;

    /**
     * @example 0
     *
     * @var int
     */
    public $roleGroupId;

    /**
     * @var string
     */
    public $roleGroupName;

    /**
     * @example 1
     *
     * @var int
     */
    public $roleId;

    /**
     * @var string
     */
    public $title;
    protected $_name = [
        'buId'          => 'BuId',
        'code'          => 'Code',
        'createTime'    => 'CreateTime',
        'description'   => 'Description',
        'roleGroupId'   => 'RoleGroupId',
        'roleGroupName' => 'RoleGroupName',
        'roleId'        => 'RoleId',
        'title'         => 'Title',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->buId) {
            $res['BuId'] = $this->buId;
        }
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
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
        if (null !== $this->roleId) {
            $res['RoleId'] = $this->roleId;
        }
        if (null !== $this->title) {
            $res['Title'] = $this->title;
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
        if (isset($map['BuId'])) {
            $model->buId = $map['BuId'];
        }
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
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
        if (isset($map['RoleId'])) {
            $model->roleId = $map['RoleId'];
        }
        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }

        return $model;
    }
}
