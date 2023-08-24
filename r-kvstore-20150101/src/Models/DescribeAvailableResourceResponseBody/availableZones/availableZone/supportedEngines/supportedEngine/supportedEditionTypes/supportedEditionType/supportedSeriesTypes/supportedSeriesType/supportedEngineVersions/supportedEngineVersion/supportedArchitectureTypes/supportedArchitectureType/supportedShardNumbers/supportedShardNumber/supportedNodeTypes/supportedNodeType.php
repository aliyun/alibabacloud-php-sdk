<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeAvailableResourceResponseBody\availableZones\availableZone\supportedEngines\supportedEngine\supportedEditionTypes\supportedEditionType\supportedSeriesTypes\supportedSeriesType\supportedEngineVersions\supportedEngineVersion\supportedArchitectureTypes\supportedArchitectureType\supportedShardNumbers\supportedShardNumber\supportedNodeTypes;

use AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeAvailableResourceResponseBody\availableZones\availableZone\supportedEngines\supportedEngine\supportedEditionTypes\supportedEditionType\supportedSeriesTypes\supportedSeriesType\supportedEngineVersions\supportedEngineVersion\supportedArchitectureTypes\supportedArchitectureType\supportedShardNumbers\supportedShardNumber\supportedNodeTypes\supportedNodeType\availableResources;
use AlibabaCloud\Tea\Model;

class supportedNodeType extends Model
{
    /**
     * @description The available instance types.
     *
     * @var availableResources
     */
    public $availableResources;

    /**
     * @description The node type of the instance. Valid values:
     *
     *   **single**: standalone
     *   **double**: master-replica
     *
     * @example double
     *
     * @var string
     */
    public $supportedNodeType;
    protected $_name = [
        'availableResources' => 'AvailableResources',
        'supportedNodeType'  => 'SupportedNodeType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->availableResources) {
            $res['AvailableResources'] = null !== $this->availableResources ? $this->availableResources->toMap() : null;
        }
        if (null !== $this->supportedNodeType) {
            $res['SupportedNodeType'] = $this->supportedNodeType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return supportedNodeType
     */
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
