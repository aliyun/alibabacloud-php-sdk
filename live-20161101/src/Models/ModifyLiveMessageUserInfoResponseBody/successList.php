<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\ModifyLiveMessageUserInfoResponseBody;

use AlibabaCloud\Tea\Model;

class successList extends Model
{
    /**
     * @description The ID of the group to which the user belongs. For successful modification, the information of the user is updated when you query the users in the group.
     *
     * @example grouptest1
     *
     * @var string
     */
    public $groupId;

    /**
     * @description Indicates whether the group to which the user belongs is modified. In this case, the group is modified.
     *
     * @example true
     *
     * @var bool
     */
    public $success;
    protected $_name = [
        'groupId' => 'GroupId',
        'success' => 'Success',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return successList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}
