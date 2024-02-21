<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models\ListTemplateScratchesResponseBody;

use AlibabaCloud\SDK\ROS\V20190910\Models\ListTemplateScratchesResponseBody\templateScratches\preferenceParameters;
use AlibabaCloud\SDK\ROS\V20190910\Models\ListTemplateScratchesResponseBody\templateScratches\sourceResourceGroup;
use AlibabaCloud\SDK\ROS\V20190910\Models\ListTemplateScratchesResponseBody\templateScratches\sourceResources;
use AlibabaCloud\SDK\ROS\V20190910\Models\ListTemplateScratchesResponseBody\templateScratches\sourceTag;
use AlibabaCloud\SDK\ROS\V20190910\Models\ListTemplateScratchesResponseBody\templateScratches\tags;
use AlibabaCloud\Tea\Model;

class templateScratches extends Model
{
    /**
     * @description The time when the resource scenario was created.
     *
     * The time follows the ISO 8601 standard in the YYYY-MM-DDThh:mm:ss format. The time is displayed in UTC.
     * @example 2021-12-07T08:06:44
     *
     * @var string
     */
    public $createTime;

    /**
     * @description The description of the resource scenario.
     *
     * @example The description of the scenario.
     *
     * @var string
     */
    public $description;

    /**
     * @description The status code of the resource scenario that failed to be generated.
     *
     * >  This parameter is returned only if the value of Status is GENERATE_FAILED.
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
     * @description The preference parameters of the resource scenario.
     *
     * @var preferenceParameters[]
     */
    public $preferenceParameters;

    /**
     * @description The ID of the resource group.
     *
     * @example rg-acfm4nxcvht4pmi
     *
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
     * @description The state of the resource scenario.
     *
     * @example GENERATE_COMPLETE
     *
     * @var string
     */
    public $status;

    /**
     * @description The reason why the resource scenario failed to be generated.
     *
     * >  This parameter is returned only if the value of Status is GENERATE_FAILED.
     * @example Resource ALIYUN::ECS::VPC vpc-m5eauuq80anx59v28**** could not be found for template scratch.
     *
     * @var string
     */
    public $statusReason;

    /**
     * @description The tags of the resource scenario.
     *
     * @var tags[]
     */
    public $tags;

    /**
     * @description The ID of the resource scenario.
     *
     * @example ts-48ad85d66cca4620****
     *
     * @var string
     */
    public $templateScratchId;

    /**
     * @description The type of the resource scenario. Valid values:
     *
     *   ResourceImport: resource management
     *   ArchitectureReplication: resource replication
     *
     * @example ResourceImport
     *
     * @var string
     */
    public $templateScratchType;

    /**
     * @description The time when the resource scenario was updated.
     *
     * The time follows the ISO 8601 standard in the YYYY-MM-DDThh:mm:ss format. The time is displayed in UTC.
     * @example 2021-12-07T08:06:44
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
        'status'               => 'Status',
        'statusReason'         => 'StatusReason',
        'tags'                 => 'Tags',
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
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->statusReason) {
            $res['StatusReason'] = $this->statusReason;
        }
        if (null !== $this->tags) {
            $res['Tags'] = [];
            if (null !== $this->tags && \is_array($this->tags)) {
                $n = 0;
                foreach ($this->tags as $item) {
                    $res['Tags'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
     * @return templateScratches
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
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['StatusReason'])) {
            $model->statusReason = $map['StatusReason'];
        }
        if (isset($map['Tags'])) {
            if (!empty($map['Tags'])) {
                $model->tags = [];
                $n           = 0;
                foreach ($map['Tags'] as $item) {
                    $model->tags[$n++] = null !== $item ? tags::fromMap($item) : $item;
                }
            }
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
