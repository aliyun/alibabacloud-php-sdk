<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Workorder\V20210610\Models;

use AlibabaCloud\Dara\Model;

class ListTicketNotesRequest extends Model
{
    /**
     * @var string
     */
    public $ticketId;

    /**
     * @var string
     */
    public $uid;
    protected $_name = [
        'ticketId' => 'TicketId',
        'uid' => 'Uid',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->ticketId) {
            $res['TicketId'] = $this->ticketId;
        }

        if (null !== $this->uid) {
            $res['Uid'] = $this->uid;
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
        if (isset($map['TicketId'])) {
            $model->ticketId = $map['TicketId'];
        }

        if (isset($map['Uid'])) {
            $model->uid = $map['Uid'];
        }

        return $model;
    }
}
