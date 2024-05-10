<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\TrainApplyRefundRequest\refundTrainInfos;

use AlibabaCloud\Tea\Model;

class refundPassengerInfos extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example 291487e553c5abde3b611aae283e2526f0d733ab55094aadc0b5ba587222a233c
     *
     * @var string
     */
    public $passengerCertNo;

    /**
     * @description This parameter is required.
     *
     * @example 170d9ac6f8807f9ec603c688f45f78a41
     *
     * @var string
     */
    public $passengerCertType;

    /**
     * @description This parameter is required.
     *
     * @example 12334
     *
     * @var string
     */
    public $passengerId;

    /**
     * @description This parameter is required.
     *
     * @example 949c9f34f677a0e5d249dfc94f5e62cc7
     *
     * @var string
     */
    public $passengerName;
    protected $_name = [
        'passengerCertNo'   => 'passenger_cert_no',
        'passengerCertType' => 'passenger_cert_type',
        'passengerId'       => 'passenger_id',
        'passengerName'     => 'passenger_name',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return refundPassengerInfos
     */
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
