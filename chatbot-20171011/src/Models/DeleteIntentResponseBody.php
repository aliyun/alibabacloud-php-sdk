<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Chatbot\V20171011\Models;

use AlibabaCloud\Tea\Model;

class DeleteIntentResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $intentId;
    protected $_name = [
        'requestId' => 'RequestId',
        'intentId'  => 'IntentId',
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
        if (null !== $this->intentId) {
            $res['IntentId'] = $this->intentId;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['IntentId'])) {
            $model->intentId = $map['IntentId'];
        }

        return $model;
    }
}
