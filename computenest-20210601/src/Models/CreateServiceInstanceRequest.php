<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNest\V20210601\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ComputeNest\V20210601\Models\CreateServiceInstanceRequest\commodity;
use AlibabaCloud\SDK\ComputeNest\V20210601\Models\CreateServiceInstanceRequest\operationMetadata;
use AlibabaCloud\SDK\ComputeNest\V20210601\Models\CreateServiceInstanceRequest\tag;

class CreateServiceInstanceRequest extends Model
{
    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var commodity
     */
    public $commodity;

    /**
     * @var string
     */
    public $contactGroup;

    /**
     * @var bool
     */
    public $dryRun;

    /**
     * @var bool
     */
    public $enableInstanceOps;

    /**
     * @var bool
     */
    public $enableUserPrometheus;

    /**
     * @var string
     */
    public $name;

    /**
     * @var operationMetadata
     */
    public $operationMetadata;

    /**
     * @var mixed[]
     */
    public $parameters;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var bool
     */
    public $resourceAutoPay;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var string
     */
    public $serviceId;

    /**
     * @var string
     */
    public $serviceInstanceId;

    /**
     * @var string
     */
    public $serviceVersion;

    /**
     * @var string
     */
    public $specificationCode;

    /**
     * @var string
     */
    public $specificationName;

    /**
     * @var tag[]
     */
    public $tag;

    /**
     * @var string
     */
    public $templateName;

    /**
     * @var string
     */
    public $trialType;
    protected $_name = [
        'clientToken' => 'ClientToken',
        'commodity' => 'Commodity',
        'contactGroup' => 'ContactGroup',
        'dryRun' => 'DryRun',
        'enableInstanceOps' => 'EnableInstanceOps',
        'enableUserPrometheus' => 'EnableUserPrometheus',
        'name' => 'Name',
        'operationMetadata' => 'OperationMetadata',
        'parameters' => 'Parameters',
        'regionId' => 'RegionId',
        'resourceAutoPay' => 'ResourceAutoPay',
        'resourceGroupId' => 'ResourceGroupId',
        'serviceId' => 'ServiceId',
        'serviceInstanceId' => 'ServiceInstanceId',
        'serviceVersion' => 'ServiceVersion',
        'specificationCode' => 'SpecificationCode',
        'specificationName' => 'SpecificationName',
        'tag' => 'Tag',
        'templateName' => 'TemplateName',
        'trialType' => 'TrialType',
    ];

    public function validate()
    {
        if (null !== $this->commodity) {
            $this->commodity->validate();
        }
        if (null !== $this->operationMetadata) {
            $this->operationMetadata->validate();
        }
        if (\is_array($this->parameters)) {
            Model::validateArray($this->parameters);
        }
        if (\is_array($this->tag)) {
            Model::validateArray($this->tag);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }

        if (null !== $this->commodity) {
            $res['Commodity'] = null !== $this->commodity ? $this->commodity->toArray($noStream) : $this->commodity;
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
            $res['OperationMetadata'] = null !== $this->operationMetadata ? $this->operationMetadata->toArray($noStream) : $this->operationMetadata;
        }

        if (null !== $this->parameters) {
            if (\is_array($this->parameters)) {
                $res['Parameters'] = [];
                foreach ($this->parameters as $key1 => $value1) {
                    $res['Parameters'][$key1] = $value1;
                }
            }
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

        if (null !== $this->serviceInstanceId) {
            $res['ServiceInstanceId'] = $this->serviceInstanceId;
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
            if (\is_array($this->tag)) {
                $res['Tag'] = [];
                $n1 = 0;
                foreach ($this->tag as $item1) {
                    $res['Tag'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
            if (!empty($map['Parameters'])) {
                $model->parameters = [];
                foreach ($map['Parameters'] as $key1 => $value1) {
                    $model->parameters[$key1] = $value1;
                }
            }
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

        if (isset($map['ServiceInstanceId'])) {
            $model->serviceInstanceId = $map['ServiceInstanceId'];
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
                $n1 = 0;
                foreach ($map['Tag'] as $item1) {
                    $model->tag[$n1] = tag::fromMap($item1);
                    ++$n1;
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
