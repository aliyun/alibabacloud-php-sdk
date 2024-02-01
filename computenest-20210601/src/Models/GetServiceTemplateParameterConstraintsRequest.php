<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNest\V20210601\Models;

use AlibabaCloud\SDK\ComputeNest\V20210601\Models\GetServiceTemplateParameterConstraintsRequest\parameters;
use AlibabaCloud\Tea\Model;

class GetServiceTemplateParameterConstraintsRequest extends Model
{
    /**
     * @example 123e4567-e89b-12d3-a456-426655440000
     *
     * @var string
     */
    public $clientToken;

    /**
     * @example cn-hangzhou
     *
     * @var string
     */
    public $deployRegionId;

    /**
     * @example true
     *
     * @var bool
     */
    public $enablePrivateVpcConnection;

    /**
     * @var parameters[]
     */
    public $parameters;

    /**
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @example service-731f788406024axxxxxx
     *
     * @var string
     */
    public $serviceId;

    /**
     * @example si-461ee95f46ca46xxxxxx
     *
     * @var string
     */
    public $serviceInstanceId;

    /**
     * @example 1
     *
     * @var string
     */
    public $serviceVersion;

    /**
     * @var string
     */
    public $specificationName;

    /**
     * @var string
     */
    public $templateName;

    /**
     * @example NotTrial
     *
     * @var string
     */
    public $trialType;
    protected $_name = [
        'clientToken'                => 'ClientToken',
        'deployRegionId'             => 'DeployRegionId',
        'enablePrivateVpcConnection' => 'EnablePrivateVpcConnection',
        'parameters'                 => 'Parameters',
        'regionId'                   => 'RegionId',
        'serviceId'                  => 'ServiceId',
        'serviceInstanceId'          => 'ServiceInstanceId',
        'serviceVersion'             => 'ServiceVersion',
        'specificationName'          => 'SpecificationName',
        'templateName'               => 'TemplateName',
        'trialType'                  => 'TrialType',
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
        if (null !== $this->deployRegionId) {
            $res['DeployRegionId'] = $this->deployRegionId;
        }
        if (null !== $this->enablePrivateVpcConnection) {
            $res['EnablePrivateVpcConnection'] = $this->enablePrivateVpcConnection;
        }
        if (null !== $this->parameters) {
            $res['Parameters'] = [];
            if (null !== $this->parameters && \is_array($this->parameters)) {
                $n = 0;
                foreach ($this->parameters as $item) {
                    $res['Parameters'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
     * @return GetServiceTemplateParameterConstraintsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['DeployRegionId'])) {
            $model->deployRegionId = $map['DeployRegionId'];
        }
        if (isset($map['EnablePrivateVpcConnection'])) {
            $model->enablePrivateVpcConnection = $map['EnablePrivateVpcConnection'];
        }
        if (isset($map['Parameters'])) {
            if (!empty($map['Parameters'])) {
                $model->parameters = [];
                $n                 = 0;
                foreach ($map['Parameters'] as $item) {
                    $model->parameters[$n++] = null !== $item ? parameters::fromMap($item) : $item;
                }
            }
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
