<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AirticketOpen\V20230117\Models;

use AlibabaCloud\SDK\AirticketOpen\V20230117\Models\LuggageDirectRequest\flightSegmentParamList;
use AlibabaCloud\Tea\Model;

class LuggageDirectRequest extends Model
{
    /**
     * @var flightSegmentParamList[]
     */
    public $flightSegmentParamList;
    protected $_name = [
        'flightSegmentParamList' => 'flight_segment_param_list',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->flightSegmentParamList) {
            $res['flight_segment_param_list'] = [];
            if (null !== $this->flightSegmentParamList && \is_array($this->flightSegmentParamList)) {
                $n = 0;
                foreach ($this->flightSegmentParamList as $item) {
                    $res['flight_segment_param_list'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return LuggageDirectRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['flight_segment_param_list'])) {
            if (!empty($map['flight_segment_param_list'])) {
                $model->flightSegmentParamList = [];
                $n                             = 0;
                foreach ($map['flight_segment_param_list'] as $item) {
                    $model->flightSegmentParamList[$n++] = null !== $item ? flightSegmentParamList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
