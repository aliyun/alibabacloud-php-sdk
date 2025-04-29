<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightOrderDetailV2ResponseBody\module\passengerList\tickets;

use AlibabaCloud\Dara\Model;

class segmentOpenTicketList extends Model
{
    /**
     * @var int
     */
    public $journeyIndex;

    /**
     * @var int
     */
    public $openTicketStatus;

    /**
     * @var int
     */
    public $segmentIndex;
    protected $_name = [
        'journeyIndex' => 'journey_index',
        'openTicketStatus' => 'open_ticket_status',
        'segmentIndex' => 'segment_index',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->journeyIndex) {
            $res['journey_index'] = $this->journeyIndex;
        }

        if (null !== $this->openTicketStatus) {
            $res['open_ticket_status'] = $this->openTicketStatus;
        }

        if (null !== $this->segmentIndex) {
            $res['segment_index'] = $this->segmentIndex;
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
        if (isset($map['journey_index'])) {
            $model->journeyIndex = $map['journey_index'];
        }

        if (isset($map['open_ticket_status'])) {
            $model->openTicketStatus = $map['open_ticket_status'];
        }

        if (isset($map['segment_index'])) {
            $model->segmentIndex = $map['segment_index'];
        }

        return $model;
    }
}
