<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\HotelOrderPreValidateRequest;

use AlibabaCloud\Tea\Model;

class occupantInfoList extends Model
{
    /**
     * @example 232871871822
     *
     * @var string
     */
    public $cardNo;

    /**
     * @example 1
     *
     * @var int
     */
    public $cardType;

    /**
     * @var string
     */
    public $name;

    /**
     * @example 12392827121
     *
     * @var string
     */
    public $phone;

    /**
     * @example 128918
     *
     * @var string
     */
    public $staffNo;

    /**
     * @example 1
     *
     * @var int
     */
    public $userType;
    protected $_name = [
        'cardNo'   => 'card_no',
        'cardType' => 'card_type',
        'name'     => 'name',
        'phone'    => 'phone',
        'staffNo'  => 'staff_no',
        'userType' => 'user_type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cardNo) {
            $res['card_no'] = $this->cardNo;
        }
        if (null !== $this->cardType) {
            $res['card_type'] = $this->cardType;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->phone) {
            $res['phone'] = $this->phone;
        }
        if (null !== $this->staffNo) {
            $res['staff_no'] = $this->staffNo;
        }
        if (null !== $this->userType) {
            $res['user_type'] = $this->userType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return occupantInfoList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['card_no'])) {
            $model->cardNo = $map['card_no'];
        }
        if (isset($map['card_type'])) {
            $model->cardType = $map['card_type'];
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['phone'])) {
            $model->phone = $map['phone'];
        }
        if (isset($map['staff_no'])) {
            $model->staffNo = $map['staff_no'];
        }
        if (isset($map['user_type'])) {
            $model->userType = $map['user_type'];
        }

        return $model;
    }
}
