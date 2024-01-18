<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AirticketOpen\V20230117\Models\EnrichResponseBody\data\solutionList;

use AlibabaCloud\SDK\AirticketOpen\V20230117\Models\DataSolutionListSegmentBaggageMappingListPassengerBaggageAllowanceMappingValue;
use AlibabaCloud\Tea\Model;

class segmentBaggageMappingList extends Model
{
    /**
     * @var DataSolutionListSegmentBaggageMappingListPassengerBaggageAllowanceMappingValue[]
     */
    public $passengerBaggageAllowanceMapping;

    /**
     * @var string[]
     */
    public $segmentIdList;
    protected $_name = [
        'passengerBaggageAllowanceMapping' => 'passenger_baggage_allowance_mapping',
        'segmentIdList'                    => 'segment_id_list',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->passengerBaggageAllowanceMapping) {
            $res['passenger_baggage_allowance_mapping'] = [];
            if (null !== $this->passengerBaggageAllowanceMapping && \is_array($this->passengerBaggageAllowanceMapping)) {
                foreach ($this->passengerBaggageAllowanceMapping as $key => $val) {
                    $res['passenger_baggage_allowance_mapping'][$key] = null !== $val ? $val->toMap() : $val;
                }
            }
        }
        if (null !== $this->segmentIdList) {
            $res['segment_id_list'] = $this->segmentIdList;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return segmentBaggageMappingList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['passenger_baggage_allowance_mapping'])) {
            $model->passengerBaggageAllowanceMapping = $map['passenger_baggage_allowance_mapping'];
        }
        if (isset($map['segment_id_list'])) {
            if (!empty($map['segment_id_list'])) {
                $model->segmentIdList = $map['segment_id_list'];
            }
        }

        return $model;
    }
}
