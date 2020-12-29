<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeSnapshotMonitorDataResponseBody;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeSnapshotMonitorDataResponseBody\monitorData\dataPoint;
use AlibabaCloud\Tea\Model;

class monitorData extends Model
{
    /**
     * @var dataPoint[]
     */
    public $dataPoint;
    protected $_name = [
        'dataPoint' => 'DataPoint',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dataPoint) {
            $res['DataPoint'] = [];
            if (null !== $this->dataPoint && \is_array($this->dataPoint)) {
                $n = 0;
                foreach ($this->dataPoint as $item) {
                    $res['DataPoint'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return monitorData
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DataPoint'])) {
            if (!empty($map['DataPoint'])) {
                $model->dataPoint = [];
                $n                = 0;
                foreach ($map['DataPoint'] as $item) {
                    $model->dataPoint[$n++] = null !== $item ? dataPoint::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
