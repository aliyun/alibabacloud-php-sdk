<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\InsureOrderCreateRequest\insPersonAndSegmentList;

use AlibabaCloud\Tea\Model;

class insured extends Model
{
    /**
     * @example 2000-11-01
     *
     * @var string
     */
    public $birthday;

    /**
     * @example 20202109390122
     *
     * @var string
     */
    public $btripUserId;

    /**
     * @var string
     */
    public $certName;

    /**
     * @example 110102200011018872
     *
     * @var string
     */
    public $certNo;

    /**
     * @example 100
     *
     * @var string
     */
    public $certType;

    /**
     * @example F
     *
     * @var string
     */
    public $gender;

    /**
     * @example 1000000
     *
     * @var string
     */
    public $phone;
    protected $_name = [
        'birthday'    => 'birthday',
        'btripUserId' => 'btrip_user_id',
        'certName'    => 'cert_name',
        'certNo'      => 'cert_no',
        'certType'    => 'cert_type',
        'gender'      => 'gender',
        'phone'       => 'phone',
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

    /**
     * @param array $map
     *
     * @return insured
     */
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
