<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dds\V20151201\Models\DescribeAvailableResourceResponseBody\supportedDBTypes\supportedDBType\availableZones\availableZone\supportedEngineVersions\supportedEngineVersion\supportedEngines\supportedEngine\supportedNodeTypes;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dds\V20151201\Models\DescribeAvailableResourceResponseBody\supportedDBTypes\supportedDBType\availableZones\availableZone\supportedEngineVersions\supportedEngineVersion\supportedEngines\supportedEngine\supportedNodeTypes\supportedNodeType\availableResources;

class supportedNodeType extends Model
{
    /**
     * @var availableResources
     */
    public $availableResources;
    /**
     * @var string
     */
    public $networkTypes;
    /**
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

        if (null !== $this->networkTypes) {
            $res['NetworkTypes'] = $this->networkTypes;
        }

        if (null !== $this->nodeType) {
            $res['NodeType'] = $this->nodeType;
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

        if (isset($map['NetworkTypes'])) {
            $model->networkTypes = $map['NetworkTypes'];
        }

        if (isset($map['NodeType'])) {
            $model->nodeType = $map['NodeType'];
        }

        return $model;
    }
}
