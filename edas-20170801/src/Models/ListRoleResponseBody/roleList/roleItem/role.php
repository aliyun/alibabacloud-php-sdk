<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models\ListRoleResponseBody\roleList\roleItem;

use AlibabaCloud\Tea\Model;

class role extends Model
{
    /**
     * @description The ID of the Alibaba Cloud account.
     *
     * @example test**@aliyun.com
     *
     * @var string
     */
    public $adminUserId;

    /**
     * @description The timestamp when the role was created. This value is a UNIX timestamp representing the number of milliseconds that have elapsed since January 1, 1970, 00:00:00 UTC.
     *
     * @example 1542717260156
     *
     * @var int
     */
    public $createTime;

    /**
     * @description The ID of the role.
     *
     * @example 1
     *
     * @var int
     */
    public $id;

    /**
     * @description Indicates whether the role is a default role.
     *
     * @example false
     *
     * @var bool
     */
    public $isDefault;

    /**
     * @description The name of the role.
     *
     * @example Super Admin(All privileges)
     *
     * @var string
     */
    public $name;

    /**
     * @description The timestamp when the role was last modified. This value is a UNIX timestamp representing the number of milliseconds that have elapsed since January 1, 1970, 00:00:00 UTC.
     *
     * @example 1542717260156
     *
     * @var int
     */
    public $updateTime;
    protected $_name = [
        'adminUserId' => 'AdminUserId',
        'createTime'  => 'CreateTime',
        'id'          => 'Id',
        'isDefault'   => 'IsDefault',
        'name'        => 'Name',
        'updateTime'  => 'UpdateTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->adminUserId) {
            $res['AdminUserId'] = $this->adminUserId;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->isDefault) {
            $res['IsDefault'] = $this->isDefault;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return role
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AdminUserId'])) {
            $model->adminUserId = $map['AdminUserId'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['IsDefault'])) {
            $model->isDefault = $map['IsDefault'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }

        return $model;
    }
}
