<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AirticketOpen\V20230117\Models\EnrichRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AirticketOpen\V20230117\Models\EnrichRequest\journeyParamList\segmentParamList;

class journeyParamList extends Model
{
    /**
     * @var string
     */
    public $arrivalCity;

    /**
     * @var string
     */
    public $departureCity;

    /**
     * @var string
     */
    public $departureDate;

    /**
     * @var segmentParamList[]
     */
    public $segmentParamList;
    protected $_name = [
        'arrivalCity' => 'arrival_city',
        'departureCity' => 'departure_city',
        'departureDate' => 'departure_date',
        'segmentParamList' => 'segment_param_list',
    ];

    public function validate()
    {
        if (\is_array($this->segmentParamList)) {
            Model::validateArray($this->segmentParamList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->arrivalCity) {
            $res['arrival_city'] = $this->arrivalCity;
        }

        if (null !== $this->departureCity) {
            $res['departure_city'] = $this->departureCity;
        }

        if (null !== $this->departureDate) {
            $res['departure_date'] = $this->departureDate;
        }

        if (null !== $this->segmentParamList) {
            if (\is_array($this->segmentParamList)) {
                $res['segment_param_list'] = [];
                $n1 = 0;
                foreach ($this->segmentParamList as $item1) {
                    $res['segment_param_list'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['arrival_city'])) {
            $model->arrivalCity = $map['arrival_city'];
        }

        if (isset($map['departure_city'])) {
            $model->departureCity = $map['departure_city'];
        }

        if (isset($map['departure_date'])) {
            $model->departureDate = $map['departure_date'];
        }

        if (isset($map['segment_param_list'])) {
            if (!empty($map['segment_param_list'])) {
                $model->segmentParamList = [];
                $n1 = 0;
                foreach ($map['segment_param_list'] as $item1) {
                    $model->segmentParamList[$n1] = segmentParamList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
