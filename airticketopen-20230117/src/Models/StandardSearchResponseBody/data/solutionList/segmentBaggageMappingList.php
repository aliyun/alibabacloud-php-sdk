<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AirticketOpen\V20230117\Models\StandardSearchResponseBody\data\solutionList;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AirticketOpen\V20230117\Models\DataSolutionListSegmentBaggageMappingListPassengerBaggageAllowanceMappingValue;

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
        'segmentIdList' => 'segment_id_list',
    ];

    public function validate()
    {
        if (\is_array($this->passengerBaggageAllowanceMapping)) {
            Model::validateArray($this->passengerBaggageAllowanceMapping);
        }
        if (\is_array($this->segmentIdList)) {
            Model::validateArray($this->segmentIdList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->passengerBaggageAllowanceMapping) {
            if (\is_array($this->passengerBaggageAllowanceMapping)) {
                $res['passenger_baggage_allowance_mapping'] = [];
                foreach ($this->passengerBaggageAllowanceMapping as $key1 => $value1) {
                    $res['passenger_baggage_allowance_mapping'][$key1] = null !== $value1 ? $value1->toArray($noStream) : $value1;
                }
            }
        }

        if (null !== $this->segmentIdList) {
            if (\is_array($this->segmentIdList)) {
                $res['segment_id_list'] = [];
                $n1 = 0;
                foreach ($this->segmentIdList as $item1) {
                    $res['segment_id_list'][$n1] = $item1;
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
        if (isset($map['passenger_baggage_allowance_mapping'])) {
            if (!empty($map['passenger_baggage_allowance_mapping'])) {
                $model->passengerBaggageAllowanceMapping = [];
                foreach ($map['passenger_baggage_allowance_mapping'] as $key1 => $value1) {
                    $model->passengerBaggageAllowanceMapping[$key1] = DataSolutionListSegmentBaggageMappingListPassengerBaggageAllowanceMappingValue::fromMap($value1);
                }
            }
        }

        if (isset($map['segment_id_list'])) {
            if (!empty($map['segment_id_list'])) {
                $model->segmentIdList = [];
                $n1 = 0;
                foreach ($map['segment_id_list'] as $item1) {
                    $model->segmentIdList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
