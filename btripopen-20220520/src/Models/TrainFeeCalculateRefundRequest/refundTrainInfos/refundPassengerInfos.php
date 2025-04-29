<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\TrainFeeCalculateRefundRequest\refundTrainInfos;

use AlibabaCloud\Dara\Model;

class refundPassengerInfos extends Model
{
    /**
     * @var string
     */
    public $passengerCertNo;

    /**
     * @var string
     */
    public $passengerCertType;

    /**
     * @var string
     */
    public $passengerId;

    /**
     * @var string
     */
    public $passengerName;
    protected $_name = [
        'passengerCertNo' => 'passenger_cert_no',
        'passengerCertType' => 'passenger_cert_type',
        'passengerId' => 'passenger_id',
        'passengerName' => 'passenger_name',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->passengerCertNo) {
            $res['passenger_cert_no'] = $this->passengerCertNo;
        }

        if (null !== $this->passengerCertType) {
            $res['passenger_cert_type'] = $this->passengerCertType;
        }

        if (null !== $this->passengerId) {
            $res['passenger_id'] = $this->passengerId;
        }

        if (null !== $this->passengerName) {
            $res['passenger_name'] = $this->passengerName;
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
        if (isset($map['passenger_cert_no'])) {
            $model->passengerCertNo = $map['passenger_cert_no'];
        }

        if (isset($map['passenger_cert_type'])) {
            $model->passengerCertType = $map['passenger_cert_type'];
        }

        if (isset($map['passenger_id'])) {
            $model->passengerId = $map['passenger_id'];
        }

        if (isset($map['passenger_name'])) {
            $model->passengerName = $map['passenger_name'];
        }

        return $model;
    }
}
