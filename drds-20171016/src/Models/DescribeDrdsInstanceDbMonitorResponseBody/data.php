<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20171016\Models\DescribeDrdsInstanceDbMonitorResponseBody;

use AlibabaCloud\SDK\Drds\V20171016\Models\DescribeDrdsInstanceDbMonitorResponseBody\data\partialPerformanceData;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var partialPerformanceData[]
     */
    public $partialPerformanceData;
    protected $_name = [
        'partialPerformanceData' => 'PartialPerformanceData',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->partialPerformanceData) {
            $res['PartialPerformanceData'] = [];
            if (null !== $this->partialPerformanceData && \is_array($this->partialPerformanceData)) {
                $n = 0;
                foreach ($this->partialPerformanceData as $item) {
                    $res['PartialPerformanceData'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PartialPerformanceData'])) {
            if (!empty($map['PartialPerformanceData'])) {
                $model->partialPerformanceData = [];
                $n                             = 0;
                foreach ($map['PartialPerformanceData'] as $item) {
                    $model->partialPerformanceData[$n++] = null !== $item ? partialPerformanceData::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
