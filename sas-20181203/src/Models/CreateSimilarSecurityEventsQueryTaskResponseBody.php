<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\SDK\Sas\V20181203\Models\CreateSimilarSecurityEventsQueryTaskResponseBody\createSimilarSecurityEventsQueryTaskResponse;
use AlibabaCloud\Tea\Model;

class CreateSimilarSecurityEventsQueryTaskResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var createSimilarSecurityEventsQueryTaskResponse
     */
    public $createSimilarSecurityEventsQueryTaskResponse;
    protected $_name = [
        'requestId'                                    => 'RequestId',
        'createSimilarSecurityEventsQueryTaskResponse' => 'CreateSimilarSecurityEventsQueryTaskResponse',
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
        if (null !== $this->createSimilarSecurityEventsQueryTaskResponse) {
            $res['CreateSimilarSecurityEventsQueryTaskResponse'] = null !== $this->createSimilarSecurityEventsQueryTaskResponse ? $this->createSimilarSecurityEventsQueryTaskResponse->toMap() : null;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['CreateSimilarSecurityEventsQueryTaskResponse'])) {
            $model->createSimilarSecurityEventsQueryTaskResponse = createSimilarSecurityEventsQueryTaskResponse::fromMap($map['CreateSimilarSecurityEventsQueryTaskResponse']);
        }

        return $model;
    }
}
