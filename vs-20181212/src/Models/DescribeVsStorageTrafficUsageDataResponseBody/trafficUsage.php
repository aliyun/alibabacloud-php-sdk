<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vs\V20181212\Models\DescribeVsStorageTrafficUsageDataResponseBody;

use AlibabaCloud\SDK\Vs\V20181212\Models\DescribeVsStorageTrafficUsageDataResponseBody\trafficUsage\trafficUsageDataModule;
use AlibabaCloud\Tea\Model;

class trafficUsage extends Model
{
    /**
     * @var trafficUsageDataModule[]
     */
    public $trafficUsageDataModule;
    protected $_name = [
        'trafficUsageDataModule' => 'TrafficUsageDataModule',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->trafficUsageDataModule) {
            $res['TrafficUsageDataModule'] = [];
            if (null !== $this->trafficUsageDataModule && \is_array($this->trafficUsageDataModule)) {
                $n = 0;
                foreach ($this->trafficUsageDataModule as $item) {
                    $res['TrafficUsageDataModule'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return trafficUsage
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TrafficUsageDataModule'])) {
            if (!empty($map['TrafficUsageDataModule'])) {
                $model->trafficUsageDataModule = [];
                $n                             = 0;
                foreach ($map['TrafficUsageDataModule'] as $item) {
                    $model->trafficUsageDataModule[$n++] = null !== $item ? trafficUsageDataModule::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
