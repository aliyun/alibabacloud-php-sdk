<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20200701\Models;

use AlibabaCloud\SDK\CCC\V20200701\Models\GetConversationDetailResponseBody\phrases;
use AlibabaCloud\Tea\Model;

class GetConversationDetailResponseBody extends Model
{
    /**
     * @example OK
     *
     * @var string
     */
    public $code;

    /**
     * @example 200
     *
     * @var int
     */
    public $httpStatusCode;

    /**
     * @var string
     */
    public $message;

    /**
     * @var phrases[]
     */
    public $phrases;

    /**
     * @example 7E407F9B-A278-52A0-B193-3EE5471D7A87
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'code'           => 'Code',
        'httpStatusCode' => 'HttpStatusCode',
        'message'        => 'Message',
        'phrases'        => 'Phrases',
        'requestId'      => 'RequestId',
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
        if (null !== $this->httpStatusCode) {
            $res['HttpStatusCode'] = $this->httpStatusCode;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->phrases) {
            $res['Phrases'] = [];
            if (null !== $this->phrases && \is_array($this->phrases)) {
                $n = 0;
                foreach ($this->phrases as $item) {
                    $res['Phrases'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetConversationDetailResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['HttpStatusCode'])) {
            $model->httpStatusCode = $map['HttpStatusCode'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['Phrases'])) {
            if (!empty($map['Phrases'])) {
                $model->phrases = [];
                $n              = 0;
                foreach ($map['Phrases'] as $item) {
                    $model->phrases[$n++] = null !== $item ? phrases::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
