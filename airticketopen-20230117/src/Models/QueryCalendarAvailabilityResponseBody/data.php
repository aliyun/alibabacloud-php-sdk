<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AirticketOpen\V20230117\Models\QueryCalendarAvailabilityResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AirticketOpen\V20230117\Models\DataHotelsValue;
use AlibabaCloud\SDK\AirticketOpen\V20230117\Models\QueryCalendarAvailabilityResponseBody\data\failedHotels;

class data extends Model
{
    /**
     * @var failedHotels[]
     */
    public $failedHotels;

    /**
     * @var DataHotelsValue[][]
     */
    public $hotels;

    /**
     * @var string
     */
    public $tracerId;
    protected $_name = [
        'failedHotels' => 'FailedHotels',
        'hotels' => 'Hotels',
        'tracerId' => 'TracerId',
    ];

    public function validate()
    {
        if (\is_array($this->failedHotels)) {
            Model::validateArray($this->failedHotels);
        }
        if (\is_array($this->hotels)) {
            Model::validateArray($this->hotels);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->failedHotels) {
            if (\is_array($this->failedHotels)) {
                $res['FailedHotels'] = [];
                $n1 = 0;
                foreach ($this->failedHotels as $item1) {
                    $res['FailedHotels'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->hotels) {
            if (\is_array($this->hotels)) {
                $res['Hotels'] = [];
                foreach ($this->hotels as $key1 => $value1) {
                    if (\is_array($value1)) {
                        $res['Hotels'][$key1] = [];
                        $n2 = 0;
                        foreach ($value1 as $item2) {
                            $res['Hotels'][$key1][$n2] = null !== $item2 ? $item2->toArray($noStream) : $item2;
                            ++$n2;
                        }
                    }
                }
            }
        }

        if (null !== $this->tracerId) {
            $res['TracerId'] = $this->tracerId;
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
        if (isset($map['FailedHotels'])) {
            if (!empty($map['FailedHotels'])) {
                $model->failedHotels = [];
                $n1 = 0;
                foreach ($map['FailedHotels'] as $item1) {
                    $model->failedHotels[$n1] = failedHotels::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Hotels'])) {
            if (!empty($map['Hotels'])) {
                $model->hotels = [];
                foreach ($map['Hotels'] as $key1 => $value1) {
                    if (!empty($value1)) {
                        $model->hotels[$key1] = [];
                        $n2 = 0;
                        foreach ($value1 as $item2) {
                            $model->hotels[$key1][$n2] = DataHotelsValue::fromMap($item2);
                            ++$n2;
                        }
                    }
                }
            }
        }

        if (isset($map['TracerId'])) {
            $model->tracerId = $map['TracerId'];
        }

        return $model;
    }
}
