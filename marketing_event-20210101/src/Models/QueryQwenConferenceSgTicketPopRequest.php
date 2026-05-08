<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Marketing_event\V20210101\Models;

use AlibabaCloud\Dara\Model;

class QueryQwenConferenceSgTicketPopRequest extends Model
{
    /**
     * @var string
     */
    public $ticketToken;
    protected $_name = [
        'ticketToken' => 'TicketToken',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->ticketToken) {
            $res['TicketToken'] = $this->ticketToken;
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
        if (isset($map['TicketToken'])) {
            $model->ticketToken = $map['TicketToken'];
        }

        return $model;
    }
}
