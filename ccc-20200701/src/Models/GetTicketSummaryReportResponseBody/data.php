<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20200701\Models\GetTicketSummaryReportResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $ticketsAssigned;
    /**
     * @var string
     */
    public $ticketsCreated;
    /**
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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
