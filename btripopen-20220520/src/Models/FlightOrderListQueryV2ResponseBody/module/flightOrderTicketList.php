<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightOrderListQueryV2ResponseBody\module;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightOrderListQueryV2ResponseBody\module\flightOrderTicketList\flightList;

class flightOrderTicketList extends Model
{
    /**
     * @var flightList[]
     */
    public $flightList;

    /**
     * @var string[]
     */
    public $ticketNoList;

    /**
     * @var string
     */
    public $userId;
    protected $_name = [
        'flightList' => 'flight_list',
        'ticketNoList' => 'ticket_no_list',
        'userId' => 'user_id',
    ];

    public function validate()
    {
        if (\is_array($this->flightList)) {
            Model::validateArray($this->flightList);
        }
        if (\is_array($this->ticketNoList)) {
            Model::validateArray($this->ticketNoList);
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
                    $res['flight_list'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->ticketNoList) {
            if (\is_array($this->ticketNoList)) {
                $res['ticket_no_list'] = [];
                $n1 = 0;
                foreach ($this->ticketNoList as $item1) {
                    $res['ticket_no_list'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->userId) {
            $res['user_id'] = $this->userId;
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
                    $model->flightList[$n1++] = flightList::fromMap($item1);
                }
            }
        }

        if (isset($map['ticket_no_list'])) {
            if (!empty($map['ticket_no_list'])) {
                $model->ticketNoList = [];
                $n1 = 0;
                foreach ($map['ticket_no_list'] as $item1) {
                    $model->ticketNoList[$n1++] = $item1;
                }
            }
        }

        if (isset($map['user_id'])) {
            $model->userId = $map['user_id'];
        }

        return $model;
    }
}
