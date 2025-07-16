<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\SDK\Aliding\V20230426\Models\InvokeAssistantResponseBody\messages;
use AlibabaCloud\Tea\Model;

class InvokeAssistantResponseBody extends Model
{
    /**
     * @var messages[]
     */
    public $messages;

    /**
     * @example 0FAAEC9C-C6C8-5C87-AF8E-1195889BBXXX
     *
     * @var string
     */
    public $requestId;

    /**
     * @example sessionId1
     *
     * @var string
     */
    public $sessionId;

    /**
     * @example true
     *
     * @var bool
     */
    public $streamEnd;
    protected $_name = [
        'messages' => 'messages',
        'requestId' => 'requestId',
        'sessionId' => 'sessionId',
        'streamEnd' => 'streamEnd',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->messages) {
            $res['messages'] = [];
            if (null !== $this->messages && \is_array($this->messages)) {
                $n = 0;
                foreach ($this->messages as $item) {
                    $res['messages'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }
        if (null !== $this->sessionId) {
            $res['sessionId'] = $this->sessionId;
        }
        if (null !== $this->streamEnd) {
            $res['streamEnd'] = $this->streamEnd;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return InvokeAssistantResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['messages'])) {
            if (!empty($map['messages'])) {
                $model->messages = [];
                $n = 0;
                foreach ($map['messages'] as $item) {
                    $model->messages[$n++] = null !== $item ? messages::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }
        if (isset($map['sessionId'])) {
            $model->sessionId = $map['sessionId'];
        }
        if (isset($map['streamEnd'])) {
            $model->streamEnd = $map['streamEnd'];
        }

        return $model;
    }
}
