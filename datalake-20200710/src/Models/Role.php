<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DataLake\V20200710\Models;

use AlibabaCloud\Tea\Model;

class Role extends Model
{
    /**
     * @var int
     */
    public $createTime;

    /**
     * @var string
     */
    public $description;

    /**
     * @example 显示名称，允许中文
     *
     * @var string
     */
    public $displayName;

    /**
     * @var int
     */
    public $isPredefined;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $principalArn;

    /**
     * @var int
     */
    public $updateTime;

    /**
     * @var Principal[]
     */
    public $users;
    protected $_name = [
        'createTime'   => 'CreateTime',
        'description'  => 'Description',
        'displayName'  => 'DisplayName',
        'isPredefined' => 'IsPredefined',
        'name'         => 'Name',
        'principalArn' => 'PrincipalArn',
        'updateTime'   => 'UpdateTime',
        'users'        => 'Users',
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
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->displayName) {
            $res['DisplayName'] = $this->displayName;
        }
        if (null !== $this->isPredefined) {
            $res['IsPredefined'] = $this->isPredefined;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->principalArn) {
            $res['PrincipalArn'] = $this->principalArn;
        }
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }
        if (null !== $this->users) {
            $res['Users'] = [];
            if (null !== $this->users && \is_array($this->users)) {
                $n = 0;
                foreach ($this->users as $item) {
                    $res['Users'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return Role
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['DisplayName'])) {
            $model->displayName = $map['DisplayName'];
        }
        if (isset($map['IsPredefined'])) {
            $model->isPredefined = $map['IsPredefined'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['PrincipalArn'])) {
            $model->principalArn = $map['PrincipalArn'];
        }
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }
        if (isset($map['Users'])) {
            if (!empty($map['Users'])) {
                $model->users = [];
                $n            = 0;
                foreach ($map['Users'] as $item) {
                    $model->users[$n++] = null !== $item ? Principal::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
