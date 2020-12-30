<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dyiotapi\V20171111\Models;

use AlibabaCloud\SDK\Dyiotapi\V20171111\Models\QueryCardStatusResponseBody\cardStatus;
use AlibabaCloud\Tea\Model;

class QueryCardStatusResponseBody extends Model
{
    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var cardStatus
     */
    public $cardStatus;

    /**
     * @var string
     */
    public $code;
    protected $_name = [
        'message'    => 'Message',
        'requestId'  => 'RequestId',
        'cardStatus' => 'CardStatus',
        'code'       => 'Code',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->cardStatus) {
            $res['CardStatus'] = null !== $this->cardStatus ? $this->cardStatus->toMap() : null;
        }
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryCardStatusResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['CardStatus'])) {
            $model->cardStatus = cardStatus::fromMap($map['CardStatus']);
        }
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }

        return $model;
    }
}
