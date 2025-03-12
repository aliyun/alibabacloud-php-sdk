<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models;

use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\GetServiceTemplateParameterConstraintsRequest\parameters;
use AlibabaCloud\Tea\Model;

class GetServiceTemplateParameterConstraintsRequest extends Model
{
    /**
     * @description The client token that is used to ensure the idempotence of the request. You can use the client to generate the token, but you must make sure that the token is unique among different requests. The token can contain only ASCII characters.
     *
     * @example 10CM943JP0EN9D51H
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description The ID of the region in which the service instance is deployed.
     *
     * This parameter is required.
     * @example cn-huhehaote
     *
     * @var string
     */
    public $deployRegionId;

    /**
     * @description Specifies whether to enable the private connection feature. Valid values:
     *
     *   true
     *   false
     *
     * @example true
     *
     * @var bool
     */
    public $enablePrivateVpcConnection;

    /**
     * @description The parameters in the template.
     *
     * @var parameters[]
     */
    public $parameters;

    /**
     * @description The region ID.
     *
     * This parameter is required.
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The service ID.
     *
     * This parameter is required.
     * @example service-1c11f365190c44xxxxxx
     *
     * @var string
     */
    public $serviceId;

    /**
     * @description The ID of the service instance.
     *
     * @example si-d6ab3a63ccbb4b17****
     *
     * @var string
     */
    public $serviceInstanceId;

    /**
     * @description The service version.
     *
     * @example draft
     *
     * @var string
     */
    public $serviceVersion;

    /**
     * @description The template name.
     *
     * This parameter is required.
     * @example 模板1
     *
     * @var string
     */
    public $templateName;
    protected $_name = [
        'clientToken'                => 'ClientToken',
        'deployRegionId'             => 'DeployRegionId',
        'enablePrivateVpcConnection' => 'EnablePrivateVpcConnection',
        'parameters'                 => 'Parameters',
        'regionId'                   => 'RegionId',
        'serviceId'                  => 'ServiceId',
        'serviceInstanceId'          => 'ServiceInstanceId',
        'serviceVersion'             => 'ServiceVersion',
        'templateName'               => 'TemplateName',
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
        if (null !== $this->templateName) {
            $res['TemplateName'] = $this->templateName;
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
        if (isset($map['TemplateName'])) {
            $model->templateName = $map['TemplateName'];
        }

        return $model;
    }
}
