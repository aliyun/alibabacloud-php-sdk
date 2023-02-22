<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceManager\V20200331\Models;

use AlibabaCloud\Tea\Model;

class AcceptHandshakeRequest extends Model
{
    /**
     * @example h-Ih8IuPfvV0t0****
     *
     * @var string
     */
    public $handshakeId;
    protected $_name = [
        'handshakeId' => 'HandshakeId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->handshakeId) {
            $res['HandshakeId'] = $this->handshakeId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AcceptHandshakeRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['HandshakeId'])) {
            $model->handshakeId = $map['HandshakeId'];
        }

        return $model;
    }
}
