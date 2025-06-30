<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\AddEmployeeRequest\baseLocationList;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\AddEmployeeRequest\certList;

class AddEmployeeRequest extends Model
{
    /**
     * @var string
     */
    public $attribute;

    /**
     * @var string
     */
    public $avatar;

    /**
     * @var string[]
     */
    public $baseCityCodeList;

    /**
     * @var baseLocationList[]
     */
    public $baseLocationList;

    /**
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
     * @var bool
     */
    public $isBoss;

    /**
     * @var bool
     */
    public $isDeptLeader;

    /**
     * @var string
     */
    public $jobNo;

    /**
     * @var string
     */
    public $managerUserId;

    /**
     * @var string[]
     */
    public $outDeptIdList;

    /**
     * @var string
     */
    public $phone;

    /**
     * @var string
     */
    public $positionLevel;

    /**
     * @var string
     */
    public $realName;

    /**
     * @var string
     */
    public $realNameEn;

    /**
     * @var string
     */
    public $unionId;

    /**
     * @var string
     */
    public $userId;

    /**
     * @var string
     */
    public $userNick;
    protected $_name = [
        'attribute' => 'attribute',
        'avatar' => 'avatar',
        'baseCityCodeList' => 'base_city_code_list',
        'baseLocationList' => 'base_location_list',
        'birthday' => 'birthday',
        'certList' => 'cert_list',
        'customRoleCodeList' => 'custom_role_code_list',
        'email' => 'email',
        'gender' => 'gender',
        'isAdmin' => 'is_admin',
        'isBoss' => 'is_boss',
        'isDeptLeader' => 'is_dept_leader',
        'jobNo' => 'job_no',
        'managerUserId' => 'manager_user_id',
        'outDeptIdList' => 'out_dept_id_list',
        'phone' => 'phone',
        'positionLevel' => 'position_level',
        'realName' => 'real_name',
        'realNameEn' => 'real_name_en',
        'unionId' => 'union_id',
        'userId' => 'user_id',
        'userNick' => 'user_nick',
    ];

    public function validate()
    {
        if (\is_array($this->baseCityCodeList)) {
            Model::validateArray($this->baseCityCodeList);
        }
        if (\is_array($this->baseLocationList)) {
            Model::validateArray($this->baseLocationList);
        }
        if (\is_array($this->certList)) {
            Model::validateArray($this->certList);
        }
        if (\is_array($this->customRoleCodeList)) {
            Model::validateArray($this->customRoleCodeList);
        }
        if (\is_array($this->outDeptIdList)) {
            Model::validateArray($this->outDeptIdList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->attribute) {
            $res['attribute'] = $this->attribute;
        }

        if (null !== $this->avatar) {
            $res['avatar'] = $this->avatar;
        }

        if (null !== $this->baseCityCodeList) {
            if (\is_array($this->baseCityCodeList)) {
                $res['base_city_code_list'] = [];
                $n1 = 0;
                foreach ($this->baseCityCodeList as $item1) {
                    $res['base_city_code_list'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->baseLocationList) {
            if (\is_array($this->baseLocationList)) {
                $res['base_location_list'] = [];
                $n1 = 0;
                foreach ($this->baseLocationList as $item1) {
                    $res['base_location_list'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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

        if (null !== $this->customRoleCodeList) {
            if (\is_array($this->customRoleCodeList)) {
                $res['custom_role_code_list'] = [];
                $n1 = 0;
                foreach ($this->customRoleCodeList as $item1) {
                    $res['custom_role_code_list'][$n1] = $item1;
                    ++$n1;
                }
            }
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
            if (\is_array($this->outDeptIdList)) {
                $res['out_dept_id_list'] = [];
                $n1 = 0;
                foreach ($this->outDeptIdList as $item1) {
                    $res['out_dept_id_list'][$n1] = $item1;
                    ++$n1;
                }
            }
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

        if (null !== $this->unionId) {
            $res['union_id'] = $this->unionId;
        }

        if (null !== $this->userId) {
            $res['user_id'] = $this->userId;
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
        if (isset($map['attribute'])) {
            $model->attribute = $map['attribute'];
        }

        if (isset($map['avatar'])) {
            $model->avatar = $map['avatar'];
        }

        if (isset($map['base_city_code_list'])) {
            if (!empty($map['base_city_code_list'])) {
                $model->baseCityCodeList = [];
                $n1 = 0;
                foreach ($map['base_city_code_list'] as $item1) {
                    $model->baseCityCodeList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['base_location_list'])) {
            if (!empty($map['base_location_list'])) {
                $model->baseLocationList = [];
                $n1 = 0;
                foreach ($map['base_location_list'] as $item1) {
                    $model->baseLocationList[$n1] = baseLocationList::fromMap($item1);
                    ++$n1;
                }
            }
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

        if (isset($map['custom_role_code_list'])) {
            if (!empty($map['custom_role_code_list'])) {
                $model->customRoleCodeList = [];
                $n1 = 0;
                foreach ($map['custom_role_code_list'] as $item1) {
                    $model->customRoleCodeList[$n1] = $item1;
                    ++$n1;
                }
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
                $model->outDeptIdList = [];
                $n1 = 0;
                foreach ($map['out_dept_id_list'] as $item1) {
                    $model->outDeptIdList[$n1] = $item1;
                    ++$n1;
                }
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

        if (isset($map['union_id'])) {
            $model->unionId = $map['union_id'];
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
