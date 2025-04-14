<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quickbipublic\V20220101\Models\ListByUserGroupIdResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Quickbipublic\V20220101\Models\ListByUserGroupIdResponseBody\result\userGroupModels;

class result extends Model
{
    /**
     * @var string[]
     */
    public $failedUserGroupIds;

    /**
     * @var userGroupModels[]
     */
    public $userGroupModels;
    protected $_name = [
        'failedUserGroupIds' => 'FailedUserGroupIds',
        'userGroupModels' => 'UserGroupModels',
    ];

    public function validate()
    {
        if (\is_array($this->failedUserGroupIds)) {
            Model::validateArray($this->failedUserGroupIds);
        }
        if (\is_array($this->userGroupModels)) {
            Model::validateArray($this->userGroupModels);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->failedUserGroupIds) {
            if (\is_array($this->failedUserGroupIds)) {
                $res['FailedUserGroupIds'] = [];
                $n1 = 0;
                foreach ($this->failedUserGroupIds as $item1) {
                    $res['FailedUserGroupIds'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->userGroupModels) {
            if (\is_array($this->userGroupModels)) {
                $res['UserGroupModels'] = [];
                $n1 = 0;
                foreach ($this->userGroupModels as $item1) {
                    $res['UserGroupModels'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['FailedUserGroupIds'])) {
            if (!empty($map['FailedUserGroupIds'])) {
                $model->failedUserGroupIds = [];
                $n1 = 0;
                foreach ($map['FailedUserGroupIds'] as $item1) {
                    $model->failedUserGroupIds[$n1++] = $item1;
                }
            }
        }

        if (isset($map['UserGroupModels'])) {
            if (!empty($map['UserGroupModels'])) {
                $model->userGroupModels = [];
                $n1 = 0;
                foreach ($map['UserGroupModels'] as $item1) {
                    $model->userGroupModels[$n1++] = userGroupModels::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
