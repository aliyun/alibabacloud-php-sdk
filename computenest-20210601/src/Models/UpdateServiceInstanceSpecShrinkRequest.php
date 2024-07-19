<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNest\V20210601\Models;

use AlibabaCloud\SDK\ComputeNest\V20210601\Models\UpdateServiceInstanceSpecShrinkRequest\commodity;
use AlibabaCloud\Tea\Model;

class UpdateServiceInstanceSpecShrinkRequest extends Model
{
    /**
     * @description The client token that is used to ensure the idempotence of the request. You can use the client to generate the token, but you must make sure that the token is unique among different requests. The token can contain only ASCII characters and cannot exceed 64 characters in length.
     *
     * @example 123e4567-e89b-12d3-a456-42665544****
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description The information about the order placed in Alibaba Cloud Marketplace. You do not need to specify this parameter if the service is not published in Alibaba Cloud Marketplace or uses the pay-as-you-go billing method.
     *
     * @var commodity
     */
    public $commodity;

    /**
     * @description Specifies whether to perform only a dry run for the request to check information such as the permissions and instance status. Valid values:
     *
     *   **true: performs a dry run for the request, but does not create a service instance.**
     *   **false: performs a dry run for the request, and creates a service instance if the request passes the dry run.**
     *
     * @example true
     *
     * @var bool
     */
    public $dryRun;

    /**
     * @description Specifies whether to enable Prometheus on the customer side. Valid values:
     *
     *   **true**
     *   **false**
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
     * @example {
     * }
     * @var string
     */
    public $parametersShrink;

    /**
     * @description The name of the specification package.
     *
     * @example package One
     *
     * @var string
     */
    public $predefinedParametersName;

    /**
     * @description The service instance ID.
     *
     * This parameter is required.
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
        'parametersShrink'         => 'Parameters',
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

    /**
     * @param array $map
     *
     * @return UpdateServiceInstanceSpecShrinkRequest
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
