<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Holowatcher\V20200730\Models;

use AlibabaCloud\Tea\Model;

class AliyunTicketJwtCreateRequest extends Model
{
    /**
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
     * @return AliyunTicketJwtCreateRequest
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
