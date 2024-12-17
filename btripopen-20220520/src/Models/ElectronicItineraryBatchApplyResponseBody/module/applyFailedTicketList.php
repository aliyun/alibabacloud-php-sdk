<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\ElectronicItineraryBatchApplyResponseBody\module;

use AlibabaCloud\Tea\Model;

class applyFailedTicketList extends Model
{
    /**
     * @var int
     */
    public $failedCode;

    /**
     * @var string
     */
    public $failedReason;

    /**
     * @var string
     */
    public $ticketNo;
    protected $_name = [
        'failedCode'   => 'failed_code',
        'failedReason' => 'failed_reason',
        'ticketNo'     => 'ticket_no',
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
        if (null !== $this->ticketNo) {
            $res['ticket_no'] = $this->ticketNo;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return applyFailedTicketList
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
        if (isset($map['ticket_no'])) {
            $model->ticketNo = $map['ticket_no'];
        }

        return $model;
    }
}
