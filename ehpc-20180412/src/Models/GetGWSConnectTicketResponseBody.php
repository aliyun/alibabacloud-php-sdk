<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models;

use AlibabaCloud\Tea\Model;

class GetGWSConnectTicketResponseBody extends Model
{
    /**
     * @example 5198C3E8-85F5-4280-8547-687C1710FE08
     *
     * @var string
     */
    public $requestId;

    /**
     * @example W0VuY29kaG9ydFJlY29ubmVjdEVuY****
     *
     * @var string
     */
    public $ticket;
    protected $_name = [
        'requestId' => 'RequestId',
        'ticket'    => 'Ticket',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->ticket) {
            $res['Ticket'] = $this->ticket;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Ticket'])) {
            $model->ticket = $map['Ticket'];
        }

        return $model;
    }
}
