<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\HandleSecurityEventsResponseBody\handleSecurityEventsResponse;

class HandleSecurityEventsResponseBody extends Model
{
    /**
     * @var handleSecurityEventsResponse
     */
    public $handleSecurityEventsResponse;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'handleSecurityEventsResponse' => 'HandleSecurityEventsResponse',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->handleSecurityEventsResponse) {
            $this->handleSecurityEventsResponse->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->handleSecurityEventsResponse) {
            $res['HandleSecurityEventsResponse'] = null !== $this->handleSecurityEventsResponse ? $this->handleSecurityEventsResponse->toArray($noStream) : $this->handleSecurityEventsResponse;
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
        if (isset($map['HandleSecurityEventsResponse'])) {
            $model->handleSecurityEventsResponse = handleSecurityEventsResponse::fromMap($map['HandleSecurityEventsResponse']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
