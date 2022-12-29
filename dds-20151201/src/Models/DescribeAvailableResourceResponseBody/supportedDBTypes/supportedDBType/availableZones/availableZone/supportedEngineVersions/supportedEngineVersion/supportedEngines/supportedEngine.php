<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dds\V20151201\Models\DescribeAvailableResourceResponseBody\supportedDBTypes\supportedDBType\availableZones\availableZone\supportedEngineVersions\supportedEngineVersion\supportedEngines;

use AlibabaCloud\SDK\Dds\V20151201\Models\DescribeAvailableResourceResponseBody\supportedDBTypes\supportedDBType\availableZones\availableZone\supportedEngineVersions\supportedEngineVersion\supportedEngines\supportedEngine\supportedNodeTypes;
use AlibabaCloud\Tea\Model;

class supportedEngine extends Model
{
    /**
     * @description The storage engine of the instance.
     *
     * @example WiredTiger
     *
     * @var string
     */
    public $engine;

    /**
     * @description The available node types.
     *
     * @var supportedNodeTypes
     */
    public $supportedNodeTypes;
    protected $_name = [
        'engine'             => 'Engine',
        'supportedNodeTypes' => 'SupportedNodeTypes',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->engine) {
            $res['Engine'] = $this->engine;
        }
        if (null !== $this->supportedNodeTypes) {
            $res['SupportedNodeTypes'] = null !== $this->supportedNodeTypes ? $this->supportedNodeTypes->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return supportedEngine
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Engine'])) {
            $model->engine = $map['Engine'];
        }
        if (isset($map['SupportedNodeTypes'])) {
            $model->supportedNodeTypes = supportedNodeTypes::fromMap($map['SupportedNodeTypes']);
        }

        return $model;
    }
}
