<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\GroupUserSaveRequest\certList;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\GroupUserSaveRequest\subCorpIdList;

class GroupUserSaveRequest extends Model
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
     * @var string
     */
    public $gender;

    /**
     * @var string
     */
    public $jobNo;

    /**
     * @var string
     */
    public $phone;

    /**
     * @var string
     */
    public $realNameEn;

    /**
     * @var subCorpIdList[]
     */
    public $subCorpIdList;

    /**
     * @var string
     */
    public $userId;

    /**
     * @var string
     */
    public $userName;
    protected $_name = [
        'baseCityCode' => 'base_city_code',
        'birthday' => 'birthday',
        'certList' => 'cert_list',
        'gender' => 'gender',
        'jobNo' => 'job_no',
        'phone' => 'phone',
        'realNameEn' => 'real_name_en',
        'subCorpIdList' => 'sub_corp_id_list',
        'userId' => 'user_id',
        'userName' => 'user_name',
    ];

    public function validate()
    {
        if (\is_array($this->certList)) {
            Model::validateArray($this->certList);
        }
        if (\is_array($this->subCorpIdList)) {
            Model::validateArray($this->subCorpIdList);
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

        if (null !== $this->gender) {
            $res['gender'] = $this->gender;
        }

        if (null !== $this->jobNo) {
            $res['job_no'] = $this->jobNo;
        }

        if (null !== $this->phone) {
            $res['phone'] = $this->phone;
        }

        if (null !== $this->realNameEn) {
            $res['real_name_en'] = $this->realNameEn;
        }

        if (null !== $this->subCorpIdList) {
            if (\is_array($this->subCorpIdList)) {
                $res['sub_corp_id_list'] = [];
                $n1 = 0;
                foreach ($this->subCorpIdList as $item1) {
                    $res['sub_corp_id_list'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

        if (isset($map['gender'])) {
            $model->gender = $map['gender'];
        }

        if (isset($map['job_no'])) {
            $model->jobNo = $map['job_no'];
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
                $n1 = 0;
                foreach ($map['sub_corp_id_list'] as $item1) {
                    $model->subCorpIdList[$n1] = subCorpIdList::fromMap($item1);
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

        return $model;
    }
}
