<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AirticketOpen\V20230117\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AirticketOpen\V20230117\Models\LuggageDirectRequest\flightSegmentParamList;

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
        if (\is_array($this->flightSegmentParamList)) {
            Model::validateArray($this->flightSegmentParamList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->flightSegmentParamList) {
            if (\is_array($this->flightSegmentParamList)) {
                $res['flight_segment_param_list'] = [];
                $n1 = 0;
                foreach ($this->flightSegmentParamList as $item1) {
                    $res['flight_segment_param_list'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['flight_segment_param_list'])) {
            if (!empty($map['flight_segment_param_list'])) {
                $model->flightSegmentParamList = [];
                $n1 = 0;
                foreach ($map['flight_segment_param_list'] as $item1) {
                    $model->flightSegmentParamList[$n1] = flightSegmentParamList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
