<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models;

use AlibabaCloud\SDK\ROS\V20190910\Models\CreateTemplateScratchShrinkRequest\tags;
use AlibabaCloud\Tea\Model;

class CreateTemplateScratchShrinkRequest extends Model
{
    /**
     * @example 123e4567-e89b-12d3-a456-42665544****
     *
     * @var string
     */
    public $clientToken;

    /**
     * @var string
     */
    public $description;

    /**
     * @example Sync
     *
     * @var string
     */
    public $executionMode;

    /**
     * @example LongTypePrefixAndIndexSuffix
     *
     * @var string
     */
    public $logicalIdStrategy;

    /**
     * @var string
     */
    public $preferenceParametersShrink;

    /**
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $sourceResourceGroupShrink;

    /**
     * @var string
     */
    public $sourceResourcesShrink;

    /**
     * @var string
     */
    public $sourceTagShrink;

    /**
     * @var tags[]
     */
    public $tags;

    /**
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
