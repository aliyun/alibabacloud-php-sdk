<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\TicketChangingEnquiryResponseBody;

use AlibabaCloud\SDK\BtripOpen\V20220520\Models\TicketChangingEnquiryResponseBody\module\flightInfoList;
use AlibabaCloud\Tea\Model;

class module extends Model
{
    /**
     * @var flightInfoList[]
     */
    public $flightInfoList;
    protected $_name = [
        'flightInfoList' => 'flight_info_list',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->flightInfoList) {
            $res['flight_info_list'] = [];
            if (null !== $this->flightInfoList && \is_array($this->flightInfoList)) {
                $n = 0;
                foreach ($this->flightInfoList as $item) {
                    $res['flight_info_list'][$n++] = null !== $item ? $item->toMap() : $item;
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
        if (isset($map['flight_info_list'])) {
            if (!empty($map['flight_info_list'])) {
                $model->flightInfoList = [];
                $n                     = 0;
                foreach ($map['flight_info_list'] as $item) {
                    $model->flightInfoList[$n++] = null !== $item ? flightInfoList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
