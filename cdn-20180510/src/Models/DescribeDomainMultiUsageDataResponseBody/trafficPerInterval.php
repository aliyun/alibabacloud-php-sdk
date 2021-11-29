<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeDomainMultiUsageDataResponseBody;

use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeDomainMultiUsageDataResponseBody\trafficPerInterval\trafficDataModule;
use AlibabaCloud\Tea\Model;

class trafficPerInterval extends Model
{
    /**
     * @var trafficDataModule[]
     */
    public $trafficDataModule;
    protected $_name = [
        'trafficDataModule' => 'TrafficDataModule',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->trafficDataModule) {
            $res['TrafficDataModule'] = [];
            if (null !== $this->trafficDataModule && \is_array($this->trafficDataModule)) {
                $n = 0;
                foreach ($this->trafficDataModule as $item) {
                    $res['TrafficDataModule'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return trafficPerInterval
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TrafficDataModule'])) {
            if (!empty($map['TrafficDataModule'])) {
                $model->trafficDataModule = [];
                $n                        = 0;
                foreach ($map['TrafficDataModule'] as $item) {
                    $model->trafficDataModule[$n++] = null !== $item ? trafficDataModule::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
