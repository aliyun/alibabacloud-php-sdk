<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\AddUserGroupMemberRequest;

use AlibabaCloud\Dara\Model;

class addCommand extends Model
{
    /**
     * @var string
     */
    public $userGroupId;

    /**
     * @var string[]
     */
    public $userIdList;
    protected $_name = [
        'userGroupId' => 'UserGroupId',
        'userIdList' => 'UserIdList',
    ];

    public function validate()
    {
        if (\is_array($this->userIdList)) {
            Model::validateArray($this->userIdList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->userGroupId) {
            $res['UserGroupId'] = $this->userGroupId;
        }

        if (null !== $this->userIdList) {
            if (\is_array($this->userIdList)) {
                $res['UserIdList'] = [];
                $n1 = 0;
                foreach ($this->userIdList as $item1) {
                    $res['UserIdList'][$n1++] = $item1;
                }
            }
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
        if (isset($map['UserGroupId'])) {
            $model->userGroupId = $map['UserGroupId'];
        }

        if (isset($map['UserIdList'])) {
            if (!empty($map['UserIdList'])) {
                $model->userIdList = [];
                $n1 = 0;
                foreach ($map['UserIdList'] as $item1) {
                    $model->userIdList[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
