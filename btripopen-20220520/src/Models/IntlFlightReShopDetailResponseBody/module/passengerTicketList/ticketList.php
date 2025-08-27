<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\IntlFlightReShopDetailResponseBody\module\passengerTicketList;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\IntlFlightReShopDetailResponseBody\module\passengerTicketList\ticketList\ticketSegmentList;

class ticketList extends Model
{
    /**
     * @var string
     */
    public $issueTime;

    /**
     * @var string
     */
    public $pnrNo;

    /**
     * @var string[]
     */
    public $segmentKeyList;

    /**
     * @var string
     */
    public $ticketNo;

    /**
     * @var ticketSegmentList[]
     */
    public $ticketSegmentList;
    protected $_name = [
        'issueTime' => 'issue_time',
        'pnrNo' => 'pnr_no',
        'segmentKeyList' => 'segment_key_list',
        'ticketNo' => 'ticket_no',
        'ticketSegmentList' => 'ticket_segment_list',
    ];

    public function validate()
    {
        if (\is_array($this->segmentKeyList)) {
            Model::validateArray($this->segmentKeyList);
        }
        if (\is_array($this->ticketSegmentList)) {
            Model::validateArray($this->ticketSegmentList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->issueTime) {
            $res['issue_time'] = $this->issueTime;
        }

        if (null !== $this->pnrNo) {
            $res['pnr_no'] = $this->pnrNo;
        }

        if (null !== $this->segmentKeyList) {
            if (\is_array($this->segmentKeyList)) {
                $res['segment_key_list'] = [];
                $n1 = 0;
                foreach ($this->segmentKeyList as $item1) {
                    $res['segment_key_list'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->ticketNo) {
            $res['ticket_no'] = $this->ticketNo;
        }

        if (null !== $this->ticketSegmentList) {
            if (\is_array($this->ticketSegmentList)) {
                $res['ticket_segment_list'] = [];
                $n1 = 0;
                foreach ($this->ticketSegmentList as $item1) {
                    $res['ticket_segment_list'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['issue_time'])) {
            $model->issueTime = $map['issue_time'];
        }

        if (isset($map['pnr_no'])) {
            $model->pnrNo = $map['pnr_no'];
        }

        if (isset($map['segment_key_list'])) {
            if (!empty($map['segment_key_list'])) {
                $model->segmentKeyList = [];
                $n1 = 0;
                foreach ($map['segment_key_list'] as $item1) {
                    $model->segmentKeyList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['ticket_no'])) {
            $model->ticketNo = $map['ticket_no'];
        }

        if (isset($map['ticket_segment_list'])) {
            if (!empty($map['ticket_segment_list'])) {
                $model->ticketSegmentList = [];
                $n1 = 0;
                foreach ($map['ticket_segment_list'] as $item1) {
                    $model->ticketSegmentList[$n1] = ticketSegmentList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
