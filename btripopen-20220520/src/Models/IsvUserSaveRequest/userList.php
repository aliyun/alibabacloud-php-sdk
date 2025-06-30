<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\IsvUserSaveRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\IsvUserSaveRequest\userList\certList;

class userList extends Model
{
    /**
     * @var string
     */
    public $baseCityCode;

    /**
     * @var string
     */
    public $birthday;

    /**
     * @var certList[]
     */
    public $certList;

    /**
     * @var int
     */
    public $departId;

    /**
     * @var string
     */
    public $email;

    /**
     * @var string
     */
    public $gender;

    /**
     * @var bool
     */
    public $isAdmin;

    /**
     * @var string
     */
    public $jobNo;

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
    public $phone;

    /**
     * @var string
     */
    public $position;

    /**
     * @var string
     */
    public $positionLevel;

    /**
     * @var string
     */
    public $realNameEn;

    /**
     * @var string[]
     */
    public $roleIdList;

    /**
     * @var string
     */
    public $thirdDepartId;

    /**
     * @var string[]
     */
    public $thirdDepartIdList;

    /**
     * @var string
     */
    public $userId;

    /**
     * @var string
     */
    public $userName;

    /**
     * @var string
     */
    public $userNick;
    protected $_name = [
        'baseCityCode' => 'base_city_code',
        'birthday' => 'birthday',
        'certList' => 'cert_list',
        'departId' => 'depart_id',
        'email' => 'email',
        'gender' => 'gender',
        'isAdmin' => 'is_admin',
        'jobNo' => 'job_no',
        'leaveStatus' => 'leave_status',
        'managerUserId' => 'manager_user_id',
        'phone' => 'phone',
        'position' => 'position',
        'positionLevel' => 'position_level',
        'realNameEn' => 'real_name_en',
        'roleIdList' => 'role_id_list',
        'thirdDepartId' => 'third_depart_id',
        'thirdDepartIdList' => 'third_depart_id_list',
        'userId' => 'user_id',
        'userName' => 'user_name',
        'userNick' => 'user_nick',
    ];

    public function validate()
    {
        if (\is_array($this->certList)) {
            Model::validateArray($this->certList);
        }
        if (\is_array($this->roleIdList)) {
            Model::validateArray($this->roleIdList);
        }
        if (\is_array($this->thirdDepartIdList)) {
            Model::validateArray($this->thirdDepartIdList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->baseCityCode) {
            $res['base_city_code'] = $this->baseCityCode;
        }

        if (null !== $this->birthday) {
            $res['birthday'] = $this->birthday;
        }

        if (null !== $this->certList) {
            if (\is_array($this->certList)) {
                $res['cert_list'] = [];
                $n1 = 0;
                foreach ($this->certList as $item1) {
                    $res['cert_list'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->departId) {
            $res['depart_id'] = $this->departId;
        }

        if (null !== $this->email) {
            $res['email'] = $this->email;
        }

        if (null !== $this->gender) {
            $res['gender'] = $this->gender;
        }

        if (null !== $this->isAdmin) {
            $res['is_admin'] = $this->isAdmin;
        }

        if (null !== $this->jobNo) {
            $res['job_no'] = $this->jobNo;
        }

        if (null !== $this->leaveStatus) {
            $res['leave_status'] = $this->leaveStatus;
        }

        if (null !== $this->managerUserId) {
            $res['manager_user_id'] = $this->managerUserId;
        }

        if (null !== $this->phone) {
            $res['phone'] = $this->phone;
        }

        if (null !== $this->position) {
            $res['position'] = $this->position;
        }

        if (null !== $this->positionLevel) {
            $res['position_level'] = $this->positionLevel;
        }

        if (null !== $this->realNameEn) {
            $res['real_name_en'] = $this->realNameEn;
        }

        if (null !== $this->roleIdList) {
            if (\is_array($this->roleIdList)) {
                $res['role_id_list'] = [];
                $n1 = 0;
                foreach ($this->roleIdList as $item1) {
                    $res['role_id_list'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->thirdDepartId) {
            $res['third_depart_id'] = $this->thirdDepartId;
        }

        if (null !== $this->thirdDepartIdList) {
            if (\is_array($this->thirdDepartIdList)) {
                $res['third_depart_id_list'] = [];
                $n1 = 0;
                foreach ($this->thirdDepartIdList as $item1) {
                    $res['third_depart_id_list'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->userId) {
            $res['user_id'] = $this->userId;
        }

        if (null !== $this->userName) {
            $res['user_name'] = $this->userName;
        }

        if (null !== $this->userNick) {
            $res['user_nick'] = $this->userNick;
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
        if (isset($map['base_city_code'])) {
            $model->baseCityCode = $map['base_city_code'];
        }

        if (isset($map['birthday'])) {
            $model->birthday = $map['birthday'];
        }

        if (isset($map['cert_list'])) {
            if (!empty($map['cert_list'])) {
                $model->certList = [];
                $n1 = 0;
                foreach ($map['cert_list'] as $item1) {
                    $model->certList[$n1] = certList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['depart_id'])) {
            $model->departId = $map['depart_id'];
        }

        if (isset($map['email'])) {
            $model->email = $map['email'];
        }

        if (isset($map['gender'])) {
            $model->gender = $map['gender'];
        }

        if (isset($map['is_admin'])) {
            $model->isAdmin = $map['is_admin'];
        }

        if (isset($map['job_no'])) {
            $model->jobNo = $map['job_no'];
        }

        if (isset($map['leave_status'])) {
            $model->leaveStatus = $map['leave_status'];
        }

        if (isset($map['manager_user_id'])) {
            $model->managerUserId = $map['manager_user_id'];
        }

        if (isset($map['phone'])) {
            $model->phone = $map['phone'];
        }

        if (isset($map['position'])) {
            $model->position = $map['position'];
        }

        if (isset($map['position_level'])) {
            $model->positionLevel = $map['position_level'];
        }

        if (isset($map['real_name_en'])) {
            $model->realNameEn = $map['real_name_en'];
        }

        if (isset($map['role_id_list'])) {
            if (!empty($map['role_id_list'])) {
                $model->roleIdList = [];
                $n1 = 0;
                foreach ($map['role_id_list'] as $item1) {
                    $model->roleIdList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['third_depart_id'])) {
            $model->thirdDepartId = $map['third_depart_id'];
        }

        if (isset($map['third_depart_id_list'])) {
            if (!empty($map['third_depart_id_list'])) {
                $model->thirdDepartIdList = [];
                $n1 = 0;
                foreach ($map['third_depart_id_list'] as $item1) {
                    $model->thirdDepartIdList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['user_id'])) {
            $model->userId = $map['user_id'];
        }

        if (isset($map['user_name'])) {
            $model->userName = $map['user_name'];
        }

        if (isset($map['user_nick'])) {
            $model->userNick = $map['user_nick'];
        }

        return $model;
    }
}
