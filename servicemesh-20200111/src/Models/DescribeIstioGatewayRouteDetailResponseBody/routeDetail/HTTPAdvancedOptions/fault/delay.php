<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeIstioGatewayRouteDetailResponseBody\routeDetail\HTTPAdvancedOptions\fault;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeIstioGatewayRouteDetailResponseBody\routeDetail\HTTPAdvancedOptions\fault\delay\percentage;

class delay extends Model
{
    /**
     * @var string
     */
    public $exponentialDelay;

    /**
     * @var string
     */
    public $fixedDelay;

    /**
     * @var percentage
     */
    public $percentage;
    protected $_name = [
        'exponentialDelay' => 'ExponentialDelay',
        'fixedDelay' => 'FixedDelay',
        'percentage' => 'Percentage',
    ];

    public function validate()
    {
        if (null !== $this->percentage) {
            $this->percentage->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->exponentialDelay) {
            $res['ExponentialDelay'] = $this->exponentialDelay;
        }

        if (null !== $this->fixedDelay) {
            $res['FixedDelay'] = $this->fixedDelay;
        }

        if (null !== $this->percentage) {
            $res['Percentage'] = null !== $this->percentage ? $this->percentage->toArray($noStream) : $this->percentage;
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
        if (isset($map['ExponentialDelay'])) {
            $model->exponentialDelay = $map['ExponentialDelay'];
        }

        if (isset($map['FixedDelay'])) {
            $model->fixedDelay = $map['FixedDelay'];
        }

        if (isset($map['Percentage'])) {
            $model->percentage = percentage::fromMap($map['Percentage']);
        }

        return $model;
    }
}
