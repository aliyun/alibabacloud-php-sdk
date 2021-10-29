<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20171016\Models\DescribeRegionsResponseBody\drdsRegions\drdsRegion;

use AlibabaCloud\SDK\Drds\V20171016\Models\DescribeRegionsResponseBody\drdsRegions\drdsRegion\instanceSeriesList\instanceSeries;
use AlibabaCloud\Tea\Model;

class instanceSeriesList extends Model
{
    /**
     * @var instanceSeries[]
     */
    public $instanceSeries;
    protected $_name = [
        'instanceSeries' => 'InstanceSeries',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceSeries) {
            $res['InstanceSeries'] = [];
            if (null !== $this->instanceSeries && \is_array($this->instanceSeries)) {
                $n = 0;
                foreach ($this->instanceSeries as $item) {
                    $res['InstanceSeries'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return instanceSeriesList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceSeries'])) {
            if (!empty($map['InstanceSeries'])) {
                $model->instanceSeries = [];
                $n                     = 0;
                foreach ($map['InstanceSeries'] as $item) {
                    $model->instanceSeries[$n++] = null !== $item ? instanceSeries::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
