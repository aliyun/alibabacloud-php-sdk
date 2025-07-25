<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightListingSearchResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightListingSearchResponseBody\module\flightList;

class module extends Model
{
    /**
     * @var flightList[]
     */
    public $flightList;
    protected $_name = [
        'flightList' => 'flight_list',
    ];

    public function validate()
    {
        if (\is_array($this->flightList)) {
            Model::validateArray($this->flightList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->flightList) {
            if (\is_array($this->flightList)) {
                $res['flight_list'] = [];
                $n1 = 0;
                foreach ($this->flightList as $item1) {
                    $res['flight_list'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['flight_list'])) {
            if (!empty($map['flight_list'])) {
                $model->flightList = [];
                $n1 = 0;
                foreach ($map['flight_list'] as $item1) {
                    $model->flightList[$n1] = flightList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
