<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceManager\V20200331\Models;

use AlibabaCloud\SDK\ResourceManager\V20200331\Models\GetHandshakeResponseBody\handshake;
use AlibabaCloud\Tea\Model;

class GetHandshakeResponseBody extends Model
{
    /**
     * @var handshake
     */
    public $handshake;

    /**
     * @example 9B34724D-54B0-4A51-B34D-4512372FE1BE
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'handshake' => 'Handshake',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->handshake) {
            $res['Handshake'] = null !== $this->handshake ? $this->handshake->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetHandshakeResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Handshake'])) {
            $model->handshake = handshake::fromMap($map['Handshake']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
