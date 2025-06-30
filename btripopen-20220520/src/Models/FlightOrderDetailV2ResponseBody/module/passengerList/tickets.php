<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightOrderDetailV2ResponseBody\module\passengerList;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightOrderDetailV2ResponseBody\module\passengerList\tickets\segmentOpenTicketList;

class tickets extends Model
{
    /**
     * @var string
     */
    public $channel;

    /**
     * @var string
     */
    public $journeyTitle;

    /**
     * @var string
     */
    public $openTicketStatus;

    /**
     * @var string
     */
    public $pcc;

    /**
     * @var segmentOpenTicketList[]
     */
    public $segmentOpenTicketList;

    /**
     * @var string
     */
    public $ticketAuthMemo;

    /**
     * @var int
     */
    public $ticketAuthStatus;

    /**
     * @var string
     */
    public $ticketNo;

    /**
     * @var int
     */
    public $ticketPrice;

    /**
     * @var string
     */
    public $ticketStatus;
    protected $_name = [
        'channel' => 'channel',
        'journeyTitle' => 'journey_title',
        'openTicketStatus' => 'open_ticket_status',
        'pcc' => 'pcc',
        'segmentOpenTicketList' => 'segment_open_ticket_list',
        'ticketAuthMemo' => 'ticket_auth_memo',
        'ticketAuthStatus' => 'ticket_auth_status',
        'ticketNo' => 'ticket_no',
        'ticketPrice' => 'ticket_price',
        'ticketStatus' => 'ticket_status',
    ];

    public function validate()
    {
        if (\is_array($this->segmentOpenTicketList)) {
            Model::validateArray($this->segmentOpenTicketList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->channel) {
            $res['channel'] = $this->channel;
        }

        if (null !== $this->journeyTitle) {
            $res['journey_title'] = $this->journeyTitle;
        }

        if (null !== $this->openTicketStatus) {
            $res['open_ticket_status'] = $this->openTicketStatus;
        }

        if (null !== $this->pcc) {
            $res['pcc'] = $this->pcc;
        }

        if (null !== $this->segmentOpenTicketList) {
            if (\is_array($this->segmentOpenTicketList)) {
                $res['segment_open_ticket_list'] = [];
                $n1 = 0;
                foreach ($this->segmentOpenTicketList as $item1) {
                    $res['segment_open_ticket_list'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->ticketAuthMemo) {
            $res['ticket_auth_memo'] = $this->ticketAuthMemo;
        }

        if (null !== $this->ticketAuthStatus) {
            $res['ticket_auth_status'] = $this->ticketAuthStatus;
        }

        if (null !== $this->ticketNo) {
            $res['ticket_no'] = $this->ticketNo;
        }

        if (null !== $this->ticketPrice) {
            $res['ticket_price'] = $this->ticketPrice;
        }

        if (null !== $this->ticketStatus) {
            $res['ticket_status'] = $this->ticketStatus;
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
        if (isset($map['channel'])) {
            $model->channel = $map['channel'];
        }

        if (isset($map['journey_title'])) {
            $model->journeyTitle = $map['journey_title'];
        }

        if (isset($map['open_ticket_status'])) {
            $model->openTicketStatus = $map['open_ticket_status'];
        }

        if (isset($map['pcc'])) {
            $model->pcc = $map['pcc'];
        }

        if (isset($map['segment_open_ticket_list'])) {
            if (!empty($map['segment_open_ticket_list'])) {
                $model->segmentOpenTicketList = [];
                $n1 = 0;
                foreach ($map['segment_open_ticket_list'] as $item1) {
                    $model->segmentOpenTicketList[$n1] = segmentOpenTicketList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['ticket_auth_memo'])) {
            $model->ticketAuthMemo = $map['ticket_auth_memo'];
        }

        if (isset($map['ticket_auth_status'])) {
            $model->ticketAuthStatus = $map['ticket_auth_status'];
        }

        if (isset($map['ticket_no'])) {
            $model->ticketNo = $map['ticket_no'];
        }

        if (isset($map['ticket_price'])) {
            $model->ticketPrice = $map['ticket_price'];
        }

        if (isset($map['ticket_status'])) {
            $model->ticketStatus = $map['ticket_status'];
        }

        return $model;
    }
}
