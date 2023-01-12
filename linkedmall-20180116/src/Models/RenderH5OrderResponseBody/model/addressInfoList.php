<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20180116\Models\RenderH5OrderResponseBody\model;

use AlibabaCloud\Tea\Model;

class addressInfoList extends Model
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
     * @example true
     *
     * @var bool
     */
    public $default;

    /**
     * @example 410223
     *
     * @var string
     */
    public $divisionCode;

    /**
     * @var string
     */
    public $receiver;

    /**
     * @example 158****3627
     *
     * @var string
     */
    public $receiverPhone;
    protected $_name = [
        'addressDetail' => 'AddressDetail',
        'addressId'     => 'AddressId',
        'default'       => 'Default',
        'divisionCode'  => 'DivisionCode',
        'receiver'      => 'Receiver',
        'receiverPhone' => 'ReceiverPhone',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->addressDetail) {
            $res['AddressDetail'] = $this->addressDetail;
        }
        if (null !== $this->addressId) {
            $res['AddressId'] = $this->addressId;
        }
        if (null !== $this->default) {
            $res['Default'] = $this->default;
        }
        if (null !== $this->divisionCode) {
            $res['DivisionCode'] = $this->divisionCode;
        }
        if (null !== $this->receiver) {
            $res['Receiver'] = $this->receiver;
        }
        if (null !== $this->receiverPhone) {
            $res['ReceiverPhone'] = $this->receiverPhone;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return addressInfoList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AddressDetail'])) {
            $model->addressDetail = $map['AddressDetail'];
        }
        if (isset($map['AddressId'])) {
            $model->addressId = $map['AddressId'];
        }
        if (isset($map['Default'])) {
            $model->default = $map['Default'];
        }
        if (isset($map['DivisionCode'])) {
            $model->divisionCode = $map['DivisionCode'];
        }
        if (isset($map['Receiver'])) {
            $model->receiver = $map['Receiver'];
        }
        if (isset($map['ReceiverPhone'])) {
            $model->receiverPhone = $map['ReceiverPhone'];
        }

        return $model;
    }
}
