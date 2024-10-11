<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListUserGroupsResponseBody\pageResult;

use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListUserGroupsResponseBody\pageResult\userGroupList\adminList;
use AlibabaCloud\Tea\Model;

class userGroupList extends Model
{
    /**
     * @example true
     *
     * @var bool
     */
    public $active;

    /**
     * @var adminList[]
     */
    public $adminList;

    /**
     * @var string
     */
    public $description;

    /**
     * @example 31313232
     *
     * @var string
     */
    public $id;

    /**
     * @example SECURITY_ADMIN
     *
     * @var string
     */
    public $myRole;

    /**
     * @var string
     */
    public $name;
    protected $_name = [
        'active'      => 'Active',
        'adminList'   => 'AdminList',
        'description' => 'Description',
        'id'          => 'Id',
        'myRole'      => 'MyRole',
        'name'        => 'Name',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->active) {
            $res['Active'] = $this->active;
        }
        if (null !== $this->adminList) {
            $res['AdminList'] = [];
            if (null !== $this->adminList && \is_array($this->adminList)) {
                $n = 0;
                foreach ($this->adminList as $item) {
                    $res['AdminList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->myRole) {
            $res['MyRole'] = $this->myRole;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return userGroupList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Active'])) {
            $model->active = $map['Active'];
        }
        if (isset($map['AdminList'])) {
            if (!empty($map['AdminList'])) {
                $model->adminList = [];
                $n                = 0;
                foreach ($map['AdminList'] as $item) {
                    $model->adminList[$n++] = null !== $item ? adminList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['MyRole'])) {
            $model->myRole = $map['MyRole'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        return $model;
    }
}
