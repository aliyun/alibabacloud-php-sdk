<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\SDK\Sas\V20181203\Models\CreateSimilarSecurityEventsQueryTaskResponseBody\createSimilarSecurityEventsQueryTaskResponse;
use AlibabaCloud\Tea\Model;

class CreateSimilarSecurityEventsQueryTaskResponseBody extends Model
{
    /**
     * @var createSimilarSecurityEventsQueryTaskResponse
     */
    public $createSimilarSecurityEventsQueryTaskResponse;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'createSimilarSecurityEventsQueryTaskResponse' => 'CreateSimilarSecurityEventsQueryTaskResponse',
        'requestId'                                    => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createSimilarSecurityEventsQueryTaskResponse) {
            $res['CreateSimilarSecurityEventsQueryTaskResponse'] = null !== $this->createSimilarSecurityEventsQueryTaskResponse ? $this->createSimilarSecurityEventsQueryTaskResponse->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateSimilarSecurityEventsQueryTaskResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreateSimilarSecurityEventsQueryTaskResponse'])) {
            $model->createSimilarSecurityEventsQueryTaskResponse = createSimilarSecurityEventsQueryTaskResponse::fromMap($map['CreateSimilarSecurityEventsQueryTaskResponse']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
