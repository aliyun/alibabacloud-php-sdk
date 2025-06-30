<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\IntlFlightOrderDetailResponseBody\module\passengerTicketList\ticketList;

use AlibabaCloud\Dara\Model;

class ticketSegmentList extends Model
{
    /**
     * @var string
     */
    public $cabin;

    /**
     * @var string
     */
    public $cabinClass;

    /**
     * @var bool
     */
    public $modified;

    /**
     * @var string
     */
    public $openTicketStatus;

    /**
     * @var bool
     */
    public $refunded;

    /**
     * @var string
     */
    public $segmentKey;
    protected $_name = [
        'cabin' => 'cabin',
        'cabinClass' => 'cabin_class',
        'modified' => 'modified',
        'openTicketStatus' => 'open_ticket_status',
        'refunded' => 'refunded',
        'segmentKey' => 'segment_key',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
