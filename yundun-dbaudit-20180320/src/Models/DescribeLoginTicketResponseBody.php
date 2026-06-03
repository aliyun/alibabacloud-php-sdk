<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundundbaudit\V20180320\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Yundundbaudit\V20180320\Models\DescribeLoginTicketResponseBody\loginTicket;

class DescribeLoginTicketResponseBody extends Model
{
    /**
     * @var loginTicket
     */
    public $loginTicket;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'loginTicket' => 'LoginTicket',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->loginTicket) {
            $this->loginTicket->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->loginTicket) {
            $res['LoginTicket'] = null !== $this->loginTicket ? $this->loginTicket->toArray($noStream) : $this->loginTicket;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['LoginTicket'])) {
            $model->loginTicket = loginTicket::fromMap($map['LoginTicket']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
