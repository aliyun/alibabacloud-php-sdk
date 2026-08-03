<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AirticketOpen\V20230117\Models\QueryAvailabilityResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AirticketOpen\V20230117\Models\DataHotelsValue;

class data extends Model
{
    /**
     * @var DataHotelsValue[][]
     */
    public $hotels;

    /**
     * @var string
     */
    public $tracerId;
    protected $_name = [
        'hotels' => 'Hotels',
        'tracerId' => 'TracerId',
    ];

    public function validate()
    {
        if (\is_array($this->hotels)) {
            Model::validateArray($this->hotels);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
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
