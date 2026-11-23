<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\QwenB2BMed\V20261121\Models\MedicalAgentChatResponseBody;

use AlibabaCloud\Dara\Model;

class communication extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $responseId;

    /**
     * @var string
     */
    public $sessionId;
    protected $_name = [
        'requestId' => 'requestId',
        'responseId' => 'responseId',
        'sessionId' => 'sessionId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        if (null !== $this->responseId) {
            $res['responseId'] = $this->responseId;
        }

        if (null !== $this->sessionId) {
            $res['sessionId'] = $this->sessionId;
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
        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        if (isset($map['responseId'])) {
            $model->responseId = $map['responseId'];
        }

        if (isset($map['sessionId'])) {
            $model->sessionId = $map['sessionId'];
        }

        return $model;
    }
}
