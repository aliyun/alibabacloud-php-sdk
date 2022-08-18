<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\Tea\Model;

class CreatePdnsUdpIpSegmentResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $validMessage;
    protected $_name = [
        'requestId'    => 'RequestId',
        'validMessage' => 'ValidMessage',
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
        if (null !== $this->validMessage) {
            $res['ValidMessage'] = $this->validMessage;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreatePdnsUdpIpSegmentResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ValidMessage'])) {
            $model->validMessage = $map['ValidMessage'];
        }

        return $model;
    }
}
