<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\CreateUserGroupRequest;

use AlibabaCloud\Dara\Model;

class createCommand extends Model
{
    /**
     * @var bool
     */
    public $active;

    /**
     * @var string[]
     */
    public $adminUserIdList;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $name;
    protected $_name = [
        'active' => 'Active',
        'adminUserIdList' => 'AdminUserIdList',
        'description' => 'Description',
        'name' => 'Name',
    ];

    public function validate()
    {
        if (\is_array($this->adminUserIdList)) {
            Model::validateArray($this->adminUserIdList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->active) {
            $res['Active'] = $this->active;
        }

        if (null !== $this->adminUserIdList) {
            if (\is_array($this->adminUserIdList)) {
                $res['AdminUserIdList'] = [];
                $n1 = 0;
                foreach ($this->adminUserIdList as $item1) {
                    $res['AdminUserIdList'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
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

        if (isset($map['AdminUserIdList'])) {
            if (!empty($map['AdminUserIdList'])) {
                $model->adminUserIdList = [];
                $n1 = 0;
                foreach ($map['AdminUserIdList'] as $item1) {
                    $model->adminUserIdList[$n1++] = $item1;
                }
            }
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        return $model;
    }
}
