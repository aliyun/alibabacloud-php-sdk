<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models;

use AlibabaCloud\Dara\Model;

class GetIntegratedServiceStatusResponseBody extends Model
{
    /**
     * @var string
     */
    public $aggregatorDeliveryDataType;

    /**
     * @var bool
     */
    public $data;

    /**
     * @var string
     */
    public $integratedTypes;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'aggregatorDeliveryDataType' => 'AggregatorDeliveryDataType',
        'data' => 'Data',
        'integratedTypes' => 'IntegratedTypes',
        'requestId' => 'RequestId',
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

        if (null !== $this->data) {
            $res['Data'] = $this->data;
        }

        if (null !== $this->integratedTypes) {
            $res['IntegratedTypes'] = $this->integratedTypes;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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

        if (isset($map['Data'])) {
            $model->data = $map['Data'];
        }

        if (isset($map['IntegratedTypes'])) {
            $model->integratedTypes = $map['IntegratedTypes'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
