<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20220531\Models\RenderDistributionOrderResponseBody\model;

use AlibabaCloud\Tea\Model;

class addressInfos extends Model
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
     * @var bool
     */
    public $isDefault;

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
        'addressDetail'    => 'AddressDetail',
        'addressId'        => 'AddressId',
        'divisionCode'     => 'DivisionCode',
        'isDefault'        => 'IsDefault',
        'receiver'         => 'Receiver',
        'receiverPhone'    => 'ReceiverPhone',
        'townDivisionCode' => 'TownDivisionCode',
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
        if (null !== $this->divisionCode) {
            $res['DivisionCode'] = $this->divisionCode;
        }
        if (null !== $this->isDefault) {
            $res['IsDefault'] = $this->isDefault;
        }
        if (null !== $this->receiver) {
            $res['Receiver'] = $this->receiver;
        }
        if (null !== $this->receiverPhone) {
            $res['ReceiverPhone'] = $this->receiverPhone;
        }
        if (null !== $this->townDivisionCode) {
            $res['TownDivisionCode'] = $this->townDivisionCode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return addressInfos
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
        if (isset($map['DivisionCode'])) {
            $model->divisionCode = $map['DivisionCode'];
        }
        if (isset($map['IsDefault'])) {
            $model->isDefault = $map['IsDefault'];
        }
        if (isset($map['Receiver'])) {
            $model->receiver = $map['Receiver'];
        }
        if (isset($map['ReceiverPhone'])) {
            $model->receiverPhone = $map['ReceiverPhone'];
        }
        if (isset($map['TownDivisionCode'])) {
            $model->townDivisionCode = $map['TownDivisionCode'];
        }

        return $model;
    }
}
