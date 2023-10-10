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
     * @description The time at which the scenario was created.
     *
     * The time follows the ISO 8601 standard in the YYYY-MM-DDThh:mm:ss format. The time is displayed in UTC.
     * @example 2021-12-22T01:49:22
     *
     * @var string
     */
    public $createTime;

    /**
     * @description The description of the scenario.
     *
     * @example The description of the scenario.
     *
     * @var string
     */
    public $description;

    /**
     * @description The status code of the scenario that fails to be created.
     *
     * > This parameter is returned only if you set Status to GENERATE_FAILED.
     * @example InvalidZoneId
     *
     * @var string
     */
    public $failedCode;

    /**
     * @description The policy based on which the logical ID is generated. Valid values:
     *
     *   LongTypePrefixAndIndexSuffix (default): long-type prefix + index-type suffix
     *   LongTypePrefixAndHashSuffix: long-type prefix + hash-type suffix
     *   ShortTypePrefixAndHashSuffix: short-type prefix + hash-type suffix
     *
     * @example LongTypePrefixAndIndexSuffix
     *
     * @var string
     */
    public $logicalIdStrategy;

    /**
     * @description The preference parameters of the scenario.
     *
     * @var preferenceParameters[]
     */
    public $preferenceParameters;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The source resource group.
     *
     * @var sourceResourceGroup
     */
    public $sourceResourceGroup;

    /**
     * @description The source resources.
     *
     * @var sourceResources[]
     */
    public $sourceResources;

    /**
     * @description The source tag.
     *
     * @var sourceTag
     */
    public $sourceTag;

    /**
     * @description The preset information of the stack.
     *
     * @var stackProvision
     */
    public $stackProvision;

    /**
     * @description The stacks that are associated with the scenario.
     *
     * @var stacks[]
     */
    public $stacks;

    /**
     * @description The state of the scenario. Valid values:
     *
     *   GENERATE_IN_PROGRESS: The scenario is being created.
     *   GENERATE_COMPLETE: The scenario is created.
     *   GENERATE_FAILED: The scenario fails to be created.
     *
     * @example GENERATE_COMPLETE
     *
     * @var string
     */
    public $status;

    /**
     * @description The reason why the scenario fails to be created.
     *
     * > This parameter is returned only if you set Status to GENERATE_FAILED.
     * @example Resource ALIYUN::ECS::VPC vpc-m5eauuq80anx59v28**** could not be found for template scratch.
     *
     * @var string
     */
    public $statusReason;

    /**
     * @description The scenario data.
     *
     * @var mixed[]
     */
    public $templateScratchData;

    /**
     * @description The ID of the scenario.
     *
     * @example ts-7f7a704cf71c49a6****
     *
     * @var string
     */
    public $templateScratchId;

    /**
     * @description The type of the scenario. Valid values:
     *
     *   ResourceImport: resource management
     *   ArchitectureReplication: resource replication
     *
     * @example ArchitectureReplication
     *
     * @var string
     */
    public $templateScratchType;

    /**
     * @description The time at which the scenario was updated.
     *
     * The time follows the ISO 8601 standard in the YYYY-MM-DDThh:mm:ss format. The time is displayed in UTC.
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
        'resourceGroupId'      => 'ResourceGroupId',
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
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
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
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
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
