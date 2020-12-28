<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models;

use AlibabaCloud\Tea\Model;

class GetGWSConnectTicketResponseBody extends Model
{
    /**
     * @var string
     */
    public $ticket;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'ticket'    => 'Ticket',
        'requestId' => 'RequestId',
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
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetGWSConnectTicketResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Ticket'])) {
            $model->ticket = $map['Ticket'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
