<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\TicketChangingEnquiryResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\TicketChangingEnquiryResponseBody\module\flightInfoList;

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
        if (\is_array($this->flightInfoList)) {
            Model::validateArray($this->flightInfoList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->flightInfoList) {
            if (\is_array($this->flightInfoList)) {
                $res['flight_info_list'] = [];
                $n1 = 0;
                foreach ($this->flightInfoList as $item1) {
                    $res['flight_info_list'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['flight_info_list'])) {
            if (!empty($map['flight_info_list'])) {
                $model->flightInfoList = [];
                $n1 = 0;
                foreach ($map['flight_info_list'] as $item1) {
                    $model->flightInfoList[$n1++] = flightInfoList::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
