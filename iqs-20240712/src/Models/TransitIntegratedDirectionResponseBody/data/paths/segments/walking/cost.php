<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IQS\V20240712\Models\TransitIntegratedDirectionResponseBody\data\paths\segments\walking;

use AlibabaCloud\Tea\Model;

class cost extends Model
{
    /**
     * @example 468
     *
     * @var string
     */
    public $durationSecond;

    /**
     * @var string
     */
    public $taxiFee;

    /**
     * @var string
     */
    public $tollDistanceMeter;

    /**
     * @var string
     */
    public $tollRoads;

    /**
     * @var string
     */
    public $tolls;

    /**
     * @var string
     */
    public $trafficLights;

    /**
     * @example 3
     *
     * @var string
     */
    public $transitFee;
    protected $_name = [
        'durationSecond'    => 'durationSecond',
        'taxiFee'           => 'taxiFee',
        'tollDistanceMeter' => 'tollDistanceMeter',
        'tollRoads'         => 'tollRoads',
        'tolls'             => 'tolls',
        'trafficLights'     => 'trafficLights',
        'transitFee'        => 'transitFee',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->durationSecond) {
            $res['durationSecond'] = $this->durationSecond;
        }
        if (null !== $this->taxiFee) {
            $res['taxiFee'] = $this->taxiFee;
        }
        if (null !== $this->tollDistanceMeter) {
            $res['tollDistanceMeter'] = $this->tollDistanceMeter;
        }
        if (null !== $this->tollRoads) {
            $res['tollRoads'] = $this->tollRoads;
        }
        if (null !== $this->tolls) {
            $res['tolls'] = $this->tolls;
        }
        if (null !== $this->trafficLights) {
            $res['trafficLights'] = $this->trafficLights;
        }
        if (null !== $this->transitFee) {
            $res['transitFee'] = $this->transitFee;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return cost
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['durationSecond'])) {
            $model->durationSecond = $map['durationSecond'];
        }
        if (isset($map['taxiFee'])) {
            $model->taxiFee = $map['taxiFee'];
        }
        if (isset($map['tollDistanceMeter'])) {
            $model->tollDistanceMeter = $map['tollDistanceMeter'];
        }
        if (isset($map['tollRoads'])) {
            $model->tollRoads = $map['tollRoads'];
        }
        if (isset($map['tolls'])) {
            $model->tolls = $map['tolls'];
        }
        if (isset($map['trafficLights'])) {
            $model->trafficLights = $map['trafficLights'];
        }
        if (isset($map['transitFee'])) {
            $model->transitFee = $map['transitFee'];
        }

        return $model;
    }
}
