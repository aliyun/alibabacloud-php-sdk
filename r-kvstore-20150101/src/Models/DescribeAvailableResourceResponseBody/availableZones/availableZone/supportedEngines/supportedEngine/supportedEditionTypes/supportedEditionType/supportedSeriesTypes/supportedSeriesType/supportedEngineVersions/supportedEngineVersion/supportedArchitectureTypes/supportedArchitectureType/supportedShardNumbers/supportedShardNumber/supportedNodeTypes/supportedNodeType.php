<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeAvailableResourceResponseBody\availableZones\availableZone\supportedEngines\supportedEngine\supportedEditionTypes\supportedEditionType\supportedSeriesTypes\supportedSeriesType\supportedEngineVersions\supportedEngineVersion\supportedArchitectureTypes\supportedArchitectureType\supportedShardNumbers\supportedShardNumber\supportedNodeTypes;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeAvailableResourceResponseBody\availableZones\availableZone\supportedEngines\supportedEngine\supportedEditionTypes\supportedEditionType\supportedSeriesTypes\supportedSeriesType\supportedEngineVersions\supportedEngineVersion\supportedArchitectureTypes\supportedArchitectureType\supportedShardNumbers\supportedShardNumber\supportedNodeTypes\supportedNodeType\availableResources;

class supportedNodeType extends Model
{
    /**
     * @var availableResources
     */
    public $availableResources;

    /**
     * @var string
     */
    public $supportedNodeType;
    protected $_name = [
        'availableResources' => 'AvailableResources',
        'supportedNodeType' => 'SupportedNodeType',
    ];

    public function validate()
    {
        if (null !== $this->availableResources) {
            $this->availableResources->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->availableResources) {
            $res['AvailableResources'] = null !== $this->availableResources ? $this->availableResources->toArray($noStream) : $this->availableResources;
        }

        if (null !== $this->supportedNodeType) {
            $res['SupportedNodeType'] = $this->supportedNodeType;
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
        if (isset($map['AvailableResources'])) {
            $model->availableResources = availableResources::fromMap($map['AvailableResources']);
        }

        if (isset($map['SupportedNodeType'])) {
            $model->supportedNodeType = $map['SupportedNodeType'];
        }

        return $model;
    }
}
