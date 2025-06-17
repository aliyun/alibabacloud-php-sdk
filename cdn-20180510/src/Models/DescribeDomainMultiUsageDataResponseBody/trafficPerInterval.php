<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeDomainMultiUsageDataResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeDomainMultiUsageDataResponseBody\trafficPerInterval\trafficDataModule;

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
        if (\is_array($this->trafficDataModule)) {
            Model::validateArray($this->trafficDataModule);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->trafficDataModule) {
            if (\is_array($this->trafficDataModule)) {
                $res['TrafficDataModule'] = [];
                $n1 = 0;
                foreach ($this->trafficDataModule as $item1) {
                    $res['TrafficDataModule'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['TrafficDataModule'])) {
            if (!empty($map['TrafficDataModule'])) {
                $model->trafficDataModule = [];
                $n1 = 0;
                foreach ($map['TrafficDataModule'] as $item1) {
                    $model->trafficDataModule[$n1] = trafficDataModule::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
