<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quickbipublic\V20220101\Models;

use AlibabaCloud\Tea\Model;

class DelayTicketExpireTimeRequest extends Model
{
    /**
     * @description The time to postpone.
     *
     *   Unit: minutes. Valid values: 0 to 240. Unit: minutes. Valid values: 4 hours.
     *   Expired bills cannot be extended.
     *
     * @example 200
     *
     * @var int
     */
    public $expireTime;

    /**
     * @description The value of the third-party embedded ticket, that is, the accessTicket value in the URL.
     *
     * @example 040e6f79d33444838e*****c7206c070
     *
     * @var string
     */
    public $ticket;
    protected $_name = [
        'expireTime' => 'ExpireTime',
        'ticket'     => 'Ticket',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->expireTime) {
            $res['ExpireTime'] = $this->expireTime;
        }
        if (null !== $this->ticket) {
            $res['Ticket'] = $this->ticket;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DelayTicketExpireTimeRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ExpireTime'])) {
            $model->expireTime = $map['ExpireTime'];
        }
        if (isset($map['Ticket'])) {
            $model->ticket = $map['Ticket'];
        }

        return $model;
    }
}
