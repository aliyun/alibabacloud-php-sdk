<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Chatbot\V20171011\Models;

use AlibabaCloud\SDK\Chatbot\V20171011\Models\AssociateResponseBody\associate;
use AlibabaCloud\Tea\Model;

class AssociateResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var associate[]
     */
    public $associate;

    /**
     * @var string
     */
    public $sessionId;

    /**
     * @var string
     */
    public $messageId;
    protected $_name = [
        'requestId' => 'RequestId',
        'associate' => 'Associate',
        'sessionId' => 'SessionId',
        'messageId' => 'MessageId',
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
        if (null !== $this->associate) {
            $res['Associate'] = [];
            if (null !== $this->associate && \is_array($this->associate)) {
                $n = 0;
                foreach ($this->associate as $item) {
                    $res['Associate'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->sessionId) {
            $res['SessionId'] = $this->sessionId;
        }
        if (null !== $this->messageId) {
            $res['MessageId'] = $this->messageId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AssociateResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Associate'])) {
            if (!empty($map['Associate'])) {
                $model->associate = [];
                $n                = 0;
                foreach ($map['Associate'] as $item) {
                    $model->associate[$n++] = null !== $item ? associate::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['SessionId'])) {
            $model->sessionId = $map['SessionId'];
        }
        if (isset($map['MessageId'])) {
            $model->messageId = $map['MessageId'];
        }

        return $model;
    }
}
