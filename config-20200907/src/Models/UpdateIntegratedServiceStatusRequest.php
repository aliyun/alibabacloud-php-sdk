<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models;

use AlibabaCloud\Dara\Model;

class UpdateIntegratedServiceStatusRequest extends Model
{
    /**
     * @var string
     */
    public $aggregatorDeliveryDataType;

    /**
     * @var string
     */
    public $integratedTypes;

    /**
     * @var string
     */
    public $serviceCode;

    /**
     * @var bool
     */
    public $status;
    protected $_name = [
        'aggregatorDeliveryDataType' => 'AggregatorDeliveryDataType',
        'integratedTypes' => 'IntegratedTypes',
        'serviceCode' => 'ServiceCode',
        'status' => 'Status',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->aggregatorDeliveryDataType) {
            $res['AggregatorDeliveryDataType'] = $this->aggregatorDeliveryDataType;
        }

        if (null !== $this->integratedTypes) {
            $res['IntegratedTypes'] = $this->integratedTypes;
        }

        if (null !== $this->serviceCode) {
            $res['ServiceCode'] = $this->serviceCode;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
        if (isset($map['AggregatorDeliveryDataType'])) {
            $model->aggregatorDeliveryDataType = $map['AggregatorDeliveryDataType'];
        }

        if (isset($map['IntegratedTypes'])) {
            $model->integratedTypes = $map['IntegratedTypes'];
        }

        if (isset($map['ServiceCode'])) {
            $model->serviceCode = $map['ServiceCode'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
