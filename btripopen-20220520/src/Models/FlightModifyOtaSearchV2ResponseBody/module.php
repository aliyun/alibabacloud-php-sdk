<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightModifyOtaSearchV2ResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightModifyOtaSearchV2ResponseBody\module\agentInfo;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightModifyOtaSearchV2ResponseBody\module\agentInfos;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightModifyOtaSearchV2ResponseBody\module\flightSegmentInfos;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightModifyOtaSearchV2ResponseBody\module\passengerCount;

class module extends Model
{
    /**
     * @var agentInfos[]
     */
    public $agentInfos;

    /**
     * @var agentInfo
     */
    public $agentInfo;

    /**
     * @var string
     */
    public $cacheKey;

    /**
     * @var flightSegmentInfos[][]
     */
    public $flightSegmentInfos;

    /**
     * @var passengerCount
     */
    public $passengerCount;

    /**
     * @var string
     */
    public $sessionId;
    protected $_name = [
        'agentInfos' => 'agentInfos',
        'agentInfo' => 'agent_info',
        'cacheKey' => 'cache_key',
        'flightSegmentInfos' => 'flight_segment_infos',
        'passengerCount' => 'passenger_count',
        'sessionId' => 'session_id',
    ];

    public function validate()
    {
        if (\is_array($this->agentInfos)) {
            Model::validateArray($this->agentInfos);
        }
        if (null !== $this->agentInfo) {
            $this->agentInfo->validate();
        }
        if (\is_array($this->flightSegmentInfos)) {
            Model::validateArray($this->flightSegmentInfos);
        }
        if (null !== $this->passengerCount) {
            $this->passengerCount->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->agentInfos) {
            if (\is_array($this->agentInfos)) {
                $res['agentInfos'] = [];
                $n1 = 0;
                foreach ($this->agentInfos as $item1) {
                    $res['agentInfos'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->agentInfo) {
            $res['agent_info'] = null !== $this->agentInfo ? $this->agentInfo->toArray($noStream) : $this->agentInfo;
        }

        if (null !== $this->cacheKey) {
            $res['cache_key'] = $this->cacheKey;
        }

        if (null !== $this->flightSegmentInfos) {
            if (\is_array($this->flightSegmentInfos)) {
                $res['flight_segment_infos'] = [];
                $n1 = 0;
                foreach ($this->flightSegmentInfos as $item1) {
                    if (\is_array($item1)) {
                        $res['flight_segment_infos'][$n1] = [];
                        $n2 = 0;
                        foreach ($item1 as $item2) {
                            $res['flight_segment_infos'][$n1][$n2] = null !== $item2 ? $item2->toArray($noStream) : $item2;
                            ++$n2;
                        }
                    }
                    ++$n1;
                }
            }
        }

        if (null !== $this->passengerCount) {
            $res['passenger_count'] = null !== $this->passengerCount ? $this->passengerCount->toArray($noStream) : $this->passengerCount;
        }

        if (null !== $this->sessionId) {
            $res['session_id'] = $this->sessionId;
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
        if (isset($map['agentInfos'])) {
            if (!empty($map['agentInfos'])) {
                $model->agentInfos = [];
                $n1 = 0;
                foreach ($map['agentInfos'] as $item1) {
                    $model->agentInfos[$n1] = agentInfos::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['agent_info'])) {
            $model->agentInfo = agentInfo::fromMap($map['agent_info']);
        }

        if (isset($map['cache_key'])) {
            $model->cacheKey = $map['cache_key'];
        }

        if (isset($map['flight_segment_infos'])) {
            if (!empty($map['flight_segment_infos'])) {
                $model->flightSegmentInfos = [];
                $n1 = 0;
                foreach ($map['flight_segment_infos'] as $item1) {
                    if (!empty($item1)) {
                        $model->flightSegmentInfos[$n1] = [];
                        $n2 = 0;
                        foreach ($item1 as $item2) {
                            $model->flightSegmentInfos[$n1][$n2] = flightSegmentInfos::fromMap($item2);
                            ++$n2;
                        }
                    }
                    ++$n1;
                }
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
