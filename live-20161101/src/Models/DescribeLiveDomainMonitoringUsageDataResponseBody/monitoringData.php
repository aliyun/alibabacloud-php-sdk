<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveDomainMonitoringUsageDataResponseBody;

use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveDomainMonitoringUsageDataResponseBody\monitoringData\monitoringDataItem;
use AlibabaCloud\Tea\Model;

class monitoringData extends Model
{
    /**
     * @var monitoringDataItem[]
     */
    public $monitoringDataItem;
    protected $_name = [
        'monitoringDataItem' => 'MonitoringDataItem',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->monitoringDataItem) {
            $res['MonitoringDataItem'] = [];
            if (null !== $this->monitoringDataItem && \is_array($this->monitoringDataItem)) {
                $n = 0;
                foreach ($this->monitoringDataItem as $item) {
                    $res['MonitoringDataItem'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return monitoringData
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MonitoringDataItem'])) {
            if (!empty($map['MonitoringDataItem'])) {
                $model->monitoringDataItem = [];
                $n = 0;
                foreach ($map['MonitoringDataItem'] as $item) {
                    $model->monitoringDataItem[$n++] = null !== $item ? monitoringDataItem::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
