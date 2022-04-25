<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models\GetFeatureDetailsResponseBody\templateScratch;

use AlibabaCloud\Tea\Model;

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
    protected $_name = [
        'resourceType'                 => 'ResourceType',
        'sourceResourceGroupSupported' => 'SourceResourceGroupSupported',
        'sourceResourcesSupported'     => 'SourceResourcesSupported',
        'sourceSupported'              => 'SourceSupported',
        'sourceTagSupported'           => 'SourceTagSupported',
    ];

    public function validate()
    {
    }

    public function toMap()
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return supportedResourceTypes
     */
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

        return $model;
    }
}
