<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiccs\V20191015\Models\ListRolesResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var int
     */
    public $buId;
    /**
     * @var string
     */
    public $code;
    /**
     * @var string
     */
    public $createTime;
    /**
     * @var string
     */
    public $description;
    /**
     * @var int
     */
    public $roleGroupId;
    /**
     * @var string
     */
    public $roleGroupName;
    /**
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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
