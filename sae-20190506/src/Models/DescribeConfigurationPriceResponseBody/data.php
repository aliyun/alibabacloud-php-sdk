<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models\DescribeConfigurationPriceResponseBody;

use AlibabaCloud\SDK\Sae\V20190506\Models\DescribeConfigurationPriceResponseBody\data\bagUsage;
use AlibabaCloud\SDK\Sae\V20190506\Models\DescribeConfigurationPriceResponseBody\data\cpuMemPrice;
use AlibabaCloud\SDK\Sae\V20190506\Models\DescribeConfigurationPriceResponseBody\data\order;
use AlibabaCloud\SDK\Sae\V20190506\Models\DescribeConfigurationPriceResponseBody\data\requestPrice;
use AlibabaCloud\SDK\Sae\V20190506\Models\DescribeConfigurationPriceResponseBody\data\rules;
use AlibabaCloud\SDK\Sae\V20190506\Models\DescribeConfigurationPriceResponseBody\data\trafficPrice;
use AlibabaCloud\Tea\Model;

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
        'bagUsage'     => 'BagUsage',
        'cpuMemPrice'  => 'CpuMemPrice',
        'order'        => 'Order',
        'requestPrice' => 'RequestPrice',
        'rules'        => 'Rules',
        'trafficPrice' => 'TrafficPrice',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bagUsage) {
            $res['BagUsage'] = null !== $this->bagUsage ? $this->bagUsage->toMap() : null;
        }
        if (null !== $this->cpuMemPrice) {
            $res['CpuMemPrice'] = null !== $this->cpuMemPrice ? $this->cpuMemPrice->toMap() : null;
        }
        if (null !== $this->order) {
            $res['Order'] = null !== $this->order ? $this->order->toMap() : null;
        }
        if (null !== $this->requestPrice) {
            $res['RequestPrice'] = null !== $this->requestPrice ? $this->requestPrice->toMap() : null;
        }
        if (null !== $this->rules) {
            $res['Rules'] = [];
            if (null !== $this->rules && \is_array($this->rules)) {
                $n = 0;
                foreach ($this->rules as $item) {
                    $res['Rules'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->trafficPrice) {
            $res['TrafficPrice'] = null !== $this->trafficPrice ? $this->trafficPrice->toMap() : null;
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
                $n            = 0;
                foreach ($map['Rules'] as $item) {
                    $model->rules[$n++] = null !== $item ? rules::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TrafficPrice'])) {
            $model->trafficPrice = trafficPrice::fromMap($map['TrafficPrice']);
        }

        return $model;
    }
}
