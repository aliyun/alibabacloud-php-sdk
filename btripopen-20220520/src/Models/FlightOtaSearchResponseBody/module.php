<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightOtaSearchResponseBody;

use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightOtaSearchResponseBody\module\flightList;
use AlibabaCloud\Tea\Model;

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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->flightList) {
            $res['flight_list'] = [];
            if (null !== $this->flightList && \is_array($this->flightList)) {
                $n = 0;
                foreach ($this->flightList as $item) {
                    $res['flight_list'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return module
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['flight_list'])) {
            if (!empty($map['flight_list'])) {
                $model->flightList = [];
                $n                 = 0;
                foreach ($map['flight_list'] as $item) {
                    $model->flightList[$n++] = null !== $item ? flightList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
