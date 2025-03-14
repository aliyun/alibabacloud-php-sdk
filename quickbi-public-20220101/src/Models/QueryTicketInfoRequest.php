<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quickbipublic\V20220101\Models;

use AlibabaCloud\Tea\Model;

class QueryTicketInfoRequest extends Model
{
    /**
     * @description Obtains the details of a specified ticket for a report that is not embedded in the report.
     *
     * This parameter is required.
     *
     * @example a27a9aec-****-****-bd40-1a21ea41d7c5
     *
     * @var string
     */
    public $ticket;
    protected $_name = [
        'ticket' => 'Ticket',
    ];

    public function validate() {}

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
     * @return QueryTicketInfoRequest
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
