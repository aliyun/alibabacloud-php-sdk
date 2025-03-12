<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models;

use AlibabaCloud\Tea\Model;

class GetServiceEstimateCostShrinkRequest extends Model
{
    /**
     * @description The client token that is used to ensure the idempotence of the request. You can use the client to generate the token, but you must make sure that the token is unique among different requests. The token can contain only ASCII characters and cannot exceed 64 characters in length.
     *
     * @example mRdxWuW2ts
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description The subscription duration information about the purchase order of Alibaba Cloud Marketplace.
     *
     * @var string
     */
    public $commodityShrink;

    /**
     * @description The parameters that are specified to deploy the service instance.
     *
     * @example {\\"PayType\\":\\"PostPaid\\",\\"InstancePassword\\":\\"xxxxxxxxxx\\",\\"EcsInstanceType\\":\\"ecs.g6.large\\",\\"VSwitchId\\":\\"vsw-0jlueyydpuekoxxxxxxxx\\",\\"VpcId\\":\\"vpc-0jlps6mjbgvpqxxxxxxxx\\",\\"ZoneId\\":\\"cn-wulanchabu-a\\",\\"Enable\\":false,\\"RegionId\\":\\"cn-wulanchabu\\"}
     *
     * @var string
     */
    public $parametersShrink;

    /**
     * @description The region ID.
     *
     * @example cn-wulanchabu
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The service ID.
     *
     * This parameter is required.
     * @example service-16fbd358d75e49xxxxxx
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
     * @description The package name.
     *
     * @example Package 1
     *
     * @var string
     */
    public $specificationName;

    /**
     * @description The template name.
     *
     * @example Custom_Image_Ecs
     *
     * @var string
     */
    public $templateName;
    protected $_name = [
        'clientToken'       => 'ClientToken',
        'commodityShrink'   => 'Commodity',
        'parametersShrink'  => 'Parameters',
        'regionId'          => 'RegionId',
        'serviceId'         => 'ServiceId',
        'serviceInstanceId' => 'ServiceInstanceId',
        'serviceVersion'    => 'ServiceVersion',
        'specificationName' => 'SpecificationName',
        'templateName'      => 'TemplateName',
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
        if (null !== $this->commodityShrink) {
            $res['Commodity'] = $this->commodityShrink;
        }
        if (null !== $this->parametersShrink) {
            $res['Parameters'] = $this->parametersShrink;
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetServiceEstimateCostShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['Commodity'])) {
            $model->commodityShrink = $map['Commodity'];
        }
        if (isset($map['Parameters'])) {
            $model->parametersShrink = $map['Parameters'];
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

        return $model;
    }
}
