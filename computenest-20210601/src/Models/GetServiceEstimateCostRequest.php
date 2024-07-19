<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNest\V20210601\Models;

use AlibabaCloud\SDK\ComputeNest\V20210601\Models\GetServiceEstimateCostRequest\commodity;
use AlibabaCloud\Tea\Model;

class GetServiceEstimateCostRequest extends Model
{
    /**
     * @description The client token that is used to ensure the idempotence of the request. You can use the client to generate the token, but you must make sure that the token is unique among different requests. The token can contain only ASCII characters and cannot exceed 64 characters in length.
     *
     * @example qwertyuiop
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description The commodity details.
     *
     * @var commodity
     */
    public $commodity;

    /**
     * @description The name of the configuration update operation.
     *
     * @example 修改游戏参数
     *
     * @var string
     */
    public $operationName;

    /**
     * @description The parameters that are specified for service instance deployment.
     *
     * >  If you want to specify the region in which the service instance is deployed, you must specify the information in Parameters.
     * @example { \\"RegionId\\": \\"cn-hangzhou\\", \\"InstanceType\\": \\"ecs.g5.large\\"}
     *
     * @var mixed[]
     */
    public $parameters;

    /**
     * @description The region ID.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The service ID.
     *
     * This parameter is required.
     * @example service-12xxxxxx
     *
     * @var string
     */
    public $serviceId;

    /**
     * @description The service instance ID.
     *
     * @example si-d6ab3a63ccbb4b17xxxx
     *
     * @var string
     */
    public $serviceInstanceId;

    /**
     * @description The service version.
     *
     * @example 1
     *
     * @var string
     */
    public $serviceVersion;

    /**
     * @description The package name.
     *
     * @example 自定义套餐
     *
     * @var string
     */
    public $specificationName;

    /**
     * @description The name of the template. This parameter is returned only if you specify TemplateId.
     *
     * > -  If you not specify TemplateVersion, the name of the template whose version is the default version is returned.
     * @example 模板1
     *
     * @var string
     */
    public $templateName;

    /**
     * @description The trial policy. Valid values:
     *
     *   Trial: Trials are supported.
     *   NotTrial: Trials are not supported.
     *
     * @example NotTrial
     *
     * @var string
     */
    public $trialType;
    protected $_name = [
        'clientToken'       => 'ClientToken',
        'commodity'         => 'Commodity',
        'operationName'     => 'OperationName',
        'parameters'        => 'Parameters',
        'regionId'          => 'RegionId',
        'serviceId'         => 'ServiceId',
        'serviceInstanceId' => 'ServiceInstanceId',
        'serviceVersion'    => 'ServiceVersion',
        'specificationName' => 'SpecificationName',
        'templateName'      => 'TemplateName',
        'trialType'         => 'TrialType',
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
        if (null !== $this->operationName) {
            $res['OperationName'] = $this->operationName;
        }
        if (null !== $this->parameters) {
            $res['Parameters'] = $this->parameters;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->serviceId) {
            $res['ServiceId'] = $this->serviceId;
        }
        if (null !== $this->serviceInstanceId) {
            $res['ServiceInstanceId'] = $this->serviceInstanceId;
        }
        if (null !== $this->serviceVersion) {
            $res['ServiceVersion'] = $this->serviceVersion;
        }
        if (null !== $this->specificationName) {
            $res['SpecificationName'] = $this->specificationName;
        }
        if (null !== $this->templateName) {
            $res['TemplateName'] = $this->templateName;
        }
        if (null !== $this->trialType) {
            $res['TrialType'] = $this->trialType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetServiceEstimateCostRequest
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
        if (isset($map['OperationName'])) {
            $model->operationName = $map['OperationName'];
        }
        if (isset($map['Parameters'])) {
            $model->parameters = $map['Parameters'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ServiceId'])) {
            $model->serviceId = $map['ServiceId'];
        }
        if (isset($map['ServiceInstanceId'])) {
            $model->serviceInstanceId = $map['ServiceInstanceId'];
        }
        if (isset($map['ServiceVersion'])) {
            $model->serviceVersion = $map['ServiceVersion'];
        }
        if (isset($map['SpecificationName'])) {
            $model->specificationName = $map['SpecificationName'];
        }
        if (isset($map['TemplateName'])) {
            $model->templateName = $map['TemplateName'];
        }
        if (isset($map['TrialType'])) {
            $model->trialType = $map['TrialType'];
        }

        return $model;
    }
}
