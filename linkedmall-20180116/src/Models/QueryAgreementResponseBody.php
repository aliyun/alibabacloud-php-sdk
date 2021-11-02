<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20180116\Models;

use AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryAgreementResponseBody\queryAgreementResponse;
use AlibabaCloud\Tea\Model;

class QueryAgreementResponseBody extends Model
{
    /**
     * @var string
     */
    public $code;

    /**
     * @var string
     */
    public $message;

    /**
     * @var queryAgreementResponse
     */
    public $queryAgreementResponse;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'code'                   => 'Code',
        'message'                => 'Message',
        'queryAgreementResponse' => 'QueryAgreementResponse',
        'requestId'              => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->queryAgreementResponse) {
            $res['QueryAgreementResponse'] = null !== $this->queryAgreementResponse ? $this->queryAgreementResponse->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryAgreementResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['QueryAgreementResponse'])) {
            $model->queryAgreementResponse = queryAgreementResponse::fromMap($map['QueryAgreementResponse']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
