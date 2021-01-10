<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eci\V20180808\Models\DescribeMultiContainerGroupMetricResponseBody\monitorDatas\containerInfos\containerStats;

use AlibabaCloud\SDK\Eci\V20180808\Models\DescribeMultiContainerGroupMetricResponseBody\monitorDatas\containerInfos\containerStats\diskIoStats\ioMerged;
use AlibabaCloud\SDK\Eci\V20180808\Models\DescribeMultiContainerGroupMetricResponseBody\monitorDatas\containerInfos\containerStats\diskIoStats\ioQueued;
use AlibabaCloud\SDK\Eci\V20180808\Models\DescribeMultiContainerGroupMetricResponseBody\monitorDatas\containerInfos\containerStats\diskIoStats\ioServiceBytes;
use AlibabaCloud\SDK\Eci\V20180808\Models\DescribeMultiContainerGroupMetricResponseBody\monitorDatas\containerInfos\containerStats\diskIoStats\ioServiced;
use AlibabaCloud\SDK\Eci\V20180808\Models\DescribeMultiContainerGroupMetricResponseBody\monitorDatas\containerInfos\containerStats\diskIoStats\ioServiceTime;
use AlibabaCloud\SDK\Eci\V20180808\Models\DescribeMultiContainerGroupMetricResponseBody\monitorDatas\containerInfos\containerStats\diskIoStats\ioTime;
use AlibabaCloud\SDK\Eci\V20180808\Models\DescribeMultiContainerGroupMetricResponseBody\monitorDatas\containerInfos\containerStats\diskIoStats\ioWaitTime;
use AlibabaCloud\SDK\Eci\V20180808\Models\DescribeMultiContainerGroupMetricResponseBody\monitorDatas\containerInfos\containerStats\diskIoStats\sectors;
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

    /**
     * @var ioServiceBytes[]
     */
    public $ioServiceBytes;

    /**
     * @var ioMerged[]
     */
    public $ioMerged;

    /**
     * @var sectors[]
     */
    public $sectors;

    /**
     * @var ioQueued[]
     */
    public $ioQueued;

    /**
     * @var ioTime[]
     */
    public $ioTime;

    /**
     * @var ioWaitTime[]
     */
    public $ioWaitTime;
    protected $_name = [
        'ioServiced'     => 'IoServiced',
        'ioServiceTime'  => 'IoServiceTime',
        'ioServiceBytes' => 'IoServiceBytes',
        'ioMerged'       => 'IoMerged',
        'sectors'        => 'Sectors',
        'ioQueued'       => 'IoQueued',
        'ioTime'         => 'IoTime',
        'ioWaitTime'     => 'IoWaitTime',
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
        if (null !== $this->ioServiceBytes) {
            $res['IoServiceBytes'] = [];
            if (null !== $this->ioServiceBytes && \is_array($this->ioServiceBytes)) {
                $n = 0;
                foreach ($this->ioServiceBytes as $item) {
                    $res['IoServiceBytes'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->ioMerged) {
            $res['IoMerged'] = [];
            if (null !== $this->ioMerged && \is_array($this->ioMerged)) {
                $n = 0;
                foreach ($this->ioMerged as $item) {
                    $res['IoMerged'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->sectors) {
            $res['Sectors'] = [];
            if (null !== $this->sectors && \is_array($this->sectors)) {
                $n = 0;
                foreach ($this->sectors as $item) {
                    $res['Sectors'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->ioQueued) {
            $res['IoQueued'] = [];
            if (null !== $this->ioQueued && \is_array($this->ioQueued)) {
                $n = 0;
                foreach ($this->ioQueued as $item) {
                    $res['IoQueued'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->ioTime) {
            $res['IoTime'] = [];
            if (null !== $this->ioTime && \is_array($this->ioTime)) {
                $n = 0;
                foreach ($this->ioTime as $item) {
                    $res['IoTime'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->ioWaitTime) {
            $res['IoWaitTime'] = [];
            if (null !== $this->ioWaitTime && \is_array($this->ioWaitTime)) {
                $n = 0;
                foreach ($this->ioWaitTime as $item) {
                    $res['IoWaitTime'][$n++] = null !== $item ? $item->toMap() : $item;
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
        if (isset($map['IoServiceBytes'])) {
            if (!empty($map['IoServiceBytes'])) {
                $model->ioServiceBytes = [];
                $n                     = 0;
                foreach ($map['IoServiceBytes'] as $item) {
                    $model->ioServiceBytes[$n++] = null !== $item ? ioServiceBytes::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['IoMerged'])) {
            if (!empty($map['IoMerged'])) {
                $model->ioMerged = [];
                $n               = 0;
                foreach ($map['IoMerged'] as $item) {
                    $model->ioMerged[$n++] = null !== $item ? ioMerged::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Sectors'])) {
            if (!empty($map['Sectors'])) {
                $model->sectors = [];
                $n              = 0;
                foreach ($map['Sectors'] as $item) {
                    $model->sectors[$n++] = null !== $item ? sectors::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['IoQueued'])) {
            if (!empty($map['IoQueued'])) {
                $model->ioQueued = [];
                $n               = 0;
                foreach ($map['IoQueued'] as $item) {
                    $model->ioQueued[$n++] = null !== $item ? ioQueued::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['IoTime'])) {
            if (!empty($map['IoTime'])) {
                $model->ioTime = [];
                $n             = 0;
                foreach ($map['IoTime'] as $item) {
                    $model->ioTime[$n++] = null !== $item ? ioTime::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['IoWaitTime'])) {
            if (!empty($map['IoWaitTime'])) {
                $model->ioWaitTime = [];
                $n                 = 0;
                foreach ($map['IoWaitTime'] as $item) {
                    $model->ioWaitTime[$n++] = null !== $item ? ioWaitTime::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
