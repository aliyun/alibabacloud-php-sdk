<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeDBClusterAvailableResourcesResponseBody\availableZones;

use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeDBClusterAvailableResourcesResponseBody\availableZones\supportedEngines\availableResources;
use AlibabaCloud\Tea\Model;

class supportedEngines extends Model
{
    /**
     * @var string
     */
    public $engine;

    /**
     * @var availableResources[]
     */
    public $availableResources;
    protected $_name = [
        'engine'             => 'Engine',
        'availableResources' => 'AvailableResources',
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
        if (null !== $this->availableResources) {
            $res['AvailableResources'] = [];
            if (null !== $this->availableResources && \is_array($this->availableResources)) {
                $n = 0;
                foreach ($this->availableResources as $item) {
                    $res['AvailableResources'][$n++] = null !== $item ? $item->toMap() : $item;
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
        if (isset($map['Engine'])) {
            $model->engine = $map['Engine'];
        }
        if (isset($map['AvailableResources'])) {
            if (!empty($map['AvailableResources'])) {
                $model->availableResources = [];
                $n                         = 0;
                foreach ($map['AvailableResources'] as $item) {
                    $model->availableResources[$n++] = null !== $item ? availableResources::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
