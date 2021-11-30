<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models;

use AlibabaCloud\SDK\ROS\V20190910\Models\CreateTemplateScratchRequest\preferenceParameters;
use AlibabaCloud\SDK\ROS\V20190910\Models\CreateTemplateScratchRequest\sourceResourceGroup;
use AlibabaCloud\SDK\ROS\V20190910\Models\CreateTemplateScratchRequest\sourceResources;
use AlibabaCloud\SDK\ROS\V20190910\Models\CreateTemplateScratchRequest\sourceTag;
use AlibabaCloud\Tea\Model;

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
        'sourceResourceGroup'  => 'SourceResourceGroup',
        'sourceResources'      => 'SourceResources',
        'sourceTag'            => 'SourceTag',
        'templateScratchType'  => 'TemplateScratchType',
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
        if (null !== $this->templateScratchType) {
            $res['TemplateScratchType'] = $this->templateScratchType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateTemplateScratchRequest
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
        if (isset($map['TemplateScratchType'])) {
            $model->templateScratchType = $map['TemplateScratchType'];
        }

        return $model;
    }
}
