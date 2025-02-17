<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20230930\Models;

use AlibabaCloud\Dara\Model;

class AddressInfo extends Model
{
    /**
     * @var string
     */
    public $addressDetail;
    /**
     * @var int
     */
    public $addressId;
    /**
     * @var string
     */
    public $divisionCode;
    /**
     * @var string
     */
    public $receiver;
    /**
     * @var string
     */
    public $receiverPhone;
    /**
     * @var string
     */
    public $townDivisionCode;
    protected $_name = [
        'addressDetail'    => 'addressDetail',
        'addressId'        => 'addressId',
        'divisionCode'     => 'divisionCode',
        'receiver'         => 'receiver',
        'receiverPhone'    => 'receiverPhone',
        'townDivisionCode' => 'townDivisionCode',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->addressDetail) {
            $res['addressDetail'] = $this->addressDetail;
        }

        if (null !== $this->addressId) {
            $res['addressId'] = $this->addressId;
        }

        if (null !== $this->divisionCode) {
            $res['divisionCode'] = $this->divisionCode;
        }

        if (null !== $this->receiver) {
            $res['receiver'] = $this->receiver;
        }

        if (null !== $this->receiverPhone) {
            $res['receiverPhone'] = $this->receiverPhone;
        }

        if (null !== $this->townDivisionCode) {
            $res['townDivisionCode'] = $this->townDivisionCode;
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
        if (isset($map['addressDetail'])) {
            $model->addressDetail = $map['addressDetail'];
        }

        if (isset($map['addressId'])) {
            $model->addressId = $map['addressId'];
        }

        if (isset($map['divisionCode'])) {
            $model->divisionCode = $map['divisionCode'];
        }

        if (isset($map['receiver'])) {
            $model->receiver = $map['receiver'];
        }

        if (isset($map['receiverPhone'])) {
            $model->receiverPhone = $map['receiverPhone'];
        }

        if (isset($map['townDivisionCode'])) {
            $model->townDivisionCode = $map['townDivisionCode'];
        }

        return $model;
    }
}
