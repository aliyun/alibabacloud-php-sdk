<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\GroupUserSaveRequest;

use AlibabaCloud\Tea\Model;

class subCorpIdList extends Model
{
    /**
     * @var string[]
     */
    public $departIds;

    /**
     * @var string
     */
    public $email;

    /**
     * @description This parameter is required.
     *
     * @example 0
     *
     * @var int
     */
    public $leaveStatus;

    /**
     * @example 123
     *
     * @var string
     */
    public $managerUserId;

    /**
     * @example 10
     *
     * @var string
     */
    public $positionLevel;

    /**
     * @description This parameter is required.
     *
     * @example btrip123
     *
     * @var string
     */
    public $subCorpId;
    protected $_name = [
        'departIds'     => 'depart_ids',
        'email'         => 'email',
        'leaveStatus'   => 'leave_status',
        'managerUserId' => 'manager_user_id',
        'positionLevel' => 'position_level',
        'subCorpId'     => 'sub_corp_id',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->departIds) {
            $res['depart_ids'] = $this->departIds;
        }
        if (null !== $this->email) {
            $res['email'] = $this->email;
        }
        if (null !== $this->leaveStatus) {
            $res['leave_status'] = $this->leaveStatus;
        }
        if (null !== $this->managerUserId) {
            $res['manager_user_id'] = $this->managerUserId;
        }
        if (null !== $this->positionLevel) {
            $res['position_level'] = $this->positionLevel;
        }
        if (null !== $this->subCorpId) {
            $res['sub_corp_id'] = $this->subCorpId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return subCorpIdList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['depart_ids'])) {
            if (!empty($map['depart_ids'])) {
                $model->departIds = $map['depart_ids'];
            }
        }
        if (isset($map['email'])) {
            $model->email = $map['email'];
        }
        if (isset($map['leave_status'])) {
            $model->leaveStatus = $map['leave_status'];
        }
        if (isset($map['manager_user_id'])) {
            $model->managerUserId = $map['manager_user_id'];
        }
        if (isset($map['position_level'])) {
            $model->positionLevel = $map['position_level'];
        }
        if (isset($map['sub_corp_id'])) {
            $model->subCorpId = $map['sub_corp_id'];
        }

        return $model;
    }
}
