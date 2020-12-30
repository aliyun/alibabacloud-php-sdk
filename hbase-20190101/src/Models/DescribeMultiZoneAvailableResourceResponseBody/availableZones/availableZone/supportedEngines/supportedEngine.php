<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\HBase\V20190101\Models\DescribeMultiZoneAvailableResourceResponseBody\availableZones\availableZone\supportedEngines;

use AlibabaCloud\SDK\HBase\V20190101\Models\DescribeMultiZoneAvailableResourceResponseBody\availableZones\availableZone\supportedEngines\supportedEngine\supportedEngineVersions;
use AlibabaCloud\Tea\Model;

class supportedEngine extends Model
{
    /**
     * @var supportedEngineVersions
     */
    public $supportedEngineVersions;

    /**
     * @var string
     */
    public $engine;
    protected $_name = [
        'supportedEngineVersions' => 'SupportedEngineVersions',
        'engine'                  => 'Engine',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->supportedEngineVersions) {
            $res['SupportedEngineVersions'] = null !== $this->supportedEngineVersions ? $this->supportedEngineVersions->toMap() : null;
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
        if (isset($map['SupportedEngineVersions'])) {
            $model->supportedEngineVersions = supportedEngineVersions::fromMap($map['SupportedEngineVersions']);
        }
        if (isset($map['Engine'])) {
            $model->engine = $map['Engine'];
        }

        return $model;
    }
}
