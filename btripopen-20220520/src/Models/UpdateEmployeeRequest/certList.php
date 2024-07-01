<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\UpdateEmployeeRequest;

use AlibabaCloud\Tea\Model;

class certList extends Model
{
    /**
     * @example 2000-01-02
     *
     * @var string
     */
    public $birthday;

    /**
     * @example 2099-03-12
     *
     * @var string
     */
    public $certExpiredTime;

    /**
     * @example CN
     *
     * @var string
     */
    public $certNation;

    /**
     * @example 123
     *
     * @var string
     */
    public $certNo;

    /**
     * @example 0
     *
     * @var int
     */
    public $certType;

    /**
     * @example F
     *
     * @var string
     */
    public $gender;

    /**
     * @example CN
     *
     * @var string
     */
    public $nationality;

    /**
     * @example 13111111111
     *
     * @var string
     */
    public $phone;

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
    protected $_name = [
        'birthday'        => 'birthday',
        'certExpiredTime' => 'cert_expired_time',
        'certNation'      => 'cert_nation',
        'certNo'          => 'cert_no',
        'certType'        => 'cert_type',
        'gender'          => 'gender',
        'nationality'     => 'nationality',
        'phone'           => 'phone',
        'realName'        => 'real_name',
        'realNameEn'      => 'real_name_en',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->birthday) {
            $res['birthday'] = $this->birthday;
        }
        if (null !== $this->certExpiredTime) {
            $res['cert_expired_time'] = $this->certExpiredTime;
        }
        if (null !== $this->certNation) {
            $res['cert_nation'] = $this->certNation;
        }
        if (null !== $this->certNo) {
            $res['cert_no'] = $this->certNo;
        }
        if (null !== $this->certType) {
            $res['cert_type'] = $this->certType;
        }
        if (null !== $this->gender) {
            $res['gender'] = $this->gender;
        }
        if (null !== $this->nationality) {
            $res['nationality'] = $this->nationality;
        }
        if (null !== $this->phone) {
            $res['phone'] = $this->phone;
        }
        if (null !== $this->realName) {
            $res['real_name'] = $this->realName;
        }
        if (null !== $this->realNameEn) {
            $res['real_name_en'] = $this->realNameEn;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return certList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['birthday'])) {
            $model->birthday = $map['birthday'];
        }
        if (isset($map['cert_expired_time'])) {
            $model->certExpiredTime = $map['cert_expired_time'];
        }
        if (isset($map['cert_nation'])) {
            $model->certNation = $map['cert_nation'];
        }
        if (isset($map['cert_no'])) {
            $model->certNo = $map['cert_no'];
        }
        if (isset($map['cert_type'])) {
            $model->certType = $map['cert_type'];
        }
        if (isset($map['gender'])) {
            $model->gender = $map['gender'];
        }
        if (isset($map['nationality'])) {
            $model->nationality = $map['nationality'];
        }
        if (isset($map['phone'])) {
            $model->phone = $map['phone'];
        }
        if (isset($map['real_name'])) {
            $model->realName = $map['real_name'];
        }
        if (isset($map['real_name_en'])) {
            $model->realNameEn = $map['real_name_en'];
        }

        return $model;
    }
}
