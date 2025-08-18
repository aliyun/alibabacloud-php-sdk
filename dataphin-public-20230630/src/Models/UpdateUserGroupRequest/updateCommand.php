<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\UpdateUserGroupRequest;

use AlibabaCloud\Dara\Model;

class updateCommand extends Model
{
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
        if (null !== $this->adminUserIdList) {
            if (\is_array($this->adminUserIdList)) {
                $res['AdminUserIdList'] = [];
                $n1 = 0;
                foreach ($this->adminUserIdList as $item1) {
                    $res['AdminUserIdList'][$n1] = $item1;
                    ++$n1;
                }
            }
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AdminUserIdList'])) {
            if (!empty($map['AdminUserIdList'])) {
                $model->adminUserIdList = [];
                $n1 = 0;
                foreach ($map['AdminUserIdList'] as $item1) {
                    $model->adminUserIdList[$n1] = $item1;
                    ++$n1;
                }
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
