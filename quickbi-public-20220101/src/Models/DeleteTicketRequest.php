<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quickbipublic\V20220101\Models;

use AlibabaCloud\Tea\Model;

class DeleteTicketRequest extends Model
{
    /**
     * @description Deletes a specified ticket from an embedded report.
     *
     * @example 040e6f79d****7d283c7206c070
     *
     * @var string
     */
    public $ticket;
    protected $_name = [
        'ticket' => 'Ticket',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ticket) {
            $res['Ticket'] = $this->ticket;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteTicketRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Ticket'])) {
            $model->ticket = $map['Ticket'];
        }

        return $model;
    }
}
