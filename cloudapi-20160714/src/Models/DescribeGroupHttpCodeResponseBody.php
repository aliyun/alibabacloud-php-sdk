<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeGroupHttpCodeResponseBody\httpCodePacket;
use AlibabaCloud\Tea\Model;

class DescribeGroupHttpCodeResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var httpCodePacket
     */
    public $httpCodePacket;
    protected $_name = [
        'requestId'      => 'RequestId',
        'httpCodePacket' => 'HttpCodePacket',
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
        if (null !== $this->httpCodePacket) {
            $res['HttpCodePacket'] = null !== $this->httpCodePacket ? $this->httpCodePacket->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeGroupHttpCodeResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['HttpCodePacket'])) {
            $model->httpCodePacket = httpCodePacket::fromMap($map['HttpCodePacket']);
        }

        return $model;
    }
}
