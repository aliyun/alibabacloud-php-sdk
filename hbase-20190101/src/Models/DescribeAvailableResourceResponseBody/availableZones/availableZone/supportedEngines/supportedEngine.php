<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\HBase\V20190101\Models\DescribeAvailableResourceResponseBody\availableZones\availableZone\supportedEngines;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\HBase\V20190101\Models\DescribeAvailableResourceResponseBody\availableZones\availableZone\supportedEngines\supportedEngine\supportedEngineVersions;

class supportedEngine extends Model
{
    /**
     * @var string
     */
    public $engine;

    /**
     * @var supportedEngineVersions
     */
    public $supportedEngineVersions;
    protected $_name = [
        'engine' => 'Engine',
        'supportedEngineVersions' => 'SupportedEngineVersions',
    ];

    public function validate()
    {
        if (null !== $this->supportedEngineVersions) {
            $this->supportedEngineVersions->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->engine) {
            $res['Engine'] = $this->engine;
        }

        if (null !== $this->supportedEngineVersions) {
            $res['SupportedEngineVersions'] = null !== $this->supportedEngineVersions ? $this->supportedEngineVersions->toArray($noStream) : $this->supportedEngineVersions;
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

        if (isset($map['SupportedEngineVersions'])) {
            $model->supportedEngineVersions = supportedEngineVersions::fromMap($map['SupportedEngineVersions']);
        }

        return $model;
    }
}
