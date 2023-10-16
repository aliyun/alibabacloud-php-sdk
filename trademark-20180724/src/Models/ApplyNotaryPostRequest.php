<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Trademark\V20180724\Models;

use AlibabaCloud\Tea\Model;

class ApplyNotaryPostRequest extends Model
{
    /**
     * @var int
     */
    public $notaryOrderId;

    /**
     * @var string
     */
    public $receiverAddress;

    /**
     * @var string
     */
    public $receiverName;

    /**
     * @var string
     */
    public $receiverPhone;
    protected $_name = [
        'notaryOrderId'   => 'NotaryOrderId',
        'receiverAddress' => 'ReceiverAddress',
        'receiverName'    => 'ReceiverName',
        'receiverPhone'   => 'ReceiverPhone',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->notaryOrderId) {
            $res['NotaryOrderId'] = $this->notaryOrderId;
        }
        if (null !== $this->receiverAddress) {
            $res['ReceiverAddress'] = $this->receiverAddress;
        }
        if (null !== $this->receiverName) {
            $res['ReceiverName'] = $this->receiverName;
        }
        if (null !== $this->receiverPhone) {
            $res['ReceiverPhone'] = $this->receiverPhone;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ApplyNotaryPostRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NotaryOrderId'])) {
            $model->notaryOrderId = $map['NotaryOrderId'];
        }
        if (isset($map['ReceiverAddress'])) {
            $model->receiverAddress = $map['ReceiverAddress'];
        }
        if (isset($map['ReceiverName'])) {
            $model->receiverName = $map['ReceiverName'];
        }
        if (isset($map['ReceiverPhone'])) {
            $model->receiverPhone = $map['ReceiverPhone'];
        }

        return $model;
    }
}
