<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNest\V20210601\Models;

use AlibabaCloud\SDK\ComputeNest\V20210601\Models\CreateServiceInstanceShrinkRequest\commodity;
use AlibabaCloud\SDK\ComputeNest\V20210601\Models\CreateServiceInstanceShrinkRequest\operationMetadata;
use AlibabaCloud\SDK\ComputeNest\V20210601\Models\CreateServiceInstanceShrinkRequest\tag;
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
     * @description The information about the order placed in Alibaba Cloud Marketplace. You do not need to specify this parameter if the service is not published in Alibaba Cloud Marketplace or uses the pay-as-you-go billing method.
     *
     * @var commodity
     */
    public $commodity;

    /**
     * @description The alert contact group.
     *
     * @example 云账号报警联系人
     *
     * @var string
     */
    public $contactGroup;

    /**
     * @description Specifies whether to perform a dry run. Valid values:
     *
     *   **true**: performs a dry run. The system checks the required parameters, request syntax, and limits.
     *   **false** (default): sends the request.
     *
     * @example false
     *
     * @var bool
     */
    public $dryRun;

    /**
     * @description Indicates whether the service instance supports the operation feature.
     *
     * @example true
     *
     * @var bool
     */
    public $enableInstanceOps;

    /**
     * @description Whether to enable Prometheus monitoring.
     *
     * @example true
     *
     * @var bool
     */
    public $enableUserPrometheus;

    /**
     * @description The serviceInstance name.
     *
     * @example TestName
     *
     * @var string
     */
    public $name;

    /**
     * @description The operation metadata.
     *
     * @var operationMetadata
     */
    public $operationMetadata;

    /**
     * @description The parameters that the customer specifies to deploy the service instance.
     *
     * >  If region information is required to create a service instance, you must specify the region ID in the value of Parameters.
     * @example {"NodeCount": 3, "SystemDiskSize": 40, "InstancePassword": "******"}
     *
     * @var string
     */
    public $parametersShrink;

    /**
     * @description The region ID. Valid values:
     *
     *   cn-hangzhou: China (Hangzhou).
     *   ap-southeast-1: Singapore.
     *
     * This parameter is required.
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description Whether the resource pays automatically.Valid values:
     * - false
     * @var bool
     */
    public $resourceAutoPay;

    /**
     * @description The resource group ID.
     *
     * @example rg-bp67acfmxazb4p****
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
     * @description Specification code.
     *
     * @example yuncode5425200001
     *
     * @var string
     */
    public $specificationCode;

    /**
     * @description The package name.
     *
     * @example 套餐一
     *
     * @var string
     */
    public $specificationName;

    /**
     * @description The tags.
     *
     * @var tag[]
     */
    public $tag;

    /**
     * @description The name of the template.
     *
     * @example 模板1
     *
     * @var string
     */
    public $templateName;

    /**
     * @description The trial type of serviceInstance.
     * - Deployed
     * @example Trial
     *
     * @var string
     */
    public $trialType;
    protected $_name = [
        'clientToken'          => 'ClientToken',
        'commodity'            => 'Commodity',
        'contactGroup'         => 'ContactGroup',
        'dryRun'               => 'DryRun',
        'enableInstanceOps'    => 'EnableInstanceOps',
        'enableUserPrometheus' => 'EnableUserPrometheus',
        'name'                 => 'Name',
        'operationMetadata'    => 'OperationMetadata',
        'parametersShrink'     => 'Parameters',
        'regionId'             => 'RegionId',
        'resourceAutoPay'      => 'ResourceAutoPay',
        'resourceGroupId'      => 'ResourceGroupId',
        'serviceId'            => 'ServiceId',
        'serviceVersion'       => 'ServiceVersion',
        'specificationCode'    => 'SpecificationCode',
        'specificationName'    => 'SpecificationName',
        'tag'                  => 'Tag',
        'templateName'         => 'TemplateName',
        'trialType'            => 'TrialType',
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
        if (null !== $this->contactGroup) {
            $res['ContactGroup'] = $this->contactGroup;
        }
        if (null !== $this->dryRun) {
            $res['DryRun'] = $this->dryRun;
        }
        if (null !== $this->enableInstanceOps) {
            $res['EnableInstanceOps'] = $this->enableInstanceOps;
        }
        if (null !== $this->enableUserPrometheus) {
            $res['EnableUserPrometheus'] = $this->enableUserPrometheus;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->operationMetadata) {
            $res['OperationMetadata'] = null !== $this->operationMetadata ? $this->operationMetadata->toMap() : null;
        }
        if (null !== $this->parametersShrink) {
            $res['Parameters'] = $this->parametersShrink;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceAutoPay) {
            $res['ResourceAutoPay'] = $this->resourceAutoPay;
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
        if (null !== $this->specificationCode) {
            $res['SpecificationCode'] = $this->specificationCode;
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
        if (null !== $this->trialType) {
            $res['TrialType'] = $this->trialType;
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
        if (isset($map['Commodity'])) {
            $model->commodity = commodity::fromMap($map['Commodity']);
        }
        if (isset($map['ContactGroup'])) {
            $model->contactGroup = $map['ContactGroup'];
        }
        if (isset($map['DryRun'])) {
            $model->dryRun = $map['DryRun'];
        }
        if (isset($map['EnableInstanceOps'])) {
            $model->enableInstanceOps = $map['EnableInstanceOps'];
        }
        if (isset($map['EnableUserPrometheus'])) {
            $model->enableUserPrometheus = $map['EnableUserPrometheus'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['OperationMetadata'])) {
            $model->operationMetadata = operationMetadata::fromMap($map['OperationMetadata']);
        }
        if (isset($map['Parameters'])) {
            $model->parametersShrink = $map['Parameters'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceAutoPay'])) {
            $model->resourceAutoPay = $map['ResourceAutoPay'];
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
        if (isset($map['SpecificationCode'])) {
            $model->specificationCode = $map['SpecificationCode'];
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
        if (isset($map['TrialType'])) {
            $model->trialType = $map['TrialType'];
        }

        return $model;
    }
}
