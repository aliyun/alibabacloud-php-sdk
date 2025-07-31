<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\UpdateUserGroupRequest;

use AlibabaCloud\Tea\Model;

class updateCommand extends Model
{
    /**
     * @var string[]
     */
    public $adminUserIdList;

    /**
     * @example xx
     *
     * @var string
     */
    public $description;

    /**
     * @description This parameter is required.
     *
     * @example 13423
     *
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $name;
    protected $_name = [
        'adminUserIdList' => 'AdminUserIdList',
        'description' => 'Description',
        'id' => 'Id',
        'name' => 'Name',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->adminUserIdList) {
            $res['AdminUserIdList'] = $this->adminUserIdList;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return updateCommand
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AdminUserIdList'])) {
            if (!empty($map['AdminUserIdList'])) {
                $model->adminUserIdList = $map['AdminUserIdList'];
            }
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        return $model;
    }
}
