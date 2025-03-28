<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models\GetFeatureDetailsResponseBody\templateScratch;

use AlibabaCloud\Dara\Model;

class supportedResourceTypes extends Model
{
    /**
     * @var string
     */
    public $resourceType;

    /**
     * @var bool
     */
    public $sourceResourceGroupSupported;

    /**
     * @var bool
     */
    public $sourceResourcesSupported;

    /**
     * @var bool
     */
    public $sourceSupported;

    /**
     * @var bool
     */
    public $sourceTagSupported;

    /**
     * @var string[]
     */
    public $supportedTemplateScratchTypes;
    protected $_name = [
        'resourceType' => 'ResourceType',
        'sourceResourceGroupSupported' => 'SourceResourceGroupSupported',
        'sourceResourcesSupported' => 'SourceResourcesSupported',
        'sourceSupported' => 'SourceSupported',
        'sourceTagSupported' => 'SourceTagSupported',
        'supportedTemplateScratchTypes' => 'SupportedTemplateScratchTypes',
    ];

    public function validate()
    {
        if (\is_array($this->supportedTemplateScratchTypes)) {
            Model::validateArray($this->supportedTemplateScratchTypes);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }

        if (null !== $this->sourceResourceGroupSupported) {
            $res['SourceResourceGroupSupported'] = $this->sourceResourceGroupSupported;
        }

        if (null !== $this->sourceResourcesSupported) {
            $res['SourceResourcesSupported'] = $this->sourceResourcesSupported;
        }

        if (null !== $this->sourceSupported) {
            $res['SourceSupported'] = $this->sourceSupported;
        }

        if (null !== $this->sourceTagSupported) {
            $res['SourceTagSupported'] = $this->sourceTagSupported;
        }

        if (null !== $this->supportedTemplateScratchTypes) {
            if (\is_array($this->supportedTemplateScratchTypes)) {
                $res['SupportedTemplateScratchTypes'] = [];
                $n1 = 0;
                foreach ($this->supportedTemplateScratchTypes as $item1) {
                    $res['SupportedTemplateScratchTypes'][$n1++] = $item1;
                }
            }
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
        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }

        if (isset($map['SourceResourceGroupSupported'])) {
            $model->sourceResourceGroupSupported = $map['SourceResourceGroupSupported'];
        }

        if (isset($map['SourceResourcesSupported'])) {
            $model->sourceResourcesSupported = $map['SourceResourcesSupported'];
        }

        if (isset($map['SourceSupported'])) {
            $model->sourceSupported = $map['SourceSupported'];
        }

        if (isset($map['SourceTagSupported'])) {
            $model->sourceTagSupported = $map['SourceTagSupported'];
        }

        if (isset($map['SupportedTemplateScratchTypes'])) {
            if (!empty($map['SupportedTemplateScratchTypes'])) {
                $model->supportedTemplateScratchTypes = [];
                $n1 = 0;
                foreach ($map['SupportedTemplateScratchTypes'] as $item1) {
                    $model->supportedTemplateScratchTypes[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
