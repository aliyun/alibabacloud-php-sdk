<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\UpdateProjectMemberRequest\updateCommand;

use AlibabaCloud\Dara\Model;

class userList extends Model
{
    /**
     * @var string[]
     */
    public $roleCodeList;

    /**
     * @var int[]
     */
    public $roleList;

    /**
     * @var string
     */
    public $userId;
    protected $_name = [
        'roleCodeList' => 'RoleCodeList',
        'roleList' => 'RoleList',
        'userId' => 'UserId',
    ];

    public function validate()
    {
        if (\is_array($this->roleCodeList)) {
            Model::validateArray($this->roleCodeList);
        }
        if (\is_array($this->roleList)) {
            Model::validateArray($this->roleList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->roleCodeList) {
            if (\is_array($this->roleCodeList)) {
                $res['RoleCodeList'] = [];
                $n1 = 0;
                foreach ($this->roleCodeList as $item1) {
                    $res['RoleCodeList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->roleList) {
            if (\is_array($this->roleList)) {
                $res['RoleList'] = [];
                $n1 = 0;
                foreach ($this->roleList as $item1) {
                    $res['RoleList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
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
        if (isset($map['RoleCodeList'])) {
            if (!empty($map['RoleCodeList'])) {
                $model->roleCodeList = [];
                $n1 = 0;
                foreach ($map['RoleCodeList'] as $item1) {
                    $model->roleCodeList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['RoleList'])) {
            if (!empty($map['RoleList'])) {
                $model->roleList = [];
                $n1 = 0;
                foreach ($map['RoleList'] as $item1) {
                    $model->roleList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        return $model;
    }
}
