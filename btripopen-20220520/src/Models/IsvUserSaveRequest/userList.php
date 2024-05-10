<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\IsvUserSaveRequest;

use AlibabaCloud\SDK\BtripOpen\V20220520\Models\IsvUserSaveRequest\userList\certList;
use AlibabaCloud\Tea\Model;

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
     * @example 10
     *
     * @var int
     */
    public $departId;

    /**
     * @example 123@163.com
     *
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
     * @example 8797
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
     * @example 123456
     *
     * @var string
     */
    public $managerUserId;

    /**
     * @example 15364762829
     *
     * @var string
     */
    public $phone;

    /**
     * @var string
     */
    public $position;

    /**
     * @example 20
     *
     * @var string
     */
    public $positionLevel;

    /**
     * @example ceshi
     *
     * @var string
     */
    public $realNameEn;

    /**
     * @example 123
     *
     * @var string
     */
    public $thirdDepartId;

    /**
     * @var string[]
     */
    public $thirdDepartIdList;

    /**
     * @description This parameter is required.
     *
     * @example 123
     *
     * @var string
     */
    public $userId;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $userName;

    /**
     * @var string
     */
    public $userNick;
    protected $_name = [
        'baseCityCode'      => 'base_city_code',
        'birthday'          => 'birthday',
        'certList'          => 'cert_list',
        'departId'          => 'depart_id',
        'email'             => 'email',
        'gender'            => 'gender',
        'isAdmin'           => 'is_admin',
        'jobNo'             => 'job_no',
        'leaveStatus'       => 'leave_status',
        'managerUserId'     => 'manager_user_id',
        'phone'             => 'phone',
        'position'          => 'position',
        'positionLevel'     => 'position_level',
        'realNameEn'        => 'real_name_en',
        'thirdDepartId'     => 'third_depart_id',
        'thirdDepartIdList' => 'third_depart_id_list',
        'userId'            => 'user_id',
        'userName'          => 'user_name',
        'userNick'          => 'user_nick',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->baseCityCode) {
            $res['base_city_code'] = $this->baseCityCode;
        }
        if (null !== $this->birthday) {
            $res['birthday'] = $this->birthday;
        }
        if (null !== $this->certList) {
            $res['cert_list'] = [];
            if (null !== $this->certList && \is_array($this->certList)) {
                $n = 0;
                foreach ($this->certList as $item) {
                    $res['cert_list'][$n++] = null !== $item ? $item->toMap() : $item;
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
        if (null !== $this->thirdDepartId) {
            $res['third_depart_id'] = $this->thirdDepartId;
        }
        if (null !== $this->thirdDepartIdList) {
            $res['third_depart_id_list'] = $this->thirdDepartIdList;
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

    /**
     * @param array $map
     *
     * @return userList
     */
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
                $n               = 0;
                foreach ($map['cert_list'] as $item) {
                    $model->certList[$n++] = null !== $item ? certList::fromMap($item) : $item;
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
        if (isset($map['third_depart_id'])) {
            $model->thirdDepartId = $map['third_depart_id'];
        }
        if (isset($map['third_depart_id_list'])) {
            if (!empty($map['third_depart_id_list'])) {
                $model->thirdDepartIdList = $map['third_depart_id_list'];
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
