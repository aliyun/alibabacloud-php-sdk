<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models;

use AlibabaCloud\SDK\ROS\V20190910\Models\UpdateTemplateScratchRequest\preferenceParameters;
use AlibabaCloud\SDK\ROS\V20190910\Models\UpdateTemplateScratchRequest\sourceResourceGroup;
use AlibabaCloud\SDK\ROS\V20190910\Models\UpdateTemplateScratchRequest\sourceResources;
use AlibabaCloud\SDK\ROS\V20190910\Models\UpdateTemplateScratchRequest\sourceTag;
use AlibabaCloud\Tea\Model;

class UpdateTemplateScratchRequest extends Model
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
     * @var preferenceParameters[]
     */
    public $preferenceParameters;

    /**
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

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
     * @example ts-7f7a704cf71c49a6****
     *
     * @var string
     */
    public $templateScratchId;
    protected $_name = [
        'clientToken'          => 'ClientToken',
        'description'          => 'Description',
        'executionMode'        => 'ExecutionMode',
        'logicalIdStrategy'    => 'LogicalIdStrategy',
        'preferenceParameters' => 'PreferenceParameters',
        'regionId'             => 'RegionId',
        'sourceResourceGroup'  => 'SourceResourceGroup',
        'sourceResources'      => 'SourceResources',
        'sourceTag'            => 'SourceTag',
        'templateScratchId'    => 'TemplateScratchId',
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
        if (null !== $this->preferenceParameters) {
            $res['PreferenceParameters'] = [];
            if (null !== $this->preferenceParameters && \is_array($this->preferenceParameters)) {
                $n = 0;
                foreach ($this->preferenceParameters as $item) {
                    $res['PreferenceParameters'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
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
        if (null !== $this->templateScratchId) {
            $res['TemplateScratchId'] = $this->templateScratchId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateTemplateScratchRequest
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
            if (!empty($map['PreferenceParameters'])) {
                $model->preferenceParameters = [];
                $n                           = 0;
                foreach ($map['PreferenceParameters'] as $item) {
                    $model->preferenceParameters[$n++] = null !== $item ? preferenceParameters::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
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
        if (isset($map['TemplateScratchId'])) {
            $model->templateScratchId = $map['TemplateScratchId'];
        }

        return $model;
    }
}
