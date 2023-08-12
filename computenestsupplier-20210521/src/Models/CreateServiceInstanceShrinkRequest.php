<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models;

use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\CreateServiceInstanceShrinkRequest\tag;
use AlibabaCloud\Tea\Model;

class CreateServiceInstanceShrinkRequest extends Model
{
    /**
     * @example 123e4567-e89b-12d3-a456-426655440000
     *
     * @var string
     */
    public $clientToken;

    /**
     * @var bool
     */
    public $dryRun;

    /**
     * @example TestName
     *
     * @var string
     */
    public $name;

    /**
     * @example {"NodeCount": 3, "SystemDiskSize": 40, "InstancePassword": "******"}
     *
     * @var string
     */
    public $parametersShrink;

    /**
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @example rg-aekzuqyxxxxxx
     *
     * @var string
     */
    public $resourceGroupId;

    /**
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
     * @example 1563457855xxxxxx
     *
     * @var string
     */
    public $userId;
    protected $_name = [
        'clientToken'       => 'ClientToken',
        'dryRun'            => 'DryRun',
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
