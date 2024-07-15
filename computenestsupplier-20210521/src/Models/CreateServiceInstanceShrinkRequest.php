<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models;

use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\CreateServiceInstanceShrinkRequest\tag;
use AlibabaCloud\Tea\Model;

class CreateServiceInstanceShrinkRequest extends Model
{
    /**
     * @description The client token that is used to ensure the idempotence of the request. You can use the client to generate the token, but you must make sure that the token is unique among different requests. The token can contain only ASCII characters and cannot exceed 64 characters in length.
     *
     * @example 123e4567-e89b-12d3-a456-426655440000
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description Specifies whether to perform only a dry run for the request to check information such as the permissions and instance status. Valid values:
     *
     *   true: performs a dry run for the request, but does not create a service instance.
     *   false: performs a dry run for the request, and creates a service instance if the request passes the dry run.
     *
     * @example false
     *
     * @var bool
     */
    public $dryRun;

    /**
     * @description The time when the service instance was released.
     *
     * Use the UTC time format: yyyy-MM-ddTHH:mmZ
     * @example 2023-12-12T03:13:05Z
     *
     * @var string
     */
    public $endTime;

    /**
     * @description The name of the service instance. The value must meet the following requirements:
     *
     *   The name cannot exceed 64 characters in length.
     *   It can contain digits, letters, hyphens (-), and underscores (_). It must start with a digit or a letter.
     *
     * @example TestName
     *
     * @var string
     */
    public $name;

    /**
     * @description The parameters that are specified for service instance deployment.
     *
     * >  If you want to specify the region in which the service instance is deployed, you must specify the information in Parameters.
     * @example {"NodeCount": 3, "SystemDiskSize": 40, "InstancePassword": "******"}
     *
     * @var string
     */
    public $parametersShrink;

    /**
     * @description The region ID. Valid values:
     *
     *   cn-hangzhou: China (Hangzhou)
     *   ap-southeast-1: Singapore
     *
     * This parameter is required.
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The ID of the resource group.
     *
     * @example rg-aekzuqyxxxxxx
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The service ID.
     *
     * This parameter is required.
     * @example service-0e6fca6a51a54420****
     *
     * @var string
     */
    public $serviceId;

    /**
     * @description The service version.
     *
     * @example 1
     *
     * @var string
     */
    public $serviceVersion;

    /**
     * @description The name of the package specification.
     *
     * @example 套餐一
     *
     * @var string
     */
    public $specificationName;

    /**
     * @description The custom tags.
     *
     * @var tag[]
     */
    public $tag;

    /**
     * @description The template name. You must specify a template name if the service supports multiple templates.
     *
     * @example 模板1
     *
     * @var string
     */
    public $templateName;

    /**
     * @description The user ID.
     *
     * @example 1563457855xxxxxx
     *
     * @var string
     */
    public $userId;
    protected $_name = [
        'clientToken'       => 'ClientToken',
        'dryRun'            => 'DryRun',
        'endTime'           => 'EndTime',
        'name'              => 'Name',
        'parametersShrink'  => 'Parameters',
        'regionId'          => 'RegionId',
        'resourceGroupId'   => 'ResourceGroupId',
        'serviceId'         => 'ServiceId',
        'serviceVersion'    => 'ServiceVersion',
        'specificationName' => 'SpecificationName',
        'tag'               => 'Tag',
        'templateName'      => 'TemplateName',
        'userId'            => 'UserId',
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
        if (null !== $this->dryRun) {
            $res['DryRun'] = $this->dryRun;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->parametersShrink) {
            $res['Parameters'] = $this->parametersShrink;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->serviceId) {
            $res['ServiceId'] = $this->serviceId;
        }
        if (null !== $this->serviceVersion) {
            $res['ServiceVersion'] = $this->serviceVersion;
        }
        if (null !== $this->specificationName) {
            $res['SpecificationName'] = $this->specificationName;
        }
        if (null !== $this->tag) {
            $res['Tag'] = [];
            if (null !== $this->tag && \is_array($this->tag)) {
                $n = 0;
                foreach ($this->tag as $item) {
                    $res['Tag'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->templateName) {
            $res['TemplateName'] = $this->templateName;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateServiceInstanceShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['DryRun'])) {
            $model->dryRun = $map['DryRun'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Parameters'])) {
            $model->parametersShrink = $map['Parameters'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['ServiceId'])) {
            $model->serviceId = $map['ServiceId'];
        }
        if (isset($map['ServiceVersion'])) {
            $model->serviceVersion = $map['ServiceVersion'];
        }
        if (isset($map['SpecificationName'])) {
            $model->specificationName = $map['SpecificationName'];
        }
        if (isset($map['Tag'])) {
            if (!empty($map['Tag'])) {
                $model->tag = [];
                $n          = 0;
                foreach ($map['Tag'] as $item) {
                    $model->tag[$n++] = null !== $item ? tag::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TemplateName'])) {
            $model->templateName = $map['TemplateName'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        return $model;
    }
}
