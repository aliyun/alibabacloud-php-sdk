<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models;

use AlibabaCloud\SDK\ROS\V20190910\Models\CreateTemplateScratchShrinkRequest\tags;
use AlibabaCloud\Tea\Model;

class CreateTemplateScratchShrinkRequest extends Model
{
    /**
     * @description The client token that is used to ensure the idempotence of the request. You can use the client to generate the token, but you must make sure that the token is unique among different requests. The token can contain only ASCII characters and cannot exceed 64 characters in length.
     *
     * For more information, see [How to ensure idempotence](https://help.aliyun.com/document_detail/134212.html).
     * @example 123e4567-e89b-12d3-a456-42665544****
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description The description of the resource scenario.
     *
     * @example Replicate a VPC.
     *
     * @var string
     */
    public $description;

    /**
     * @description The execution mode. Valid values:
     *
     *   Async (default)
     *   Sync
     *
     * > If you have a wide scope of resources, Sync takes longer. If you set ExecutionMode to Sync, we recommend that you specify ClientToken to prevent the execution timeout.
     * @example Sync
     *
     * @var string
     */
    public $executionMode;

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
     * @var string
     */
    public $preferenceParametersShrink;

    /**
     * @description The region ID of the resource scenario.
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
     * @example rg-acfmxazb4ph6aiy****
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The source resource group.
     *
     * @var string
     */
    public $sourceResourceGroupShrink;

    /**
     * @description The source resources.
     *
     * If you set TemplateScratchType to ArchitectureDetection, you can specify up to 20 source resources. In other cases, you can specify up to 200 source resources.
     * @var string
     */
    public $sourceResourcesShrink;

    /**
     * @description The source tag.
     *
     * @var string
     */
    public $sourceTagShrink;

    /**
     * @description The tags of the resource scenario.
     *
     * @var tags[]
     */
    public $tags;

    /**
     * @description The type of the resource scenario. Valid values:
     *
     *   ArchitectureReplication: resource replication
     *   ArchitectureDetection: resource detection
     *   ResourceImport: resource management
     *   ResourceMigration: resource migration
     *
     * >  The valid values of the ParameterKey and ParameterValue request parameters vary based on the value of TemplateScratchType. For more information, see the "**Additional information about request parameters**" section of this topic.
     *
     * This parameter is required.
     * @example ArchitectureReplication
     *
     * @var string
     */
    public $templateScratchType;
    protected $_name = [
        'clientToken'                => 'ClientToken',
        'description'                => 'Description',
        'executionMode'              => 'ExecutionMode',
        'logicalIdStrategy'          => 'LogicalIdStrategy',
        'preferenceParametersShrink' => 'PreferenceParameters',
        'regionId'                   => 'RegionId',
        'resourceGroupId'            => 'ResourceGroupId',
        'sourceResourceGroupShrink'  => 'SourceResourceGroup',
        'sourceResourcesShrink'      => 'SourceResources',
        'sourceTagShrink'            => 'SourceTag',
        'tags'                       => 'Tags',
        'templateScratchType'        => 'TemplateScratchType',
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
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->executionMode) {
            $res['ExecutionMode'] = $this->executionMode;
        }
        if (null !== $this->logicalIdStrategy) {
            $res['LogicalIdStrategy'] = $this->logicalIdStrategy;
        }
        if (null !== $this->preferenceParametersShrink) {
            $res['PreferenceParameters'] = $this->preferenceParametersShrink;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->sourceResourceGroupShrink) {
            $res['SourceResourceGroup'] = $this->sourceResourceGroupShrink;
        }
        if (null !== $this->sourceResourcesShrink) {
            $res['SourceResources'] = $this->sourceResourcesShrink;
        }
        if (null !== $this->sourceTagShrink) {
            $res['SourceTag'] = $this->sourceTagShrink;
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
        if (null !== $this->templateScratchType) {
            $res['TemplateScratchType'] = $this->templateScratchType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateTemplateScratchShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['ExecutionMode'])) {
            $model->executionMode = $map['ExecutionMode'];
        }
        if (isset($map['LogicalIdStrategy'])) {
            $model->logicalIdStrategy = $map['LogicalIdStrategy'];
        }
        if (isset($map['PreferenceParameters'])) {
            $model->preferenceParametersShrink = $map['PreferenceParameters'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['SourceResourceGroup'])) {
            $model->sourceResourceGroupShrink = $map['SourceResourceGroup'];
        }
        if (isset($map['SourceResources'])) {
            $model->sourceResourcesShrink = $map['SourceResources'];
        }
        if (isset($map['SourceTag'])) {
            $model->sourceTagShrink = $map['SourceTag'];
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
        if (isset($map['TemplateScratchType'])) {
            $model->templateScratchType = $map['TemplateScratchType'];
        }

        return $model;
    }
}
