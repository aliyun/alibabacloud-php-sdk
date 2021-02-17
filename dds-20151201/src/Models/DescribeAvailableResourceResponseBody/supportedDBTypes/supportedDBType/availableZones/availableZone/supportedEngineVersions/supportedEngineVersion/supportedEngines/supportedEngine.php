<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dds\V20151201\Models\DescribeAvailableResourceResponseBody\supportedDBTypes\supportedDBType\availableZones\availableZone\supportedEngineVersions\supportedEngineVersion\supportedEngines;

use AlibabaCloud\SDK\Dds\V20151201\Models\DescribeAvailableResourceResponseBody\supportedDBTypes\supportedDBType\availableZones\availableZone\supportedEngineVersions\supportedEngineVersion\supportedEngines\supportedEngine\supportedNodeTypes;
use AlibabaCloud\Tea\Model;

class supportedEngine extends Model
{
    /**
     * @var supportedNodeTypes
     */
    public $supportedNodeTypes;

    /**
     * @var string
     */
    public $engine;
    protected $_name = [
        'supportedNodeTypes' => 'SupportedNodeTypes',
        'engine'             => 'Engine',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->supportedNodeTypes) {
            $res['SupportedNodeTypes'] = null !== $this->supportedNodeTypes ? $this->supportedNodeTypes->toMap() : null;
        }
        if (null !== $this->engine) {
            $res['Engine'] = $this->engine;
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
        if (isset($map['SupportedNodeTypes'])) {
            $model->supportedNodeTypes = supportedNodeTypes::fromMap($map['SupportedNodeTypes']);
        }
        if (isset($map['Engine'])) {
            $model->engine = $map['Engine'];
        }

        return $model;
    }
}
