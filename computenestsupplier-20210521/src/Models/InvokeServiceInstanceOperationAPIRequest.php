<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models;

use AlibabaCloud\Tea\Model;

class InvokeServiceInstanceOperationAPIRequest extends Model
{
    /**
     * @var string
     */
    public $serviceInstanceId;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $operationProduct;

    /**
     * @var string
     */
    public $operationAction;

    /**
     * @var string
     */
    public $operationVersion;

    /**
     * @var string
     */
    public $operationParameters;
    protected $_name = [
        'serviceInstanceId'   => 'ServiceInstanceId',
        'regionId'            => 'RegionId',
        'operationProduct'    => 'OperationProduct',
        'operationAction'     => 'OperationAction',
        'operationVersion'    => 'OperationVersion',
        'operationParameters' => 'OperationParameters',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->serviceInstanceId) {
            $res['ServiceInstanceId'] = $this->serviceInstanceId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->operationProduct) {
            $res['OperationProduct'] = $this->operationProduct;
        }
        if (null !== $this->operationAction) {
            $res['OperationAction'] = $this->operationAction;
        }
        if (null !== $this->operationVersion) {
            $res['OperationVersion'] = $this->operationVersion;
        }
        if (null !== $this->operationParameters) {
            $res['OperationParameters'] = $this->operationParameters;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return InvokeServiceInstanceOperationAPIRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ServiceInstanceId'])) {
            $model->serviceInstanceId = $map['ServiceInstanceId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['OperationProduct'])) {
            $model->operationProduct = $map['OperationProduct'];
        }
        if (isset($map['OperationAction'])) {
            $model->operationAction = $map['OperationAction'];
        }
        if (isset($map['OperationVersion'])) {
            $model->operationVersion = $map['OperationVersion'];
        }
        if (isset($map['OperationParameters'])) {
            $model->operationParameters = $map['OperationParameters'];
        }

        return $model;
    }
}
