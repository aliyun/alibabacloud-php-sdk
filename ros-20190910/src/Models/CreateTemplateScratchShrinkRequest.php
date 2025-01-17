<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ROS\V20190910\Models\CreateTemplateScratchShrinkRequest\tags;

class CreateTemplateScratchShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $clientToken;
    /**
     * @var string
     */
    public $description;
    /**
     * @var string
     */
    public $executionMode;
    /**
     * @var string
     */
    public $logicalIdStrategy;
    /**
     * @var string
     */
    public $preferenceParametersShrink;
    /**
     * @var string
     */
    public $regionId;
    /**
     * @var string
     */
    public $resourceGroupId;
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
        if (\is_array($this->tags)) {
            Model::validateArray($this->tags);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->tags)) {
                $res['Tags'] = [];
                $n1          = 0;
                foreach ($this->tags as $item1) {
                    $res['Tags'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->templateScratchType) {
            $res['TemplateScratchType'] = $this->templateScratchType;
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
                $n1          = 0;
                foreach ($map['Tags'] as $item1) {
                    $model->tags[$n1++] = tags::fromMap($item1);
                }
            }
        }

        if (isset($map['TemplateScratchType'])) {
            $model->templateScratchType = $map['TemplateScratchType'];
        }

        return $model;
    }
}
