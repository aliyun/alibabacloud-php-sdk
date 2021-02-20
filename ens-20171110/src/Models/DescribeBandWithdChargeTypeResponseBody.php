<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Tea\Model;

class DescribeBandWithdChargeTypeResponseBody extends Model
{
    /**
     * @var string
     */
    public $bandWithTypeInfo;

    /**
     * @var string
     */
    public $chargeContractType;

    /**
     * @var string
     */
    public $chargeCycleInfo;

    /**
     * @var int
     */
    public $code;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'bandWithTypeInfo'   => 'BandWithTypeInfo',
        'chargeContractType' => 'ChargeContractType',
        'chargeCycleInfo'    => 'ChargeCycleInfo',
        'code'               => 'Code',
        'requestId'          => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bandWithTypeInfo) {
            $res['BandWithTypeInfo'] = $this->bandWithTypeInfo;
        }
        if (null !== $this->chargeContractType) {
            $res['ChargeContractType'] = $this->chargeContractType;
        }
        if (null !== $this->chargeCycleInfo) {
            $res['ChargeCycleInfo'] = $this->chargeCycleInfo;
        }
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeBandWithdChargeTypeResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BandWithTypeInfo'])) {
            $model->bandWithTypeInfo = $map['BandWithTypeInfo'];
        }
        if (isset($map['ChargeContractType'])) {
            $model->chargeContractType = $map['ChargeContractType'];
        }
        if (isset($map['ChargeCycleInfo'])) {
            $model->chargeCycleInfo = $map['ChargeCycleInfo'];
        }
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
