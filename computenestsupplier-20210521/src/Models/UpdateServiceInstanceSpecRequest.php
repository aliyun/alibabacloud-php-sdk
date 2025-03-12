<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models;

use AlibabaCloud\Tea\Model;

class UpdateServiceInstanceSpecRequest extends Model
{
    /**
     * @description The client token that is used to ensure the idempotence of the request. You can use the client to generate the token, but you must make sure that the token is unique among different requests. The token can contain only ASCII characters and cannot exceed 64 characters in length.
     *
     * @example 10CM943JP0EN9D51H
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description Specifies whether to enable Prometheus on the customer side. Valid values:
     *
     *   true
     *   false
     *
     * @example true
     *
     * @var bool
     */
    public $enableUserPrometheus;

    /**
     * @description The name of the configuration update operation.
     *
     * @example package modify
     *
     * @var string
     */
    public $operationName;

    /**
     * @description The configuration parameters of the service instance.
     *
     * @example {\\"EcsInstanceParameter\\":\\"4vCPU 8GiB\\",\\"ZoneId\\":\\"cn-heyuan-a\\",\\"SystemDiskSize\\":50,\\"DataDiskSize\\":150,\\"InternetMaxBandwidthOut\\":2,\\"RegionId\\":\\"cn-heyuan\\"}
     *
     * @var mixed[]
     */
    public $parameters;

    /**
     * @description The name of the specification package.
     *
     * @example package one
     *
     * @var string
     */
    public $predefinedParametersName;

    /**
     * @description The service instance ID.
     *
     * @example si-0e6fca6a51a54420****
     *
     * @var string
     */
    public $serviceInstanceId;
    protected $_name = [
        'clientToken'              => 'ClientToken',
        'enableUserPrometheus'     => 'EnableUserPrometheus',
        'operationName'            => 'OperationName',
        'parameters'               => 'Parameters',
        'predefinedParametersName' => 'PredefinedParametersName',
        'serviceInstanceId'        => 'ServiceInstanceId',
    ];

    public function validate()
    {
    }

    public function toMap()
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
        if (null !== $this->parameters) {
            $res['Parameters'] = $this->parameters;
        }
        if (null !== $this->predefinedParametersName) {
            $res['PredefinedParametersName'] = $this->predefinedParametersName;
        }
        if (null !== $this->serviceInstanceId) {
            $res['ServiceInstanceId'] = $this->serviceInstanceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateServiceInstanceSpecRequest
     */
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
            $model->parameters = $map['Parameters'];
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
