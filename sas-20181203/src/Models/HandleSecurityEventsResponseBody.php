<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\SDK\Sas\V20181203\Models\HandleSecurityEventsResponseBody\handleSecurityEventsResponse;
use AlibabaCloud\Tea\Model;

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
        'requestId'                    => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->handleSecurityEventsResponse) {
            $res['HandleSecurityEventsResponse'] = null !== $this->handleSecurityEventsResponse ? $this->handleSecurityEventsResponse->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['HandleSecurityEventsResponse'])) {
            $model->handleSecurityEventsResponse = handleSecurityEventsResponse::fromMap($map['HandleSecurityEventsResponse']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
