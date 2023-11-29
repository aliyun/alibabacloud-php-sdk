<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\IntlFlightOtaItemDetailResponseBody\module\groupItem;

use AlibabaCloud\SDK\BtripOpen\V20220520\Models\IntlFlightOtaItemDetailResponseBody\module\groupItem\flightRuleInfoList\flightRuleInfo;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\IntlFlightOtaItemDetailResponseBody\module\groupItem\flightRuleInfoList\segmentPosition;
use AlibabaCloud\Tea\Model;

class flightRuleInfoList extends Model
{
    /**
     * @var flightRuleInfo
     */
    public $flightRuleInfo;

    /**
     * @var segmentPosition
     */
    public $segmentPosition;
    protected $_name = [
        'flightRuleInfo'  => 'flight_rule_info',
        'segmentPosition' => 'segment_position',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->flightRuleInfo) {
            $res['flight_rule_info'] = null !== $this->flightRuleInfo ? $this->flightRuleInfo->toMap() : null;
        }
        if (null !== $this->segmentPosition) {
            $res['segment_position'] = null !== $this->segmentPosition ? $this->segmentPosition->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return flightRuleInfoList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['flight_rule_info'])) {
            $model->flightRuleInfo = flightRuleInfo::fromMap($map['flight_rule_info']);
        }
        if (isset($map['segment_position'])) {
            $model->segmentPosition = segmentPosition::fromMap($map['segment_position']);
        }

        return $model;
    }
}
