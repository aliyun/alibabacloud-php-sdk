<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveDomainMonitoringUsageDataResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveDomainMonitoringUsageDataResponseBody\monitoringData\monitoringDataItem;

class monitoringData extends Model
{
    /**
     * @var monitoringDataItem[]
     */
    public $monitoringDataItem;
    protected $_name = [
        'monitoringDataItem' => 'MonitoringDataItem',
    ];

    public function validate()
    {
        if (\is_array($this->monitoringDataItem)) {
            Model::validateArray($this->monitoringDataItem);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->monitoringDataItem) {
            if (\is_array($this->monitoringDataItem)) {
                $res['MonitoringDataItem'] = [];
                $n1 = 0;
                foreach ($this->monitoringDataItem as $item1) {
                    $res['MonitoringDataItem'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MonitoringDataItem'])) {
            if (!empty($map['MonitoringDataItem'])) {
                $model->monitoringDataItem = [];
                $n1 = 0;
                foreach ($map['MonitoringDataItem'] as $item1) {
                    $model->monitoringDataItem[$n1] = monitoringDataItem::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
