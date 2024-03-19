<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\IntlFlightOrderDetailResponseBody\module\passengerItemDetailList\ticketList;

use AlibabaCloud\Tea\Model;

class ticketSegmentList extends Model
{
    /**
     * @example K
     *
     * @var string
     */
    public $cabin;

    /**
     * @example Y
     *
     * @var string
     */
    public $cabinClass;

    /**
     * @example false
     *
     * @var bool
     */
    public $modified;

    /**
     * @example OPEN FOR USE
     *
     * @var string
     */
    public $openTicketStatus;

    /**
     * @example false
     *
     * @var bool
     */
    public $refunded;

    /**
     * @example MU507PVGHKG0706
     *
     * @var string
     */
    public $segmentKey;
    protected $_name = [
        'cabin'            => 'cabin',
        'cabinClass'       => 'cabin_class',
        'modified'         => 'modified',
        'openTicketStatus' => 'open_ticket_status',
        'refunded'         => 'refunded',
        'segmentKey'       => 'segment_key',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cabin) {
            $res['cabin'] = $this->cabin;
        }
        if (null !== $this->cabinClass) {
            $res['cabin_class'] = $this->cabinClass;
        }
        if (null !== $this->modified) {
            $res['modified'] = $this->modified;
        }
        if (null !== $this->openTicketStatus) {
            $res['open_ticket_status'] = $this->openTicketStatus;
        }
        if (null !== $this->refunded) {
            $res['refunded'] = $this->refunded;
        }
        if (null !== $this->segmentKey) {
            $res['segment_key'] = $this->segmentKey;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ticketSegmentList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['cabin'])) {
            $model->cabin = $map['cabin'];
        }
        if (isset($map['cabin_class'])) {
            $model->cabinClass = $map['cabin_class'];
        }
        if (isset($map['modified'])) {
            $model->modified = $map['modified'];
        }
        if (isset($map['open_ticket_status'])) {
            $model->openTicketStatus = $map['open_ticket_status'];
        }
        if (isset($map['refunded'])) {
            $model->refunded = $map['refunded'];
        }
        if (isset($map['segment_key'])) {
            $model->segmentKey = $map['segment_key'];
        }

        return $model;
    }
}
