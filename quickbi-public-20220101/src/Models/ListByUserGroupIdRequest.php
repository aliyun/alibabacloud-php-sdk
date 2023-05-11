<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quickbipublic\V20220101\Models;

use AlibabaCloud\Tea\Model;

class ListByUserGroupIdRequest extends Model
{
    /**
     * @description The ID of the user group that you want to query. Separate multiple user groups with commas (,).
     *
     * @example 34fe-***-6dcb,84q9-****-4a274
     *
     * @var string
     */
    public $userGroupIds;
    protected $_name = [
        'userGroupIds' => 'UserGroupIds',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->userGroupIds) {
            $res['UserGroupIds'] = $this->userGroupIds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListByUserGroupIdRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['UserGroupIds'])) {
            $model->userGroupIds = $map['UserGroupIds'];
        }

        return $model;
    }
}
