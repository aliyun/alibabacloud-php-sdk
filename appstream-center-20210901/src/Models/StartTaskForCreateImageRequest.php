<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210901\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\StartTaskForCreateImageRequest\resourceList;

class StartTaskForCreateImageRequest extends Model
{
    /**
     * @var string
     */
    public $imageCreateMode;

    /**
     * @var string
     */
    public $imageId;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $jumpStep;

    /**
     * @var string
     */
    public $performanceType;

    /**
     * @var string
     */
    public $productType;

    /**
     * @var resourceList[]
     */
    public $resourceList;

    /**
     * @var string
     */
    public $retryType;

    /**
     * @var string
     */
    public $runMode;

    /**
     * @var string
     */
    public $sourceRegion;

    /**
     * @var string
     */
    public $subInstanceId;

    /**
     * @var int
     */
    public $systemDiskSize;

    /**
     * @var string
     */
    public $versionId;
    protected $_name = [
        'imageCreateMode' => 'ImageCreateMode',
        'imageId' => 'ImageId',
        'instanceId' => 'InstanceId',
        'jumpStep' => 'JumpStep',
        'performanceType' => 'PerformanceType',
        'productType' => 'ProductType',
        'resourceList' => 'ResourceList',
        'retryType' => 'RetryType',
        'runMode' => 'RunMode',
        'sourceRegion' => 'SourceRegion',
        'subInstanceId' => 'SubInstanceId',
        'systemDiskSize' => 'SystemDiskSize',
        'versionId' => 'VersionId',
    ];

    public function validate()
    {
        if (\is_array($this->resourceList)) {
            Model::validateArray($this->resourceList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->imageCreateMode) {
            $res['ImageCreateMode'] = $this->imageCreateMode;
        }

        if (null !== $this->imageId) {
            $res['ImageId'] = $this->imageId;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->jumpStep) {
            $res['JumpStep'] = $this->jumpStep;
        }

        if (null !== $this->performanceType) {
            $res['PerformanceType'] = $this->performanceType;
        }

        if (null !== $this->productType) {
            $res['ProductType'] = $this->productType;
        }

        if (null !== $this->resourceList) {
            if (\is_array($this->resourceList)) {
                $res['ResourceList'] = [];
                $n1 = 0;
                foreach ($this->resourceList as $item1) {
                    $res['ResourceList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->retryType) {
            $res['RetryType'] = $this->retryType;
        }

        if (null !== $this->runMode) {
            $res['RunMode'] = $this->runMode;
        }

        if (null !== $this->sourceRegion) {
            $res['SourceRegion'] = $this->sourceRegion;
        }

        if (null !== $this->subInstanceId) {
            $res['SubInstanceId'] = $this->subInstanceId;
        }

        if (null !== $this->systemDiskSize) {
            $res['SystemDiskSize'] = $this->systemDiskSize;
        }

        if (null !== $this->versionId) {
            $res['VersionId'] = $this->versionId;
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
        if (isset($map['ImageCreateMode'])) {
            $model->imageCreateMode = $map['ImageCreateMode'];
        }

        if (isset($map['ImageId'])) {
            $model->imageId = $map['ImageId'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['JumpStep'])) {
            $model->jumpStep = $map['JumpStep'];
        }

        if (isset($map['PerformanceType'])) {
            $model->performanceType = $map['PerformanceType'];
        }

        if (isset($map['ProductType'])) {
            $model->productType = $map['ProductType'];
        }

        if (isset($map['ResourceList'])) {
            if (!empty($map['ResourceList'])) {
                $model->resourceList = [];
                $n1 = 0;
                foreach ($map['ResourceList'] as $item1) {
                    $model->resourceList[$n1] = resourceList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['RetryType'])) {
            $model->retryType = $map['RetryType'];
        }

        if (isset($map['RunMode'])) {
            $model->runMode = $map['RunMode'];
        }

        if (isset($map['SourceRegion'])) {
            $model->sourceRegion = $map['SourceRegion'];
        }

        if (isset($map['SubInstanceId'])) {
            $model->subInstanceId = $map['SubInstanceId'];
        }

        if (isset($map['SystemDiskSize'])) {
            $model->systemDiskSize = $map['SystemDiskSize'];
        }

        if (isset($map['VersionId'])) {
            $model->versionId = $map['VersionId'];
        }

        return $model;
    }
}
