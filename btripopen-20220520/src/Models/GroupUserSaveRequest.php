<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models;

use AlibabaCloud\SDK\BtripOpen\V20220520\Models\GroupUserSaveRequest\subCorpIdList;
use AlibabaCloud\Tea\Model;

class GroupUserSaveRequest extends Model
{
    /**
     * @example 1001
     *
     * @var string
     */
    public $jobNo;

    /**
     * @example 0
     *
     * @var int
     */
    public $leaveStatus;

    /**
     * @example 18000000000
     *
     * @var string
     */
    public $phone;

    /**
     * @example ce/shi
     *
     * @var string
     */
    public $realNameEn;

    /**
     * @var subCorpIdList[]
     */
    public $subCorpIdList;

    /**
     * @example 123
     *
     * @var string
     */
    public $userId;

    /**
     * @var string
     */
    public $userName;
    protected $_name = [
        'jobNo'         => 'job_no',
        'leaveStatus'   => 'leave_status',
        'phone'         => 'phone',
        'realNameEn'    => 'real_name_en',
        'subCorpIdList' => 'sub_corp_id_list',
        'userId'        => 'user_id',
        'userName'      => 'user_name',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->jobNo) {
            $res['job_no'] = $this->jobNo;
        }
        if (null !== $this->leaveStatus) {
            $res['leave_status'] = $this->leaveStatus;
        }
        if (null !== $this->phone) {
            $res['phone'] = $this->phone;
        }
        if (null !== $this->realNameEn) {
            $res['real_name_en'] = $this->realNameEn;
        }
        if (null !== $this->subCorpIdList) {
            $res['sub_corp_id_list'] = [];
            if (null !== $this->subCorpIdList && \is_array($this->subCorpIdList)) {
                $n = 0;
                foreach ($this->subCorpIdList as $item) {
                    $res['sub_corp_id_list'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->userId) {
            $res['user_id'] = $this->userId;
        }
        if (null !== $this->userName) {
            $res['user_name'] = $this->userName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GroupUserSaveRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['job_no'])) {
            $model->jobNo = $map['job_no'];
        }
        if (isset($map['leave_status'])) {
            $model->leaveStatus = $map['leave_status'];
        }
        if (isset($map['phone'])) {
            $model->phone = $map['phone'];
        }
        if (isset($map['real_name_en'])) {
            $model->realNameEn = $map['real_name_en'];
        }
        if (isset($map['sub_corp_id_list'])) {
            if (!empty($map['sub_corp_id_list'])) {
                $model->subCorpIdList = [];
                $n                    = 0;
                foreach ($map['sub_corp_id_list'] as $item) {
                    $model->subCorpIdList[$n++] = null !== $item ? subCorpIdList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['user_id'])) {
            $model->userId = $map['user_id'];
        }
        if (isset($map['user_name'])) {
            $model->userName = $map['user_name'];
        }

        return $model;
    }
}
