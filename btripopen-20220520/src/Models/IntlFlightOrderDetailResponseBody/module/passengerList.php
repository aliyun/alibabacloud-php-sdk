<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\IntlFlightOrderDetailResponseBody\module;

use AlibabaCloud\Dara\Model;

class passengerList extends Model
{
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
     * @var int
     */
    public $passengerId;

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
        'fullName' => 'full_name',
        'gender' => 'gender',
        'jobNo' => 'job_no',
        'nationality' => 'nationality',
        'nationalityCode' => 'nationality_code',
        'passengerId' => 'passenger_id',
        'type' => 'type',
        'userId' => 'user_id',
        'userType' => 'user_type',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
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

        if (null !== $this->passengerId) {
            $res['passenger_id'] = $this->passengerId;
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

        if (isset($map['passenger_id'])) {
            $model->passengerId = $map['passenger_id'];
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
