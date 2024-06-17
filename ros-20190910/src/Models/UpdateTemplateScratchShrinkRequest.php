<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models;

use AlibabaCloud\Tea\Model;

class UpdateTemplateScratchShrinkRequest extends Model
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
     * @description The description of the scenario.
     *
     * @example The description of the scenario.
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
     *   LongTypePrefixAndIndexSuffix: long-type prefix + index-type suffix
     *   LongTypePrefixAndHashSuffix: long-type prefix + hash-type suffix
     *   ShortTypePrefixAndHashSuffix: short-type prefix + hash-type suffix
     *
     * >  If you set TemplateScratchType to ArchitectureDetection, the default value of LogicalIdStrategy is LongTypePrefixAndHashSuffix. In other cases, the default value of LogicalIdStrategy is LongTypePrefixAndIndexSuffix.
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
     * @description The region ID of the scenario.
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
     * >  You must specify only one of the following parameters: SourceResources, SourceTag, and SourceResourceGroup.
     * @var string
     */
    public $sourceResourceGroupShrink;

    /**
     * @description The source resources.
     *
     * >  You must specify only one of the following parameters: SourceResources, SourceTag, and SourceResourceGroup.
     * @var string
     */
    public $sourceResourcesShrink;

    /**
     * @description The source tag.
     *
     * >  You must specify only one of the following parameters: SourceResources, SourceTag, and SourceResourceGroup.
     * @var string
     */
    public $sourceTagShrink;

    /**
     * @description The ID of the resource scenario.
     *
     * This parameter is required.
     * @example ts-7f7a704cf71c49a6****
     *
     * @var string
     */
    public $templateScratchId;
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
        'templateScratchId'          => 'TemplateScratchId',
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
        if (null !== $this->templateScratchId) {
            $res['TemplateScratchId'] = $this->templateScratchId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateTemplateScratchShrinkRequest
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
        if (isset($map['TemplateScratchId'])) {
            $model->templateScratchId = $map['TemplateScratchId'];
        }

        return $model;
    }
}
