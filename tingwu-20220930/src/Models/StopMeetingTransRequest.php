<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Tingwu\V20220930\Models;

use AlibabaCloud\Tea\Model;

class StopMeetingTransRequest extends Model
{
    /**
     * @example 1
     *
     * @var int
     */
    public $meetingRoleNum;

    /**
     * @example false
     *
     * @var bool
     */
    public $onlyRoleSplitResult;
    protected $_name = [
        'meetingRoleNum'      => 'MeetingRoleNum',
        'onlyRoleSplitResult' => 'OnlyRoleSplitResult',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->meetingRoleNum) {
            $res['MeetingRoleNum'] = $this->meetingRoleNum;
        }
        if (null !== $this->onlyRoleSplitResult) {
            $res['OnlyRoleSplitResult'] = $this->onlyRoleSplitResult;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return StopMeetingTransRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MeetingRoleNum'])) {
            $model->meetingRoleNum = $map['MeetingRoleNum'];
        }
        if (isset($map['OnlyRoleSplitResult'])) {
            $model->onlyRoleSplitResult = $map['OnlyRoleSplitResult'];
        }

        return $model;
    }
}
