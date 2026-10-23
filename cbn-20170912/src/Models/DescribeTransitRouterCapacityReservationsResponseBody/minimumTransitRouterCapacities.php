<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cbn\V20170912\Models\DescribeTransitRouterCapacityReservationsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cbn\V20170912\Models\DescribeTransitRouterCapacityReservationsResponseBody\minimumTransitRouterCapacities\dataProcessGbps;
use AlibabaCloud\SDK\Cbn\V20170912\Models\DescribeTransitRouterCapacityReservationsResponseBody\minimumTransitRouterCapacities\state;

class minimumTransitRouterCapacities extends Model
{
    /**
     * @var dataProcessGbps
     */
    public $dataProcessGbps;

    /**
     * @var state
     */
    public $state;

    /**
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'dataProcessGbps' => 'DataProcessGbps',
        'state' => 'State',
        'zoneId' => 'ZoneId',
    ];

    public function validate()
    {
        if (null !== $this->dataProcessGbps) {
            $this->dataProcessGbps->validate();
        }
        if (null !== $this->state) {
            $this->state->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dataProcessGbps) {
            $res['DataProcessGbps'] = null !== $this->dataProcessGbps ? $this->dataProcessGbps->toArray($noStream) : $this->dataProcessGbps;
        }

        if (null !== $this->state) {
            $res['State'] = null !== $this->state ? $this->state->toArray($noStream) : $this->state;
        }

        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
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
        if (isset($map['DataProcessGbps'])) {
            $model->dataProcessGbps = dataProcessGbps::fromMap($map['DataProcessGbps']);
        }

        if (isset($map['State'])) {
            $model->state = state::fromMap($map['State']);
        }

        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}
