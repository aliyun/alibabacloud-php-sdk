<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models\DescribeConfigurationPriceResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sae\V20190506\Models\DescribeConfigurationPriceResponseBody\data\bagUsage;
use AlibabaCloud\SDK\Sae\V20190506\Models\DescribeConfigurationPriceResponseBody\data\cpuMemPrice;
use AlibabaCloud\SDK\Sae\V20190506\Models\DescribeConfigurationPriceResponseBody\data\order;
use AlibabaCloud\SDK\Sae\V20190506\Models\DescribeConfigurationPriceResponseBody\data\requestPrice;
use AlibabaCloud\SDK\Sae\V20190506\Models\DescribeConfigurationPriceResponseBody\data\rules;
use AlibabaCloud\SDK\Sae\V20190506\Models\DescribeConfigurationPriceResponseBody\data\trafficPrice;

class data extends Model
{
    /**
     * @var bagUsage
     */
    public $bagUsage;

    /**
     * @var cpuMemPrice
     */
    public $cpuMemPrice;

    /**
     * @var order
     */
    public $order;

    /**
     * @var requestPrice
     */
    public $requestPrice;

    /**
     * @var rules[]
     */
    public $rules;

    /**
     * @var trafficPrice
     */
    public $trafficPrice;
    protected $_name = [
        'bagUsage' => 'BagUsage',
        'cpuMemPrice' => 'CpuMemPrice',
        'order' => 'Order',
        'requestPrice' => 'RequestPrice',
        'rules' => 'Rules',
        'trafficPrice' => 'TrafficPrice',
    ];

    public function validate()
    {
        if (null !== $this->bagUsage) {
            $this->bagUsage->validate();
        }
        if (null !== $this->cpuMemPrice) {
            $this->cpuMemPrice->validate();
        }
        if (null !== $this->order) {
            $this->order->validate();
        }
        if (null !== $this->requestPrice) {
            $this->requestPrice->validate();
        }
        if (\is_array($this->rules)) {
            Model::validateArray($this->rules);
        }
        if (null !== $this->trafficPrice) {
            $this->trafficPrice->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bagUsage) {
            $res['BagUsage'] = null !== $this->bagUsage ? $this->bagUsage->toArray($noStream) : $this->bagUsage;
        }

        if (null !== $this->cpuMemPrice) {
            $res['CpuMemPrice'] = null !== $this->cpuMemPrice ? $this->cpuMemPrice->toArray($noStream) : $this->cpuMemPrice;
        }

        if (null !== $this->order) {
            $res['Order'] = null !== $this->order ? $this->order->toArray($noStream) : $this->order;
        }

        if (null !== $this->requestPrice) {
            $res['RequestPrice'] = null !== $this->requestPrice ? $this->requestPrice->toArray($noStream) : $this->requestPrice;
        }

        if (null !== $this->rules) {
            if (\is_array($this->rules)) {
                $res['Rules'] = [];
                $n1 = 0;
                foreach ($this->rules as $item1) {
                    $res['Rules'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->trafficPrice) {
            $res['TrafficPrice'] = null !== $this->trafficPrice ? $this->trafficPrice->toArray($noStream) : $this->trafficPrice;
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
        if (isset($map['BagUsage'])) {
            $model->bagUsage = bagUsage::fromMap($map['BagUsage']);
        }

        if (isset($map['CpuMemPrice'])) {
            $model->cpuMemPrice = cpuMemPrice::fromMap($map['CpuMemPrice']);
        }

        if (isset($map['Order'])) {
            $model->order = order::fromMap($map['Order']);
        }

        if (isset($map['RequestPrice'])) {
            $model->requestPrice = requestPrice::fromMap($map['RequestPrice']);
        }

        if (isset($map['Rules'])) {
            if (!empty($map['Rules'])) {
                $model->rules = [];
                $n1 = 0;
                foreach ($map['Rules'] as $item1) {
                    $model->rules[$n1++] = rules::fromMap($item1);
                }
            }
        }

        if (isset($map['TrafficPrice'])) {
            $model->trafficPrice = trafficPrice::fromMap($map['TrafficPrice']);
        }

        return $model;
    }
}
