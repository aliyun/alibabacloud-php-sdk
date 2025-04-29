<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\InsureOrderDetailResponseBody\module\insureOrderDetailList;

use AlibabaCloud\Dara\Model;

class insured extends Model
{
    /**
     * @var string
     */
    public $birthday;

    /**
     * @var string
     */
    public $btripUserId;

    /**
     * @var string
     */
    public $certName;

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
    public $gender;

    /**
     * @var string
     */
    public $phone;
    protected $_name = [
        'birthday' => 'birthday',
        'btripUserId' => 'btrip_user_id',
        'certName' => 'cert_name',
        'certNo' => 'cert_no',
        'certType' => 'cert_type',
        'gender' => 'gender',
        'phone' => 'phone',
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

        if (null !== $this->btripUserId) {
            $res['btrip_user_id'] = $this->btripUserId;
        }

        if (null !== $this->certName) {
            $res['cert_name'] = $this->certName;
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

        if (null !== $this->phone) {
            $res['phone'] = $this->phone;
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

        if (isset($map['btrip_user_id'])) {
            $model->btripUserId = $map['btrip_user_id'];
        }

        if (isset($map['cert_name'])) {
            $model->certName = $map['cert_name'];
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

        if (isset($map['phone'])) {
            $model->phone = $map['phone'];
        }

        return $model;
    }
}
