<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models;

use AlibabaCloud\Dara\Model;

class UpdateServiceInstanceSpecShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $clientToken;
    /**
     * @var bool
     */
    public $enableUserPrometheus;
    /**
     * @var string
     */
    public $operationName;
    /**
     * @var string
     */
    public $parametersShrink;
    /**
     * @var string
     */
    public $predefinedParametersName;
    /**
     * @var string
     */
    public $serviceInstanceId;
    protected $_name = [
        'clientToken'              => 'ClientToken',
        'enableUserPrometheus'     => 'EnableUserPrometheus',
        'operationName'            => 'OperationName',
        'parametersShrink'         => 'Parameters',
        'predefinedParametersName' => 'PredefinedParametersName',
        'serviceInstanceId'        => 'ServiceInstanceId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }

        if (null !== $this->enableUserPrometheus) {
            $res['EnableUserPrometheus'] = $this->enableUserPrometheus;
        }

        if (null !== $this->operationName) {
            $res['OperationName'] = $this->operationName;
        }

        if (null !== $this->parametersShrink) {
            $res['Parameters'] = $this->parametersShrink;
        }

        if (null !== $this->predefinedParametersName) {
            $res['PredefinedParametersName'] = $this->predefinedParametersName;
        }

        if (null !== $this->serviceInstanceId) {
            $res['ServiceInstanceId'] = $this->serviceInstanceId;
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
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }

        if (isset($map['EnableUserPrometheus'])) {
            $model->enableUserPrometheus = $map['EnableUserPrometheus'];
        }

        if (isset($map['OperationName'])) {
            $model->operationName = $map['OperationName'];
        }

        if (isset($map['Parameters'])) {
            $model->parametersShrink = $map['Parameters'];
        }

        if (isset($map['PredefinedParametersName'])) {
            $model->predefinedParametersName = $map['PredefinedParametersName'];
        }

        if (isset($map['ServiceInstanceId'])) {
            $model->serviceInstanceId = $map['ServiceInstanceId'];
        }

        return $model;
    }
}
