<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eci\V20180808\Models\DescribeMultiContainerGroupMetricResponseBody\monitorDatas\containerInfos\containerStats;

use AlibabaCloud\SDK\Eci\V20180808\Models\DescribeMultiContainerGroupMetricResponseBody\monitorDatas\containerInfos\containerStats\diskIoStats\ioServiced;
use AlibabaCloud\SDK\Eci\V20180808\Models\DescribeMultiContainerGroupMetricResponseBody\monitorDatas\containerInfos\containerStats\diskIoStats\ioServiceTime;
use AlibabaCloud\Tea\Model;

class diskIoStats extends Model
{
    /**
     * @var ioServiced[]
     */
    public $ioServiced;

    /**
     * @var ioServiceTime[]
     */
    public $ioServiceTime;
    protected $_name = [
        'ioServiced'    => 'IoServiced',
        'ioServiceTime' => 'IoServiceTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ioServiced) {
            $res['IoServiced'] = [];
            if (null !== $this->ioServiced && \is_array($this->ioServiced)) {
                $n = 0;
                foreach ($this->ioServiced as $item) {
                    $res['IoServiced'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->ioServiceTime) {
            $res['IoServiceTime'] = [];
            if (null !== $this->ioServiceTime && \is_array($this->ioServiceTime)) {
                $n = 0;
                foreach ($this->ioServiceTime as $item) {
                    $res['IoServiceTime'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return diskIoStats
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IoServiced'])) {
            if (!empty($map['IoServiced'])) {
                $model->ioServiced = [];
                $n                 = 0;
                foreach ($map['IoServiced'] as $item) {
                    $model->ioServiced[$n++] = null !== $item ? ioServiced::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['IoServiceTime'])) {
            if (!empty($map['IoServiceTime'])) {
                $model->ioServiceTime = [];
                $n                    = 0;
                foreach ($map['IoServiceTime'] as $item) {
                    $model->ioServiceTime[$n++] = null !== $item ? ioServiceTime::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
