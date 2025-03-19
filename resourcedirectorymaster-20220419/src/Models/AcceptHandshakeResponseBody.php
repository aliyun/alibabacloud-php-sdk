<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceDirectoryMaster\V20220419\Models;

use AlibabaCloud\SDK\ResourceDirectoryMaster\V20220419\Models\AcceptHandshakeResponseBody\handshake;
use AlibabaCloud\Tea\Model;

class AcceptHandshakeResponseBody extends Model
{
    /**
     * @description The information of the invitation.
     *
     * @var handshake
     */
    public $handshake;

    /**
     * @description The ID of the request.
     *
     * @example 5828C836-3286-49A6-9006-15231BB19342
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'handshake' => 'Handshake',
        'requestId' => 'RequestId',
    ];

    public function validate() {}

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
     * @return AcceptHandshakeResponseBody
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
