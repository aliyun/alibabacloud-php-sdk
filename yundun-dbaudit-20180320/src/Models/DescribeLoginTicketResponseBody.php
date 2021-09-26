<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundundbaudit\V20180320\Models;

use AlibabaCloud\SDK\Yundundbaudit\V20180320\Models\DescribeLoginTicketResponseBody\loginTicket;
use AlibabaCloud\Tea\Model;

class DescribeLoginTicketResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var loginTicket
     */
    public $loginTicket;
    protected $_name = [
        'requestId'   => 'RequestId',
        'loginTicket' => 'LoginTicket',
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
        if (null !== $this->loginTicket) {
            $res['LoginTicket'] = null !== $this->loginTicket ? $this->loginTicket->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeLoginTicketResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['LoginTicket'])) {
            $model->loginTicket = loginTicket::fromMap($map['LoginTicket']);
        }

        return $model;
    }
}
