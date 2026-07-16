<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\IntlFlightReShopListSearchResponseBody\module\reShopItemList\flightJourneyInfos\flightSegmentInfos;

use AlibabaCloud\Dara\Model;

class otherInfo extends Model
{
    /**
     * @var string
     */
    public $aircraftAge;

    /**
     * @var string
     */
    public $avgDelayTime;

    /**
     * @var string
     */
    public $flightCancelRate;

    /**
     * @var string
     */
    public $jetBridgeRate;

    /**
     * @var string
     */
    public $onTimeRate;

    /**
     * @var bool
     */
    public $wifi;
    protected $_name = [
        'aircraftAge' => 'aircraft_age',
        'avgDelayTime' => 'avg_delay_time',
        'flightCancelRate' => 'flight_cancel_rate',
        'jetBridgeRate' => 'jet_bridge_rate',
        'onTimeRate' => 'on_time_rate',
        'wifi' => 'wifi',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->aircraftAge) {
            $res['aircraft_age'] = $this->aircraftAge;
        }

        if (null !== $this->avgDelayTime) {
            $res['avg_delay_time'] = $this->avgDelayTime;
        }

        if (null !== $this->flightCancelRate) {
            $res['flight_cancel_rate'] = $this->flightCancelRate;
        }

        if (null !== $this->jetBridgeRate) {
            $res['jet_bridge_rate'] = $this->jetBridgeRate;
        }

        if (null !== $this->onTimeRate) {
            $res['on_time_rate'] = $this->onTimeRate;
        }

        if (null !== $this->wifi) {
            $res['wifi'] = $this->wifi;
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
        if (isset($map['aircraft_age'])) {
            $model->aircraftAge = $map['aircraft_age'];
        }

        if (isset($map['avg_delay_time'])) {
            $model->avgDelayTime = $map['avg_delay_time'];
        }

        if (isset($map['flight_cancel_rate'])) {
            $model->flightCancelRate = $map['flight_cancel_rate'];
        }

        if (isset($map['jet_bridge_rate'])) {
            $model->jetBridgeRate = $map['jet_bridge_rate'];
        }

        if (isset($map['on_time_rate'])) {
            $model->onTimeRate = $map['on_time_rate'];
        }

        if (isset($map['wifi'])) {
            $model->wifi = $map['wifi'];
        }

        return $model;
    }
}
