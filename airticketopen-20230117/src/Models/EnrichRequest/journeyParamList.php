<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AirticketOpen\V20230117\Models\EnrichRequest;

use AlibabaCloud\SDK\AirticketOpen\V20230117\Models\EnrichRequest\journeyParamList\segmentParamList;
use AlibabaCloud\Tea\Model;

class journeyParamList extends Model
{
    /**
     * @example MFM
     *
     * @var string
     */
    public $arrivalCity;

    /**
     * @example SHA
     *
     * @var string
     */
    public $departureCity;

    /**
     * @example 20230310
     *
     * @var string
     */
    public $departureDate;

    /**
     * @var segmentParamList[]
     */
    public $segmentParamList;
    protected $_name = [
        'arrivalCity'      => 'arrival_city',
        'departureCity'    => 'departure_city',
        'departureDate'    => 'departure_date',
        'segmentParamList' => 'segment_param_list',
    ];

    public function validate()
    {
    }

    public function toMap()
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
            $res['segment_param_list'] = [];
            if (null !== $this->segmentParamList && \is_array($this->segmentParamList)) {
                $n = 0;
                foreach ($this->segmentParamList as $item) {
                    $res['segment_param_list'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return journeyParamList
     */
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
                $n                       = 0;
                foreach ($map['segment_param_list'] as $item) {
                    $model->segmentParamList[$n++] = null !== $item ? segmentParamList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
