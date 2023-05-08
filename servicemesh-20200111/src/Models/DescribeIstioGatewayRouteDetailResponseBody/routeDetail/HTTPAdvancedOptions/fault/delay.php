<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeIstioGatewayRouteDetailResponseBody\routeDetail\HTTPAdvancedOptions\fault;

use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeIstioGatewayRouteDetailResponseBody\routeDetail\HTTPAdvancedOptions\fault\delay\percentage;
use AlibabaCloud\Tea\Model;

class delay extends Model
{
    /**
     * @example 3
     *
     * @var string
     */
    public $exponentialDelay;

    /**
     * @example 5s
     *
     * @var string
     */
    public $fixedDelay;

    /**
     * @var percentage
     */
    public $percentage;
    protected $_name = [
        'exponentialDelay' => 'ExponentialDelay',
        'fixedDelay'       => 'FixedDelay',
        'percentage'       => 'Percentage',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->exponentialDelay) {
            $res['ExponentialDelay'] = $this->exponentialDelay;
        }
        if (null !== $this->fixedDelay) {
            $res['FixedDelay'] = $this->fixedDelay;
        }
        if (null !== $this->percentage) {
            $res['Percentage'] = null !== $this->percentage ? $this->percentage->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return delay
     */
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
