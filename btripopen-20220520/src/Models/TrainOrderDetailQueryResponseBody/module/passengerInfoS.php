<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\TrainOrderDetailQueryResponseBody\module;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\TrainOrderDetailQueryResponseBody\module\passengerInfoS\costCenterInfo;

class passengerInfoS extends Model
{
    /**
     * @var costCenterInfo
     */
    public $costCenterInfo;

    /**
     * @var string
     */
    public $countryCode;

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
    public $passengerMobile;

    /**
     * @var string
     */
    public $passengerName;

    /**
     * @var string
     */
    public $validDateEnd;
    protected $_name = [
        'costCenterInfo' => 'cost_center_info',
        'countryCode' => 'country_code',
        'passengerCertNo' => 'passenger_cert_no',
        'passengerCertType' => 'passenger_cert_type',
        'passengerId' => 'passenger_id',
        'passengerMobile' => 'passenger_mobile',
        'passengerName' => 'passenger_name',
        'validDateEnd' => 'valid_date_end',
    ];

    public function validate()
    {
        if (null !== $this->costCenterInfo) {
            $this->costCenterInfo->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->costCenterInfo) {
            $res['cost_center_info'] = null !== $this->costCenterInfo ? $this->costCenterInfo->toArray($noStream) : $this->costCenterInfo;
        }

        if (null !== $this->countryCode) {
            $res['country_code'] = $this->countryCode;
        }

        if (null !== $this->passengerCertNo) {
            $res['passenger_cert_no'] = $this->passengerCertNo;
        }

        if (null !== $this->passengerCertType) {
            $res['passenger_cert_type'] = $this->passengerCertType;
        }

        if (null !== $this->passengerId) {
            $res['passenger_id'] = $this->passengerId;
        }

        if (null !== $this->passengerMobile) {
            $res['passenger_mobile'] = $this->passengerMobile;
        }

        if (null !== $this->passengerName) {
            $res['passenger_name'] = $this->passengerName;
        }

        if (null !== $this->validDateEnd) {
            $res['valid_date_end'] = $this->validDateEnd;
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
        if (isset($map['cost_center_info'])) {
            $model->costCenterInfo = costCenterInfo::fromMap($map['cost_center_info']);
        }

        if (isset($map['country_code'])) {
            $model->countryCode = $map['country_code'];
        }

        if (isset($map['passenger_cert_no'])) {
            $model->passengerCertNo = $map['passenger_cert_no'];
        }

        if (isset($map['passenger_cert_type'])) {
            $model->passengerCertType = $map['passenger_cert_type'];
        }

        if (isset($map['passenger_id'])) {
            $model->passengerId = $map['passenger_id'];
        }

        if (isset($map['passenger_mobile'])) {
            $model->passengerMobile = $map['passenger_mobile'];
        }

        if (isset($map['passenger_name'])) {
            $model->passengerName = $map['passenger_name'];
        }

        if (isset($map['valid_date_end'])) {
            $model->validDateEnd = $map['valid_date_end'];
        }

        return $model;
    }
}
