<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\ModifyLiveMessageUserInfoResponseBody;

use AlibabaCloud\Tea\Model;

class failList extends Model
{
    /**
     * @description The error code.
     *
     * @example 440
     *
     * @var int
     */
    public $code;

    /**
     * @description The ID of the group to which the user belongs. For failed modification, the information of the user is not updated when you query the users in the group. You can try again after you check the failure reason and fix the issue.
     *
     * @example grouptest2
     *
     * @var string
     */
    public $groupId;

    /**
     * @description The reason why the information of the user failed to be modified.
     *
     * @example group not exists or already deleted
     *
     * @var string
     */
    public $reason;

    /**
     * @description Indicates whether the group to which the user belongs is modified. In this case, the group is not modified.
     *
     * @example false
     *
     * @var bool
     */
    public $success;
    protected $_name = [
        'code' => 'Code',
        'groupId' => 'GroupId',
        'reason' => 'Reason',
        'success' => 'Success',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->reason) {
            $res['Reason'] = $this->reason;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return failList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['Reason'])) {
            $model->reason = $map['Reason'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}
