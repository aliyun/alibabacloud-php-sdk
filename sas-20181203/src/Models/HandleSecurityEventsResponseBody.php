<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\SDK\Sas\V20181203\Models\HandleSecurityEventsResponseBody\handleSecurityEventsResponse;
use AlibabaCloud\Tea\Model;

class HandleSecurityEventsResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var handleSecurityEventsResponse
     */
    public $handleSecurityEventsResponse;
    protected $_name = [
        'requestId'                    => 'RequestId',
        'handleSecurityEventsResponse' => 'HandleSecurityEventsResponse',
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
        if (null !== $this->handleSecurityEventsResponse) {
            $res['HandleSecurityEventsResponse'] = null !== $this->handleSecurityEventsResponse ? $this->handleSecurityEventsResponse->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return HandleSecurityEventsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['HandleSecurityEventsResponse'])) {
            $model->handleSecurityEventsResponse = handleSecurityEventsResponse::fromMap($map['HandleSecurityEventsResponse']);
        }

        return $model;
    }
}
