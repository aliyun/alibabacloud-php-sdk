<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Workorder\V20210610\Models\ListTicketsResponseBody;

use AlibabaCloud\SDK\Workorder\V20210610\Models\ListTicketsResponseBody\data\status;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var status
     */
    public $status;

    /**
     * @var string
     */
    public $ticketId;

    /**
     * @var string
     */
    public $title;
    protected $_name = [
        'status'   => 'Status',
        'ticketId' => 'TicketId',
        'title'    => 'Title',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->status) {
            $res['Status'] = null !== $this->status ? $this->status->toMap() : null;
        }
        if (null !== $this->ticketId) {
            $res['TicketId'] = $this->ticketId;
        }
        if (null !== $this->title) {
            $res['Title'] = $this->title;
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
        if (isset($map['Status'])) {
            $model->status = status::fromMap($map['Status']);
        }
        if (isset($map['TicketId'])) {
            $model->ticketId = $map['TicketId'];
        }
        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }

        return $model;
    }
}
