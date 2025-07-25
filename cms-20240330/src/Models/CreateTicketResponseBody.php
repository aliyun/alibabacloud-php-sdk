<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models;

use AlibabaCloud\Tea\Model;

class CreateTicketResponseBody extends Model
{
    /**
     * @example eyJ***************.eyJ******************.KUT****************
     *
     * @var string
     */
    public $ticket;
    protected $_name = [
        'ticket' => 'ticket',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->ticket) {
            $res['ticket'] = $this->ticket;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateTicketResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ticket'])) {
            $model->ticket = $map['ticket'];
        }

        return $model;
    }
}
