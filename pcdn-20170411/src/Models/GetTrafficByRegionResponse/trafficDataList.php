<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pcdn\V20170411\Models\GetTrafficByRegionResponse;

use AlibabaCloud\SDK\Pcdn\V20170411\Models\GetTrafficByRegionResponse\trafficDataList\trafficData;
use AlibabaCloud\Tea\Model;

class trafficDataList extends Model
{
    /**
     * @var trafficData[]
     */
    public $trafficData;
    protected $_name = [
        'trafficData' => 'TrafficData',
    ];

    public function validate()
    {
        Model::validateRequired('trafficData', $this->trafficData, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->trafficData) {
            $res['TrafficData'] = [];
            if (null !== $this->trafficData && \is_array($this->trafficData)) {
                $n = 0;
                foreach ($this->trafficData as $item) {
                    $res['TrafficData'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return trafficDataList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TrafficData'])) {
            if (!empty($map['TrafficData'])) {
                $model->trafficData = [];
                $n                  = 0;
                foreach ($map['TrafficData'] as $item) {
                    $model->trafficData[$n++] = null !== $item ? trafficData::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
