<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Chatbot\V20171011\Models;

use AlibabaCloud\SDK\Chatbot\V20171011\Models\AssociateResponseBody\associate;
use AlibabaCloud\Tea\Model;

class AssociateResponseBody extends Model
{
    /**
     * @var associate[]
     */
    public $associate;

    /**
     * @example 11bab7a2e34c4e02bcf0ebcb76bb812d
     *
     * @var string
     */
    public $messageId;

    /**
     * @example 402FCD5F-518E-4C8E-8A6B-EFEADA69D757
     *
     * @var string
     */
    public $requestId;

    /**
     * @example 25670484f2ab4b42ba90acbfbf86d4cd
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
