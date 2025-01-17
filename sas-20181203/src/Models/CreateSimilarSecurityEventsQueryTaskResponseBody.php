<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\CreateSimilarSecurityEventsQueryTaskResponseBody\createSimilarSecurityEventsQueryTaskResponse;

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
        if (null !== $this->createSimilarSecurityEventsQueryTaskResponse) {
            $this->createSimilarSecurityEventsQueryTaskResponse->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->createSimilarSecurityEventsQueryTaskResponse) {
            $res['CreateSimilarSecurityEventsQueryTaskResponse'] = null !== $this->createSimilarSecurityEventsQueryTaskResponse ? $this->createSimilarSecurityEventsQueryTaskResponse->toArray($noStream) : $this->createSimilarSecurityEventsQueryTaskResponse;
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
        if (isset($map['CreateSimilarSecurityEventsQueryTaskResponse'])) {
            $model->createSimilarSecurityEventsQueryTaskResponse = createSimilarSecurityEventsQueryTaskResponse::fromMap($map['CreateSimilarSecurityEventsQueryTaskResponse']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
