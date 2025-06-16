<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AirticketOpen\V20230117\Models;

use AlibabaCloud\Dara\Model;

class LuggageDirectShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $flightSegmentParamListShrink;
    protected $_name = [
        'flightSegmentParamListShrink' => 'flight_segment_param_list',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->flightSegmentParamListShrink) {
            $res['flight_segment_param_list'] = $this->flightSegmentParamListShrink;
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
            $model->flightSegmentParamListShrink = $map['flight_segment_param_list'];
        }

        return $model;
    }
}
