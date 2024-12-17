<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models;

use AlibabaCloud\SDK\BtripOpen\V20220520\Models\UpdateEmployeeRequest\certList;
use AlibabaCloud\Tea\Model;

class UpdateEmployeeRequest extends Model
{
    /**
     * @var string
     */
    public $attribute;

    /**
     * @example https://static-legacy.dingtalk.com/media/lADPF8XMoxJeUkbNA2LNA5s_923_866.jpg
     *
     * @var string
     */
    public $avatar;

    /**
     * @var string[]
     */
    public $baseCityCodeList;

    /**
     * @example 2000-01-02
     *
     * @var string
     */
    public $birthday;

    /**
     * @var certList[]
     */
    public $certList;

    /**
     * @var string[]
     */
    public $customRoleCodeList;

    /**
     * @example 123@163.com
     *
     * @var string
     */
    public $email;

    /**
     * @example F
     *
     * @var string
     */
    public $gender;

    /**
     * @example false
     *
     * @var bool
     */
    public $isAdmin;

    /**
     * @example false
     *
     * @var bool
     */
    public $isBoss;

    /**
     * @example false
     *
     * @var bool
     */
    public $isDeptLeader;

    /**
     * @example 1001
     *
     * @var string
     */
    public $jobNo;

    /**
     * @example user456
     *
     * @var string
     */
    public $managerUserId;

    /**
     * @var string[]
     */
    public $outDeptIdList;

    /**
     * @example 13111111111
     *
     * @var string
     */
    public $phone;

    /**
     * @example M4
     *
     * @var string
     */
    public $positionLevel;

    /**
     * @var string
     */
    public $realName;

    /**
     * @example John/Wilson
     *
     * @var string
     */
    public $realNameEn;

    /**
     * @description This parameter is required.
     *
     * @example user123
     *
     * @var string
     */
    public $userId;

    /**
     * @var string
     */
    public $userNick;
    protected $_name = [
        'attribute'          => 'attribute',
        'avatar'             => 'avatar',
        'baseCityCodeList'   => 'base_city_code_list',
        'birthday'           => 'birthday',
        'certList'           => 'cert_list',
        'customRoleCodeList' => 'custom_role_code_list',
        'email'              => 'email',
        'gender'             => 'gender',
        'isAdmin'            => 'is_admin',
        'isBoss'             => 'is_boss',
        'isDeptLeader'       => 'is_dept_leader',
        'jobNo'              => 'job_no',
        'managerUserId'      => 'manager_user_id',
        'outDeptIdList'      => 'out_dept_id_list',
        'phone'              => 'phone',
        'positionLevel'      => 'position_level',
        'realName'           => 'real_name',
        'realNameEn'         => 'real_name_en',
        'userId'             => 'user_id',
        'userNick'           => 'user_nick',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->attribute) {
            $res['attribute'] = $this->attribute;
        }
        if (null !== $this->avatar) {
            $res['avatar'] = $this->avatar;
        }
        if (null !== $this->baseCityCodeList) {
            $res['base_city_code_list'] = $this->baseCityCodeList;
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
        if (null !== $this->customRoleCodeList) {
            $res['custom_role_code_list'] = $this->customRoleCodeList;
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
        if (null !== $this->isBoss) {
            $res['is_boss'] = $this->isBoss;
        }
        if (null !== $this->isDeptLeader) {
            $res['is_dept_leader'] = $this->isDeptLeader;
        }
        if (null !== $this->jobNo) {
            $res['job_no'] = $this->jobNo;
        }
        if (null !== $this->managerUserId) {
            $res['manager_user_id'] = $this->managerUserId;
        }
        if (null !== $this->outDeptIdList) {
            $res['out_dept_id_list'] = $this->outDeptIdList;
        }
        if (null !== $this->phone) {
            $res['phone'] = $this->phone;
        }
        if (null !== $this->positionLevel) {
            $res['position_level'] = $this->positionLevel;
        }
        if (null !== $this->realName) {
            $res['real_name'] = $this->realName;
        }
        if (null !== $this->realNameEn) {
            $res['real_name_en'] = $this->realNameEn;
        }
        if (null !== $this->userId) {
            $res['user_id'] = $this->userId;
        }
        if (null !== $this->userNick) {
            $res['user_nick'] = $this->userNick;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateEmployeeRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['attribute'])) {
            $model->attribute = $map['attribute'];
        }
        if (isset($map['avatar'])) {
            $model->avatar = $map['avatar'];
        }
        if (isset($map['base_city_code_list'])) {
            if (!empty($map['base_city_code_list'])) {
                $model->baseCityCodeList = $map['base_city_code_list'];
            }
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
        if (isset($map['custom_role_code_list'])) {
            if (!empty($map['custom_role_code_list'])) {
                $model->customRoleCodeList = $map['custom_role_code_list'];
            }
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
        if (isset($map['is_boss'])) {
            $model->isBoss = $map['is_boss'];
        }
        if (isset($map['is_dept_leader'])) {
            $model->isDeptLeader = $map['is_dept_leader'];
        }
        if (isset($map['job_no'])) {
            $model->jobNo = $map['job_no'];
        }
        if (isset($map['manager_user_id'])) {
            $model->managerUserId = $map['manager_user_id'];
        }
        if (isset($map['out_dept_id_list'])) {
            if (!empty($map['out_dept_id_list'])) {
                $model->outDeptIdList = $map['out_dept_id_list'];
            }
        }
        if (isset($map['phone'])) {
            $model->phone = $map['phone'];
        }
        if (isset($map['position_level'])) {
            $model->positionLevel = $map['position_level'];
        }
        if (isset($map['real_name'])) {
            $model->realName = $map['real_name'];
        }
        if (isset($map['real_name_en'])) {
            $model->realNameEn = $map['real_name_en'];
        }
        if (isset($map['user_id'])) {
            $model->userId = $map['user_id'];
        }
        if (isset($map['user_nick'])) {
            $model->userNick = $map['user_nick'];
        }

        return $model;
    }
}
