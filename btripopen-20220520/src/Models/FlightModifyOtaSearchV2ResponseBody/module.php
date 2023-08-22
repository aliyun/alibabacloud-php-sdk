<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightModifyOtaSearchV2ResponseBody;

use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightModifyOtaSearchV2ResponseBody\module\agentInfo;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightModifyOtaSearchV2ResponseBody\module\passengerCount;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\undefined;
use AlibabaCloud\Tea\Model;

class module extends Model
{
    /**
     * @var agentInfo
     */
    public $agentInfo;

    /**
     * @example 2136019116915615639457351e06ee
     *
     * @var string
     */
    public $cacheKey;

    /**
     * @var undefined[][]
     */
    public $flightSegmentInfos;

    /**
     * @var passengerCount
     */
    public $passengerCount;

    /**
     * @example a2ffebfe733742aab5c491d960ba3d59
     *
     * @var string
     */
    public $sessionId;
    protected $_name = [
        'agentInfo'          => 'agent_info',
        'cacheKey'           => 'cache_key',
        'flightSegmentInfos' => 'flight_segment_infos',
        'passengerCount'     => 'passenger_count',
        'sessionId'          => 'session_id',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->agentInfo) {
            $res['agent_info'] = null !== $this->agentInfo ? $this->agentInfo->toMap() : null;
        }
        if (null !== $this->cacheKey) {
            $res['cache_key'] = $this->cacheKey;
        }
        if (null !== $this->flightSegmentInfos) {
            $res['flight_segment_infos'] = $this->flightSegmentInfos;
        }
        if (null !== $this->passengerCount) {
            $res['passenger_count'] = null !== $this->passengerCount ? $this->passengerCount->toMap() : null;
        }
        if (null !== $this->sessionId) {
            $res['session_id'] = $this->sessionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return module
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['agent_info'])) {
            $model->agentInfo = agentInfo::fromMap($map['agent_info']);
        }
        if (isset($map['cache_key'])) {
            $model->cacheKey = $map['cache_key'];
        }
        if (isset($map['flight_segment_infos'])) {
            if (!empty($map['flight_segment_infos'])) {
                $model->flightSegmentInfos = $map['flight_segment_infos'];
            }
        }
        if (isset($map['passenger_count'])) {
            $model->passengerCount = passengerCount::fromMap($map['passenger_count']);
        }
        if (isset($map['session_id'])) {
            $model->sessionId = $map['session_id'];
        }

        return $model;
    }
}
