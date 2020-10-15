<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Tea\Model;

class DescribeBandWithdChargeTypeResponse extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $code;

    /**
     * @var string
     */
    public $bandWithTypeInfo;

    /**
     * @var string
     */
    public $chargeCycleInfo;

    /**
     * @var string
     */
    public $chargeContractType;
    protected $_name = [
        'requestId'          => 'RequestId',
        'code'               => 'Code',
        'bandWithTypeInfo'   => 'BandWithTypeInfo',
        'chargeCycleInfo'    => 'ChargeCycleInfo',
        'chargeContractType' => 'ChargeContractType',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('code', $this->code, true);
        Model::validateRequired('bandWithTypeInfo', $this->bandWithTypeInfo, true);
        Model::validateRequired('chargeCycleInfo', $this->chargeCycleInfo, true);
        Model::validateRequired('chargeContractType', $this->chargeContractType, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->bandWithTypeInfo) {
            $res['BandWithTypeInfo'] = $this->bandWithTypeInfo;
        }
        if (null !== $this->chargeCycleInfo) {
            $res['ChargeCycleInfo'] = $this->chargeCycleInfo;
        }
        if (null !== $this->chargeContractType) {
            $res['ChargeContractType'] = $this->chargeContractType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeBandWithdChargeTypeResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['BandWithTypeInfo'])) {
            $model->bandWithTypeInfo = $map['BandWithTypeInfo'];
        }
        if (isset($map['ChargeCycleInfo'])) {
            $model->chargeCycleInfo = $map['ChargeCycleInfo'];
        }
        if (isset($map['ChargeContractType'])) {
            $model->chargeContractType = $map['ChargeContractType'];
        }

        return $model;
    }
}
