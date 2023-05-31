<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\SDK\Sas\V20181203\Models\HandleSecurityEventsResponseBody\handleSecurityEventsResponse;
use AlibabaCloud\Tea\Model;

class HandleSecurityEventsResponseBody extends Model
{
    /**
     * @description The handling result of the alert events.
     *
     * @var handleSecurityEventsResponse
     */
    public $handleSecurityEventsResponse;

    /**
     * @description The ID of the request, which is used to locate and troubleshoot issues.
     *
     * @example FF0020B9-999F-5DE2-985F-DB282BDA5311
     *
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
