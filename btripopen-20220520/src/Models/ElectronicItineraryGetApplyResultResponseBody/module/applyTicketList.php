<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\ElectronicItineraryGetApplyResultResponseBody\module;

use AlibabaCloud\Tea\Model;

class applyTicketList extends Model
{
    /**
     * @example 5001
     *
     * @var int
     */
    public $failedCode;

    /**
     * @var string
     */
    public $failedReason;

    /**
     * @var int
     */
    public $itineraryStatus;

    /**
     * @example 781-6605285563
     *
     * @var string
     */
    public $ticketNo;
    protected $_name = [
        'failedCode'      => 'failed_code',
        'failedReason'    => 'failed_reason',
        'itineraryStatus' => 'itinerary_status',
        'ticketNo'        => 'ticket_no',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->failedCode) {
            $res['failed_code'] = $this->failedCode;
        }
        if (null !== $this->failedReason) {
            $res['failed_reason'] = $this->failedReason;
        }
        if (null !== $this->itineraryStatus) {
            $res['itinerary_status'] = $this->itineraryStatus;
        }
        if (null !== $this->ticketNo) {
            $res['ticket_no'] = $this->ticketNo;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return applyTicketList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['failed_code'])) {
            $model->failedCode = $map['failed_code'];
        }
        if (isset($map['failed_reason'])) {
            $model->failedReason = $map['failed_reason'];
        }
        if (isset($map['itinerary_status'])) {
            $model->itineraryStatus = $map['itinerary_status'];
        }
        if (isset($map['ticket_no'])) {
            $model->ticketNo = $map['ticket_no'];
        }

        return $model;
    }
}
