<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceManager\V20200331\Models;

use AlibabaCloud\SDK\ResourceManager\V20200331\Models\GetHandshakeResponseBody\handshake;
use AlibabaCloud\Tea\Model;

class GetHandshakeResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var handshake
     */
    public $handshake;
    protected $_name = [
        'requestId' => 'RequestId',
        'handshake' => 'Handshake',
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
        if (null !== $this->handshake) {
            $res['Handshake'] = null !== $this->handshake ? $this->handshake->toMap() : null;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Handshake'])) {
            $model->handshake = handshake::fromMap($map['Handshake']);
        }

        return $model;
    }
}
