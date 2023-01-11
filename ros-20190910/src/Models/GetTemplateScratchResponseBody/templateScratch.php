<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models\GetTemplateScratchResponseBody;

use AlibabaCloud\SDK\ROS\V20190910\Models\GetTemplateScratchResponseBody\templateScratch\preferenceParameters;
use AlibabaCloud\SDK\ROS\V20190910\Models\GetTemplateScratchResponseBody\templateScratch\sourceResourceGroup;
use AlibabaCloud\SDK\ROS\V20190910\Models\GetTemplateScratchResponseBody\templateScratch\sourceResources;
use AlibabaCloud\SDK\ROS\V20190910\Models\GetTemplateScratchResponseBody\templateScratch\sourceTag;
use AlibabaCloud\SDK\ROS\V20190910\Models\GetTemplateScratchResponseBody\templateScratch\stackProvision;
use AlibabaCloud\SDK\ROS\V20190910\Models\GetTemplateScratchResponseBody\templateScratch\stacks;
use AlibabaCloud\Tea\Model;

class templateScratch extends Model
{
    /**
     * @example 2021-12-22T01:49:22
     *
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $description;

    /**
     * @example InvalidZoneId
     *
     * @var string
     */
    public $failedCode;

    /**
     * @example LongTypePrefixAndIndexSuffix
     *
     * @var string
     */
    public $logicalIdStrategy;

    /**
     * @var preferenceParameters[]
     */
    public $preferenceParameters;

    /**
     * @var sourceResourceGroup
     */
    public $sourceResourceGroup;

    /**
     * @var sourceResources[]
     */
    public $sourceResources;

    /**
     * @var sourceTag
     */
    public $sourceTag;

    /**
     * @var stackProvision
     */
    public $stackProvision;

    /**
     * @var stacks[]
     */
    public $stacks;

    /**
     * @example GENERATE_COMPLETE
     *
     * @var string
     */
    public $status;

    /**
     * @example Resource ALIYUN::ECS::VPC vpc-m5eauuq80anx59v28**** could not be found for template scratch.
     *
     * @var string
     */
    public $statusReason;

    /**
     * @var mixed[]
     */
    public $templateScratchData;

    /**
     * @example ts-7f7a704cf71c49a6****
     *
     * @var string
     */
    public $templateScratchId;

    /**
     * @example ArchitectureReplication
     *
     * @var string
     */
    public $templateScratchType;

    /**
     * @example 2021-12-22T01:49:23
     *
     * @var string
     */
    public $updateTime;
    protected $_name = [
        'createTime'           => 'CreateTime',
        'description'          => 'Description',
        'failedCode'           => 'FailedCode',
        'logicalIdStrategy'    => 'LogicalIdStrategy',
        'preferenceParameters' => 'PreferenceParameters',
        'sourceResourceGroup'  => 'SourceResourceGroup',
        'sourceResources'      => 'SourceResources',
        'sourceTag'            => 'SourceTag',
        'stackProvision'       => 'StackProvision',
        'stacks'               => 'Stacks',
        'status'               => 'Status',
        'statusReason'         => 'StatusReason',
        'templateScratchData'  => 'TemplateScratchData',
        'templateScratchId'    => 'TemplateScratchId',
        'templateScratchType'  => 'TemplateScratchType',
        'updateTime'           => 'UpdateTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->failedCode) {
            $res['FailedCode'] = $this->failedCode;
        }
        if (null !== $this->logicalIdStrategy) {
            $res['LogicalIdStrategy'] = $this->logicalIdStrategy;
        }
        if (null !== $this->preferenceParameters) {
            $res['PreferenceParameters'] = [];
            if (null !== $this->preferenceParameters && \is_array($this->preferenceParameters)) {
                $n = 0;
                foreach ($this->preferenceParameters as $item) {
                    $res['PreferenceParameters'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->sourceResourceGroup) {
            $res['SourceResourceGroup'] = null !== $this->sourceResourceGroup ? $this->sourceResourceGroup->toMap() : null;
        }
        if (null !== $this->sourceResources) {
            $res['SourceResources'] = [];
            if (null !== $this->sourceResources && \is_array($this->sourceResources)) {
                $n = 0;
                foreach ($this->sourceResources as $item) {
                    $res['SourceResources'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->sourceTag) {
            $res['SourceTag'] = null !== $this->sourceTag ? $this->sourceTag->toMap() : null;
        }
        if (null !== $this->stackProvision) {
            $res['StackProvision'] = null !== $this->stackProvision ? $this->stackProvision->toMap() : null;
        }
        if (null !== $this->stacks) {
            $res['Stacks'] = [];
            if (null !== $this->stacks && \is_array($this->stacks)) {
                $n = 0;
                foreach ($this->stacks as $item) {
                    $res['Stacks'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->statusReason) {
            $res['StatusReason'] = $this->statusReason;
        }
        if (null !== $this->templateScratchData) {
            $res['TemplateScratchData'] = $this->templateScratchData;
        }
        if (null !== $this->templateScratchId) {
            $res['TemplateScratchId'] = $this->templateScratchId;
        }
        if (null !== $this->templateScratchType) {
            $res['TemplateScratchType'] = $this->templateScratchType;
        }
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return templateScratch
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['FailedCode'])) {
            $model->failedCode = $map['FailedCode'];
        }
        if (isset($map['LogicalIdStrategy'])) {
            $model->logicalIdStrategy = $map['LogicalIdStrategy'];
        }
        if (isset($map['PreferenceParameters'])) {
            if (!empty($map['PreferenceParameters'])) {
                $model->preferenceParameters = [];
                $n                           = 0;
                foreach ($map['PreferenceParameters'] as $item) {
                    $model->preferenceParameters[$n++] = null !== $item ? preferenceParameters::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['SourceResourceGroup'])) {
            $model->sourceResourceGroup = sourceResourceGroup::fromMap($map['SourceResourceGroup']);
        }
        if (isset($map['SourceResources'])) {
            if (!empty($map['SourceResources'])) {
                $model->sourceResources = [];
                $n                      = 0;
                foreach ($map['SourceResources'] as $item) {
                    $model->sourceResources[$n++] = null !== $item ? sourceResources::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['SourceTag'])) {
            $model->sourceTag = sourceTag::fromMap($map['SourceTag']);
        }
        if (isset($map['StackProvision'])) {
            $model->stackProvision = stackProvision::fromMap($map['StackProvision']);
        }
        if (isset($map['Stacks'])) {
            if (!empty($map['Stacks'])) {
                $model->stacks = [];
                $n             = 0;
                foreach ($map['Stacks'] as $item) {
                    $model->stacks[$n++] = null !== $item ? stacks::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['StatusReason'])) {
            $model->statusReason = $map['StatusReason'];
        }
        if (isset($map['TemplateScratchData'])) {
            $model->templateScratchData = $map['TemplateScratchData'];
        }
        if (isset($map['TemplateScratchId'])) {
            $model->templateScratchId = $map['TemplateScratchId'];
        }
        if (isset($map['TemplateScratchType'])) {
            $model->templateScratchType = $map['TemplateScratchType'];
        }
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }

        return $model;
    }
}
