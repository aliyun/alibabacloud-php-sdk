<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dds\V20151201\Models\DescribeAvailableResourceResponseBody\supportedDBTypes\supportedDBType\availableZones\availableZone\supportedEngineVersions\supportedEngineVersion\supportedEngines;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dds\V20151201\Models\DescribeAvailableResourceResponseBody\supportedDBTypes\supportedDBType\availableZones\availableZone\supportedEngineVersions\supportedEngineVersion\supportedEngines\supportedEngine\supportedNodeTypes;

class supportedEngine extends Model
{
    /**
     * @var string
     */
    public $engine;
    /**
     * @var supportedNodeTypes
     */
    public $supportedNodeTypes;
    protected $_name = [
        'engine'             => 'Engine',
        'supportedNodeTypes' => 'SupportedNodeTypes',
    ];

    public function validate()
    {
        if (null !== $this->supportedNodeTypes) {
            $this->supportedNodeTypes->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->engine) {
            $res['Engine'] = $this->engine;
        }

        if (null !== $this->supportedNodeTypes) {
            $res['SupportedNodeTypes'] = null !== $this->supportedNodeTypes ? $this->supportedNodeTypes->toArray($noStream) : $this->supportedNodeTypes;
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
        if (isset($map['Engine'])) {
            $model->engine = $map['Engine'];
        }

        if (isset($map['SupportedNodeTypes'])) {
            $model->supportedNodeTypes = supportedNodeTypes::fromMap($map['SupportedNodeTypes']);
        }

        return $model;
    }
}
