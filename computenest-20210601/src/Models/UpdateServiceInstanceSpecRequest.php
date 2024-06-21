<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNest\V20210601\Models;

use AlibabaCloud\SDK\ComputeNest\V20210601\Models\UpdateServiceInstanceSpecRequest\commodity;
use AlibabaCloud\Tea\Model;

class UpdateServiceInstanceSpecRequest extends Model
{
    /**
     * @example 123e4567-e89b-12d3-a456-42665544****
     *
     * @var string
     */
    public $clientToken;

    /**
     * @var commodity
     */
    public $commodity;

    /**
     * @example true
     *
     * @var bool
     */
    public $dryRun;

    /**
     * @example true
     *
     * @var bool
     */
    public $enableUserPrometheus;

    /**
     * @var string
     */
    public $operationName;

    /**
     * @example {
     * }
     * @var mixed[]
     */
    public $parameters;

    /**
     * @var string
     */
    public $predefinedParametersName;

    /**
     * @description This parameter is required.
     *
     * @example si-d6ab3a63ccbb4b17****
     *
     * @var string
     */
    public $serviceInstanceId;
    protected $_name = [
        'clientToken'              => 'ClientToken',
        'commodity'                => 'Commodity',
        'dryRun'                   => 'DryRun',
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
        if (null !== $this->commodity) {
            $res['Commodity'] = null !== $this->commodity ? $this->commodity->toMap() : null;
        }
        if (null !== $this->dryRun) {
            $res['DryRun'] = $this->dryRun;
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
        if (isset($map['Commodity'])) {
            $model->commodity = commodity::fromMap($map['Commodity']);
        }
        if (isset($map['DryRun'])) {
            $model->dryRun = $map['DryRun'];
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
