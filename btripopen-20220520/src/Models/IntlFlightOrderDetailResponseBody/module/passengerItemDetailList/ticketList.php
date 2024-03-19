<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\IntlFlightOrderDetailResponseBody\module\passengerItemDetailList;

use AlibabaCloud\SDK\BtripOpen\V20220520\Models\IntlFlightOrderDetailResponseBody\module\passengerItemDetailList\ticketList\priceInfo;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\IntlFlightOrderDetailResponseBody\module\passengerItemDetailList\ticketList\ticketSegmentList;
use AlibabaCloud\Tea\Model;

class ticketList extends Model
{
    /**
     * @example 2024-03-05 00:00:00
     *
     * @var string
     */
    public $issueTime;

    /**
     * @var priceInfo
     */
    public $priceInfo;

    /**
     * @example 000-1709625883
     *
     * @var string
     */
    public $ticketNo;

    /**
     * @var ticketSegmentList[]
     */
    public $ticketSegmentList;
    protected $_name = [
        'issueTime'         => 'issue_time',
        'priceInfo'         => 'price_info',
        'ticketNo'          => 'ticket_no',
        'ticketSegmentList' => 'ticket_segment_list',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->issueTime) {
            $res['issue_time'] = $this->issueTime;
        }
        if (null !== $this->priceInfo) {
            $res['price_info'] = null !== $this->priceInfo ? $this->priceInfo->toMap() : null;
        }
        if (null !== $this->ticketNo) {
            $res['ticket_no'] = $this->ticketNo;
        }
        if (null !== $this->ticketSegmentList) {
            $res['ticket_segment_list'] = [];
            if (null !== $this->ticketSegmentList && \is_array($this->ticketSegmentList)) {
                $n = 0;
                foreach ($this->ticketSegmentList as $item) {
                    $res['ticket_segment_list'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ticketList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['issue_time'])) {
            $model->issueTime = $map['issue_time'];
        }
        if (isset($map['price_info'])) {
            $model->priceInfo = priceInfo::fromMap($map['price_info']);
        }
        if (isset($map['ticket_no'])) {
            $model->ticketNo = $map['ticket_no'];
        }
        if (isset($map['ticket_segment_list'])) {
            if (!empty($map['ticket_segment_list'])) {
                $model->ticketSegmentList = [];
                $n                        = 0;
                foreach ($map['ticket_segment_list'] as $item) {
                    $model->ticketSegmentList[$n++] = null !== $item ? ticketSegmentList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
