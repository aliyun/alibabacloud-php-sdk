<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightCreateOrderRequest;

use AlibabaCloud\Dara\Model;

class travelerInfoList extends Model
{
    /**
     * @var string
     */
    public $birthday;

    /**
     * @var string
     */
    public $certNation;

    /**
     * @var string
     */
    public $certNo;

    /**
     * @var string
     */
    public $certType;

    /**
     * @var string
     */
    public $certValidDate;

    /**
     * @var string
     */
    public $name;

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
    public $outUserId;

    /**
     * @var string
     */
    public $phone;

    /**
     * @var int
     */
    public $sex;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'birthday' => 'birthday',
        'certNation' => 'cert_nation',
        'certNo' => 'cert_no',
        'certType' => 'cert_type',
        'certValidDate' => 'cert_valid_date',
        'name' => 'name',
        'nationality' => 'nationality',
        'nationalityCode' => 'nationality_code',
        'outUserId' => 'out_user_id',
        'phone' => 'phone',
        'sex' => 'sex',
        'type' => 'type',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->birthday) {
            $res['birthday'] = $this->birthday;
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

        if (null !== $this->certValidDate) {
            $res['cert_valid_date'] = $this->certValidDate;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->nationality) {
            $res['nationality'] = $this->nationality;
        }

        if (null !== $this->nationalityCode) {
            $res['nationality_code'] = $this->nationalityCode;
        }

        if (null !== $this->outUserId) {
            $res['out_user_id'] = $this->outUserId;
        }

        if (null !== $this->phone) {
            $res['phone'] = $this->phone;
        }

        if (null !== $this->sex) {
            $res['sex'] = $this->sex;
        }

        if (null !== $this->type) {
            $res['type'] = $this->type;
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

        if (isset($map['cert_nation'])) {
            $model->certNation = $map['cert_nation'];
        }

        if (isset($map['cert_no'])) {
            $model->certNo = $map['cert_no'];
        }

        if (isset($map['cert_type'])) {
            $model->certType = $map['cert_type'];
        }

        if (isset($map['cert_valid_date'])) {
            $model->certValidDate = $map['cert_valid_date'];
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['nationality'])) {
            $model->nationality = $map['nationality'];
        }

        if (isset($map['nationality_code'])) {
            $model->nationalityCode = $map['nationality_code'];
        }

        if (isset($map['out_user_id'])) {
            $model->outUserId = $map['out_user_id'];
        }

        if (isset($map['phone'])) {
            $model->phone = $map['phone'];
        }

        if (isset($map['sex'])) {
            $model->sex = $map['sex'];
        }

        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        return $model;
    }
}
