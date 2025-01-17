<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ROS\V20190910\Models\CreateTemplateScratchRequest\preferenceParameters;
use AlibabaCloud\SDK\ROS\V20190910\Models\CreateTemplateScratchRequest\sourceResourceGroup;
use AlibabaCloud\SDK\ROS\V20190910\Models\CreateTemplateScratchRequest\sourceResources;
use AlibabaCloud\SDK\ROS\V20190910\Models\CreateTemplateScratchRequest\sourceTag;
use AlibabaCloud\SDK\ROS\V20190910\Models\CreateTemplateScratchRequest\tags;

class CreateTemplateScratchRequest extends Model
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
     * @var preferenceParameters[]
     */
    public $preferenceParameters;
    /**
     * @var string
     */
    public $regionId;
    /**
     * @var string
     */
    public $resourceGroupId;
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
     * @var tags[]
     */
    public $tags;
    /**
     * @var string
     */
    public $templateScratchType;
    protected $_name = [
        'clientToken'          => 'ClientToken',
        'description'          => 'Description',
        'executionMode'        => 'ExecutionMode',
        'logicalIdStrategy'    => 'LogicalIdStrategy',
        'preferenceParameters' => 'PreferenceParameters',
        'regionId'             => 'RegionId',
        'resourceGroupId'      => 'ResourceGroupId',
        'sourceResourceGroup'  => 'SourceResourceGroup',
        'sourceResources'      => 'SourceResources',
        'sourceTag'            => 'SourceTag',
        'tags'                 => 'Tags',
        'templateScratchType'  => 'TemplateScratchType',
    ];

    public function validate()
    {
        if (\is_array($this->preferenceParameters)) {
            Model::validateArray($this->preferenceParameters);
        }
        if (null !== $this->sourceResourceGroup) {
            $this->sourceResourceGroup->validate();
        }
        if (\is_array($this->sourceResources)) {
            Model::validateArray($this->sourceResources);
        }
        if (null !== $this->sourceTag) {
            $this->sourceTag->validate();
        }
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

        if (null !== $this->preferenceParameters) {
            if (\is_array($this->preferenceParameters)) {
                $res['PreferenceParameters'] = [];
                $n1                          = 0;
                foreach ($this->preferenceParameters as $item1) {
                    $res['PreferenceParameters'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }

        if (null !== $this->sourceResourceGroup) {
            $res['SourceResourceGroup'] = null !== $this->sourceResourceGroup ? $this->sourceResourceGroup->toArray($noStream) : $this->sourceResourceGroup;
        }

        if (null !== $this->sourceResources) {
            if (\is_array($this->sourceResources)) {
                $res['SourceResources'] = [];
                $n1                     = 0;
                foreach ($this->sourceResources as $item1) {
                    $res['SourceResources'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->sourceTag) {
            $res['SourceTag'] = null !== $this->sourceTag ? $this->sourceTag->toArray($noStream) : $this->sourceTag;
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
            if (!empty($map['PreferenceParameters'])) {
                $model->preferenceParameters = [];
                $n1                          = 0;
                foreach ($map['PreferenceParameters'] as $item1) {
                    $model->preferenceParameters[$n1++] = preferenceParameters::fromMap($item1);
                }
            }
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
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
                $n1                     = 0;
                foreach ($map['SourceResources'] as $item1) {
                    $model->sourceResources[$n1++] = sourceResources::fromMap($item1);
                }
            }
        }

        if (isset($map['SourceTag'])) {
            $model->sourceTag = sourceTag::fromMap($map['SourceTag']);
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
