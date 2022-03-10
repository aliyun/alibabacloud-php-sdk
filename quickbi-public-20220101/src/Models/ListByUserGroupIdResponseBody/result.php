<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quickbipublic\V20220101\Models\ListByUserGroupIdResponseBody;

use AlibabaCloud\SDK\Quickbipublic\V20220101\Models\ListByUserGroupIdResponseBody\result\userGroupModels;
use AlibabaCloud\Tea\Model;

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
        'userGroupModels'    => 'UserGroupModels',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->failedUserGroupIds) {
            $res['FailedUserGroupIds'] = $this->failedUserGroupIds;
        }
        if (null !== $this->userGroupModels) {
            $res['UserGroupModels'] = [];
            if (null !== $this->userGroupModels && \is_array($this->userGroupModels)) {
                $n = 0;
                foreach ($this->userGroupModels as $item) {
                    $res['UserGroupModels'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FailedUserGroupIds'])) {
            if (!empty($map['FailedUserGroupIds'])) {
                $model->failedUserGroupIds = $map['FailedUserGroupIds'];
            }
        }
        if (isset($map['UserGroupModels'])) {
            if (!empty($map['UserGroupModels'])) {
                $model->userGroupModels = [];
                $n                      = 0;
                foreach ($map['UserGroupModels'] as $item) {
                    $model->userGroupModels[$n++] = null !== $item ? userGroupModels::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
