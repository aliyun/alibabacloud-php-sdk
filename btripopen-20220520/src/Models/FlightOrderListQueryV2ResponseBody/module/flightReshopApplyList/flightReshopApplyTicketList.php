<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightOrderListQueryV2ResponseBody\module\flightReshopApplyList;

use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightOrderListQueryV2ResponseBody\module\flightReshopApplyList\flightReshopApplyTicketList\flightList;
use AlibabaCloud\Tea\Model;

class flightReshopApplyTicketList extends Model
{
    /**
     * @var flightList[]
     */
    public $flightList;

    /**
     * @var string[]
     */
    public $relateTicketNoList;

    /**
     * @var string[]
     */
    public $ticketNoList;

    /**
     * @example alitrip123
     *
     * @var string
     */
    public $userId;
    protected $_name = [
        'flightList'         => 'flight_list',
        'relateTicketNoList' => 'relate_ticket_no_list',
        'ticketNoList'       => 'ticket_no_list',
        'userId'             => 'user_id',
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
        if (null !== $this->relateTicketNoList) {
            $res['relate_ticket_no_list'] = $this->relateTicketNoList;
        }
        if (null !== $this->ticketNoList) {
            $res['ticket_no_list'] = $this->ticketNoList;
        }
        if (null !== $this->userId) {
            $res['user_id'] = $this->userId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return flightReshopApplyTicketList
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
        if (isset($map['relate_ticket_no_list'])) {
            if (!empty($map['relate_ticket_no_list'])) {
                $model->relateTicketNoList = $map['relate_ticket_no_list'];
            }
        }
        if (isset($map['ticket_no_list'])) {
            if (!empty($map['ticket_no_list'])) {
                $model->ticketNoList = $map['ticket_no_list'];
            }
        }
        if (isset($map['user_id'])) {
            $model->userId = $map['user_id'];
        }

        return $model;
    }
}
