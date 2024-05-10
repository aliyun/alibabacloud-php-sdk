<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models;

use AlibabaCloud\Tea\Model;

class GroupUserSaveShrinkRequest extends Model
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
     * @var string
     */
    public $certListShrink;

    /**
     * @var string
     */
    public $gender;

    /**
     * @example 1001
     *
     * @var string
     */
    public $jobNo;

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
     * @description This parameter is required.
     *
     * @var string
     */
    public $subCorpIdListShrink;

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
    protected $_name = [
        'baseCityCode'        => 'base_city_code',
        'birthday'            => 'birthday',
        'certListShrink'      => 'cert_list',
        'gender'              => 'gender',
        'jobNo'               => 'job_no',
        'phone'               => 'phone',
        'realNameEn'          => 'real_name_en',
        'subCorpIdListShrink' => 'sub_corp_id_list',
        'userId'              => 'user_id',
        'userName'            => 'user_name',
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
        if (null !== $this->certListShrink) {
            $res['cert_list'] = $this->certListShrink;
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
        if (null !== $this->subCorpIdListShrink) {
            $res['sub_corp_id_list'] = $this->subCorpIdListShrink;
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
     * @return GroupUserSaveShrinkRequest
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
            $model->certListShrink = $map['cert_list'];
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
            $model->subCorpIdListShrink = $map['sub_corp_id_list'];
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
