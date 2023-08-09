<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dds\V20151201\Models\DescribeAvailableResourceResponseBody\supportedDBTypes\supportedDBType\availableZones\availableZone\supportedEngineVersions\supportedEngineVersion\supportedEngines\supportedEngine\supportedNodeTypes;

use AlibabaCloud\SDK\Dds\V20151201\Models\DescribeAvailableResourceResponseBody\supportedDBTypes\supportedDBType\availableZones\availableZone\supportedEngineVersions\supportedEngineVersion\supportedEngines\supportedEngine\supportedNodeTypes\supportedNodeType\availableResources;
use AlibabaCloud\Tea\Model;

class supportedNodeType extends Model
{
    /**
     * @description The details of the available resources.
     *
     * @var availableResources
     */
    public $availableResources;

    /**
     * @description The network type of the instance.
     *
     * @example VPC
     *
     * @var string
     */
    public $networkTypes;

    /**
     * @description The number of nodes in the instance.
     *
     * @example 3
     *
     * @var string
     */
    public $nodeType;
    protected $_name = [
        'availableResources' => 'AvailableResources',
        'networkTypes'       => 'NetworkTypes',
        'nodeType'           => 'NodeType',
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
        if (null !== $this->networkTypes) {
            $res['NetworkTypes'] = $this->networkTypes;
        }
        if (null !== $this->nodeType) {
            $res['NodeType'] = $this->nodeType;
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
        if (isset($map['NetworkTypes'])) {
            $model->networkTypes = $map['NetworkTypes'];
        }
        if (isset($map['NodeType'])) {
            $model->nodeType = $map['NodeType'];
        }

        return $model;
    }
}
