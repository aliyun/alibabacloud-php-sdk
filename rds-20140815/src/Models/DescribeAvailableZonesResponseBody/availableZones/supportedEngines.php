<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeAvailableZonesResponseBody\availableZones;

use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeAvailableZonesResponseBody\availableZones\supportedEngines\supportedEngineVersions;
use AlibabaCloud\Tea\Model;

class supportedEngines extends Model
{
    /**
     * @var supportedEngineVersions[]
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
            $res['SupportedEngineVersions'] = [];
            if (null !== $this->supportedEngineVersions && \is_array($this->supportedEngineVersions)) {
                $n = 0;
                foreach ($this->supportedEngineVersions as $item) {
                    $res['SupportedEngineVersions'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->engine) {
            $res['Engine'] = $this->engine;
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
        if (isset($map['SupportedEngineVersions'])) {
            if (!empty($map['SupportedEngineVersions'])) {
                $model->supportedEngineVersions = [];
                $n                              = 0;
                foreach ($map['SupportedEngineVersions'] as $item) {
                    $model->supportedEngineVersions[$n++] = null !== $item ? supportedEngineVersions::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Engine'])) {
            $model->engine = $map['Engine'];
        }

        return $model;
    }
}
