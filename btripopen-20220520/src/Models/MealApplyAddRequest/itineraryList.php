<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\MealApplyAddRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\MealApplyAddRequest\itineraryList\cities;

class itineraryList extends Model
{
    /**
     * @var cities[]
     */
    public $cities;

    /**
     * @var string
     */
    public $endDate;

    /**
     * @var string
     */
    public $startDate;

    /**
     * @var string
     */
    public $thirdpartItineraryId;
    protected $_name = [
        'cities' => 'cities',
        'endDate' => 'end_date',
        'startDate' => 'start_date',
        'thirdpartItineraryId' => 'thirdpart_itinerary_id',
    ];

    public function validate()
    {
        if (\is_array($this->cities)) {
            Model::validateArray($this->cities);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cities) {
            if (\is_array($this->cities)) {
                $res['cities'] = [];
                $n1 = 0;
                foreach ($this->cities as $item1) {
                    $res['cities'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->endDate) {
            $res['end_date'] = $this->endDate;
        }

        if (null !== $this->startDate) {
            $res['start_date'] = $this->startDate;
        }

        if (null !== $this->thirdpartItineraryId) {
            $res['thirdpart_itinerary_id'] = $this->thirdpartItineraryId;
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
        if (isset($map['cities'])) {
            if (!empty($map['cities'])) {
                $model->cities = [];
                $n1 = 0;
                foreach ($map['cities'] as $item1) {
                    $model->cities[$n1] = cities::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['end_date'])) {
            $model->endDate = $map['end_date'];
        }

        if (isset($map['start_date'])) {
            $model->startDate = $map['start_date'];
        }

        if (isset($map['thirdpart_itinerary_id'])) {
            $model->thirdpartItineraryId = $map['thirdpart_itinerary_id'];
        }

        return $model;
    }
}
