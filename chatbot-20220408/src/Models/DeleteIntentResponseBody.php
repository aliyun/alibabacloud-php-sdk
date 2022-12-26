<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Chatbot\V20220408\Models;

use AlibabaCloud\Tea\Model;

class DeleteIntentResponseBody extends Model
{
    /**
     * @example 12345
     *
     * @var int
     */
    public $intentId;

    /**
     * @example 3464dfg3qwr34tf34
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'intentId'  => 'IntentId',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->intentId) {
            $res['IntentId'] = $this->intentId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteIntentResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IntentId'])) {
            $model->intentId = $map['IntentId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
