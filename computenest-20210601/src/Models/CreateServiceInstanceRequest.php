<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNest\V20210601\Models;

use AlibabaCloud\SDK\ComputeNest\V20210601\Models\CreateServiceInstanceRequest\commodity;
use AlibabaCloud\SDK\ComputeNest\V20210601\Models\CreateServiceInstanceRequest\operationMetadata;
use AlibabaCloud\SDK\ComputeNest\V20210601\Models\CreateServiceInstanceRequest\tag;
use AlibabaCloud\Tea\Model;

class CreateServiceInstanceRequest extends Model
{
    /**
     * @example 123e4567-e89b-12d3-a456-426655440000
     *
     * @var string
     */
    public $clientToken;

    /**
     * @var commodity
     */
    public $commodity;

    /**
     * @description 接收告警的云监控联系人组。
     *
     * @example 云账号报警联系人
     *
     * @var string
     */
    public $contactGroup;

    /**
     * @example false
     *
     * @var bool
     */
    public $dryRun;

    /**
     * @example true
     *
     * @var bool
     */
    public $enableInstanceOps;

    /**
     * @example true
     *
     * @var bool
     */
    public $enableUserPrometheus;

    /**
     * @description 服务实例名称。格式要求如下：
     *
     * - 必须以数字或英文字母开头，可包含数字、英文字母、短划线（-）和下划线（_）。
     * @example TestName
     *
     * @var string
     */
    public $name;

    /**
     * @var operationMetadata
     */
    public $operationMetadata;

    /**
     * @example {"NodeCount": 3, "SystemDiskSize": 40, "InstancePassword": "******"}
     *
     * @var mixed[]
     */
    public $parameters;

    /**
     * @description This parameter is required.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @example rg-bp67acfmxazb4p****
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description This parameter is required.
     *
     * @example service-0e6fca6a51a54420****
     *
     * @var string
     */
    public $serviceId;

    /**
     * @example 1
     *
     * @var string
     */
    public $serviceVersion;

    /**
     * @example yuncode5425200001
     *
     * @var string
     */
    public $specificationCode;

    /**
     * @description 套餐规格名称。
     *
     * @example 套餐一
     *
     * @var string
     */
    public $specificationName;

    /**
     * @description 用户自定义标签。
     *
     * @var tag[]
     */
    public $tag;

    /**
     * @var string
     */
    public $templateName;

    /**
     * @description 使用类型。可选值：
     *
     * - NotTrial：不支持试用。
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
        'parameters'           => 'Parameters',
        'regionId'             => 'RegionId',
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
        if (null !== $this->parameters) {
            $res['Parameters'] = $this->parameters;
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
     * @return CreateServiceInstanceRequest
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
            $model->parameters = $map['Parameters'];
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
