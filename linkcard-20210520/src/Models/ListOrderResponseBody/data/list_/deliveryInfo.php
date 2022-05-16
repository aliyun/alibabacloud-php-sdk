<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkcard\V20210520\Models\ListOrderResponseBody\data\list_;

use AlibabaCloud\Tea\Model;

class deliveryInfo extends Model
{
    /**
     * @var string
     */
    public $address;

    /**
     * @var string
     */
    public $buyerMessage;

    /**
     * @var string
     */
    public $mail;

    /**
     * @var string
     */
    public $receiver;

    /**
     * @var string
     */
    public $zipCode;
    protected $_name = [
        'address'      => 'Address',
        'buyerMessage' => 'BuyerMessage',
        'mail'         => 'Mail',
        'receiver'     => 'Receiver',
        'zipCode'      => 'ZipCode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->address) {
            $res['Address'] = $this->address;
        }
        if (null !== $this->buyerMessage) {
            $res['BuyerMessage'] = $this->buyerMessage;
        }
        if (null !== $this->mail) {
            $res['Mail'] = $this->mail;
        }
        if (null !== $this->receiver) {
            $res['Receiver'] = $this->receiver;
        }
        if (null !== $this->zipCode) {
            $res['ZipCode'] = $this->zipCode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return deliveryInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Address'])) {
            $model->address = $map['Address'];
        }
        if (isset($map['BuyerMessage'])) {
            $model->buyerMessage = $map['BuyerMessage'];
        }
        if (isset($map['Mail'])) {
            $model->mail = $map['Mail'];
        }
        if (isset($map['Receiver'])) {
            $model->receiver = $map['Receiver'];
        }
        if (isset($map['ZipCode'])) {
            $model->zipCode = $map['ZipCode'];
        }

        return $model;
    }
}
