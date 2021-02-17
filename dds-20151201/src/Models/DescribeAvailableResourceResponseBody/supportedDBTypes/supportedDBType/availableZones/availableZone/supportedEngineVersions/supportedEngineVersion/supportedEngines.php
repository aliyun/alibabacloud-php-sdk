<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dds\V20151201\Models\DescribeAvailableResourceResponseBody\supportedDBTypes\supportedDBType\availableZones\availableZone\supportedEngineVersions\supportedEngineVersion;

use AlibabaCloud\SDK\Dds\V20151201\Models\DescribeAvailableResourceResponseBody\supportedDBTypes\supportedDBType\availableZones\availableZone\supportedEngineVersions\supportedEngineVersion\supportedEngines\supportedEngine;
use AlibabaCloud\Tea\Model;

class supportedEngines extends Model
{
    /**
     * @var supportedEngine[]
     */
    public $supportedEngine;
    protected $_name = [
        'supportedEngine' => 'SupportedEngine',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->supportedEngine) {
            $res['SupportedEngine'] = [];
            if (null !== $this->supportedEngine && \is_array($this->supportedEngine)) {
                $n = 0;
                foreach ($this->supportedEngine as $item) {
                    $res['SupportedEngine'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return supportedEngines
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SupportedEngine'])) {
            if (!empty($map['SupportedEngine'])) {
                $model->supportedEngine = [];
                $n                      = 0;
                foreach ($map['SupportedEngine'] as $item) {
                    $model->supportedEngine[$n++] = null !== $item ? supportedEngine::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
