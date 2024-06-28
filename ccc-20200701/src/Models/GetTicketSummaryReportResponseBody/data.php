<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20200701\Models\GetTicketSummaryReportResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example 3
     *
     * @var string
     */
    public $ticketsAssigned;

    /**
     * @example 10
     *
     * @var string
     */
    public $ticketsCreated;

    /**
     * @example 5
     *
     * @var string
     */
    public $ticketsParticipated;
    protected $_name = [
        'ticketsAssigned'     => 'TicketsAssigned',
        'ticketsCreated'      => 'TicketsCreated',
        'ticketsParticipated' => 'TicketsParticipated',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ticketsAssigned) {
            $res['TicketsAssigned'] = $this->ticketsAssigned;
        }
        if (null !== $this->ticketsCreated) {
            $res['TicketsCreated'] = $this->ticketsCreated;
        }
        if (null !== $this->ticketsParticipated) {
            $res['TicketsParticipated'] = $this->ticketsParticipated;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TicketsAssigned'])) {
            $model->ticketsAssigned = $map['TicketsAssigned'];
        }
        if (isset($map['TicketsCreated'])) {
            $model->ticketsCreated = $map['TicketsCreated'];
        }
        if (isset($map['TicketsParticipated'])) {
            $model->ticketsParticipated = $map['TicketsParticipated'];
        }

        return $model;
    }
}
