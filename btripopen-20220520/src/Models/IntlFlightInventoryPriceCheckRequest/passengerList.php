<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\IntlFlightInventoryPriceCheckRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\IntlFlightInventoryPriceCheckRequest\passengerList\certInfo;

class passengerList extends Model
{
    /**
     * @var string
     */
    public $birthday;

    /**
     * @var certInfo
     */
    public $certInfo;

    /**
     * @var string
     */
    public $fullName;

    /**
     * @var int
     */
    public $gender;

    /**
     * @var string
     */
    public $jobNo;

    /**
     * @var string
     */
    public $nationality;

    /**
     * @var string
     */
    public $nationalityCode;

    /**
     * @var string
     */
    public $phone;

    /**
     * @var int
     */
    public $type;

    /**
     * @var string
     */
    public $userId;

    /**
     * @var int
     */
    public $userType;
    protected $_name = [
        'birthday' => 'birthday',
        'certInfo' => 'cert_info',
        'fullName' => 'full_name',
        'gender' => 'gender',
        'jobNo' => 'job_no',
        'nationality' => 'nationality',
        'nationalityCode' => 'nationality_code',
        'phone' => 'phone',
        'type' => 'type',
        'userId' => 'user_id',
        'userType' => 'user_type',
    ];

    public function validate()
    {
        if (null !== $this->certInfo) {
            $this->certInfo->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->birthday) {
            $res['birthday'] = $this->birthday;
        }

        if (null !== $this->certInfo) {
            $res['cert_info'] = null !== $this->certInfo ? $this->certInfo->toArray($noStream) : $this->certInfo;
        }

        if (null !== $this->fullName) {
            $res['full_name'] = $this->fullName;
        }

        if (null !== $this->gender) {
            $res['gender'] = $this->gender;
        }

        if (null !== $this->jobNo) {
            $res['job_no'] = $this->jobNo;
        }

        if (null !== $this->nationality) {
            $res['nationality'] = $this->nationality;
        }

        if (null !== $this->nationalityCode) {
            $res['nationality_code'] = $this->nationalityCode;
        }

        if (null !== $this->phone) {
            $res['phone'] = $this->phone;
        }

        if (null !== $this->type) {
            $res['type'] = $this->type;
        }

        if (null !== $this->userId) {
            $res['user_id'] = $this->userId;
        }

        if (null !== $this->userType) {
            $res['user_type'] = $this->userType;
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
        if (isset($map['birthday'])) {
            $model->birthday = $map['birthday'];
        }

        if (isset($map['cert_info'])) {
            $model->certInfo = certInfo::fromMap($map['cert_info']);
        }

        if (isset($map['full_name'])) {
            $model->fullName = $map['full_name'];
        }

        if (isset($map['gender'])) {
            $model->gender = $map['gender'];
        }

        if (isset($map['job_no'])) {
            $model->jobNo = $map['job_no'];
        }

        if (isset($map['nationality'])) {
            $model->nationality = $map['nationality'];
        }

        if (isset($map['nationality_code'])) {
            $model->nationalityCode = $map['nationality_code'];
        }

        if (isset($map['phone'])) {
            $model->phone = $map['phone'];
        }

        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        if (isset($map['user_id'])) {
            $model->userId = $map['user_id'];
        }

        if (isset($map['user_type'])) {
            $model->userType = $map['user_type'];
        }

        return $model;
    }
}
