<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Chatbot\V20220408\Models;

use AlibabaCloud\SDK\Chatbot\V20220408\Models\AssociateResponseBody\associate;
use AlibabaCloud\Tea\Model;

class AssociateResponseBody extends Model
{
    /**
     * @var associate[]
     */
    public $associate;

    /**
     * @example 5ADF0EBD-7C50-1922-A28B-43215B47CC1A
     *
     * @var string
     */
    public $messageId;

    /**
     * @example 5C20F0D4-9721-178A-8236-3BF990634962
     *
     * @var string
     */
    public $requestId;

    /**
     * @example 1531ded6b3df4afca4be63943f708bb7
     *
     * @var string
     */
    public $sessionId;
    protected $_name = [
        'associate' => 'Associate',
        'messageId' => 'MessageId',
        'requestId' => 'RequestId',
        'sessionId' => 'SessionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->associate) {
            $res['Associate'] = [];
            if (null !== $this->associate && \is_array($this->associate)) {
                $n = 0;
                foreach ($this->associate as $item) {
                    $res['Associate'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->messageId) {
            $res['MessageId'] = $this->messageId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->sessionId) {
            $res['SessionId'] = $this->sessionId;
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
        if (isset($map['Associate'])) {
            if (!empty($map['Associate'])) {
                $model->associate = [];
                $n                = 0;
                foreach ($map['Associate'] as $item) {
                    $model->associate[$n++] = null !== $item ? associate::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['MessageId'])) {
            $model->messageId = $map['MessageId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SessionId'])) {
            $model->sessionId = $map['SessionId'];
        }

        return $model;
    }
}
