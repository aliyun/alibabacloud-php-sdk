<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\GroupUserSaveRequest;

use AlibabaCloud\Dara\Model;

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
     * @var int
     */
    public $leaveStatus;

    /**
     * @var string
     */
    public $managerUserId;

    /**
     * @var string
     */
    public $positionLevel;

    /**
     * @var string
     */
    public $subCorpId;
    protected $_name = [
        'departIds' => 'depart_ids',
        'email' => 'email',
        'leaveStatus' => 'leave_status',
        'managerUserId' => 'manager_user_id',
        'positionLevel' => 'position_level',
        'subCorpId' => 'sub_corp_id',
    ];

    public function validate()
    {
        if (\is_array($this->departIds)) {
            Model::validateArray($this->departIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->departIds) {
            if (\is_array($this->departIds)) {
                $res['depart_ids'] = [];
                $n1 = 0;
                foreach ($this->departIds as $item1) {
                    $res['depart_ids'][$n1] = $item1;
                    ++$n1;
                }
            }
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['depart_ids'])) {
            if (!empty($map['depart_ids'])) {
                $model->departIds = [];
                $n1 = 0;
                foreach ($map['depart_ids'] as $item1) {
                    $model->departIds[$n1] = $item1;
                    ++$n1;
                }
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
