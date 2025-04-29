<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\HotelOrderPreValidateRequest;

use AlibabaCloud\Dara\Model;

class occupantInfoList extends Model
{
    /**
     * @var string
     */
    public $cardNo;

    /**
     * @var int
     */
    public $cardType;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $phone;

    /**
     * @var string
     */
    public $staffNo;

    /**
     * @var int
     */
    public $userType;
    protected $_name = [
        'cardNo' => 'card_no',
        'cardType' => 'card_type',
        'name' => 'name',
        'phone' => 'phone',
        'staffNo' => 'staff_no',
        'userType' => 'user_type',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
