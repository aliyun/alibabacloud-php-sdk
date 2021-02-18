<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Geoip\V20200101\Models\DescribeGeoipInstancesResponseBody;

use AlibabaCloud\SDK\Geoip\V20200101\Models\DescribeGeoipInstancesResponseBody\geoipInstances\geoipInstance;
use AlibabaCloud\Tea\Model;

class geoipInstances extends Model
{
    /**
     * @var geoipInstance[]
     */
    public $geoipInstance;
    protected $_name = [
        'geoipInstance' => 'GeoipInstance',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->geoipInstance) {
            $res['GeoipInstance'] = [];
            if (null !== $this->geoipInstance && \is_array($this->geoipInstance)) {
                $n = 0;
                foreach ($this->geoipInstance as $item) {
                    $res['GeoipInstance'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return geoipInstances
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GeoipInstance'])) {
            if (!empty($map['GeoipInstance'])) {
                $model->geoipInstance = [];
                $n                    = 0;
                foreach ($map['GeoipInstance'] as $item) {
                    $model->geoipInstance[$n++] = null !== $item ? geoipInstance::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
