<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListUserGroupsResponseBody\pageResult;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListUserGroupsResponseBody\pageResult\userGroupList\adminList;

class userGroupList extends Model
{
    /**
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
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $myRole;

    /**
     * @var string
     */
    public $name;
    protected $_name = [
        'active' => 'Active',
        'adminList' => 'AdminList',
        'description' => 'Description',
        'id' => 'Id',
        'myRole' => 'MyRole',
        'name' => 'Name',
    ];

    public function validate()
    {
        if (\is_array($this->adminList)) {
            Model::validateArray($this->adminList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->active) {
            $res['Active'] = $this->active;
        }

        if (null !== $this->adminList) {
            if (\is_array($this->adminList)) {
                $res['AdminList'] = [];
                $n1 = 0;
                foreach ($this->adminList as $item1) {
                    $res['AdminList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Active'])) {
            $model->active = $map['Active'];
        }

        if (isset($map['AdminList'])) {
            if (!empty($map['AdminList'])) {
                $model->adminList = [];
                $n1 = 0;
                foreach ($map['AdminList'] as $item1) {
                    $model->adminList[$n1++] = adminList::fromMap($item1);
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
