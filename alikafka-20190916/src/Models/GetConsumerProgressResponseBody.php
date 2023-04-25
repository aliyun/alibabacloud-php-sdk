<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alikafka\V20190916\Models;

use AlibabaCloud\SDK\Alikafka\V20190916\Models\GetConsumerProgressResponseBody\consumerProgress;
use AlibabaCloud\Tea\Model;

class GetConsumerProgressResponseBody extends Model
{
    /**
     * @description The returned message.
     *
     * @example 200
     *
     * @var int
     */
    public $code;

    /**
     * @description The time when the last message consumed by the consumer group was generated.
     *
     * @var consumerProgress
     */
    public $consumerProgress;

    /**
     * @description The ID of the request.
     *
     * @example operation success.
     *
     * @var string
     */
    public $message;

    /**
     * @description Indicates whether the request is successful.
     *
     * @example 252820E1-A2E6-45F2-B4C9-1056B8CE****
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The consumption status of the consumer group.
     *
     * @example true
     *
     * @var bool
     */
    public $success;
    protected $_name = [
        'code'             => 'Code',
        'consumerProgress' => 'ConsumerProgress',
        'message'          => 'Message',
        'requestId'        => 'RequestId',
        'success'          => 'Success',
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
        if (null !== $this->consumerProgress) {
            $res['ConsumerProgress'] = null !== $this->consumerProgress ? $this->consumerProgress->toMap() : null;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetConsumerProgressResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['ConsumerProgress'])) {
            $model->consumerProgress = consumerProgress::fromMap($map['ConsumerProgress']);
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}
