<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceManager\V20200331\Models;

use AlibabaCloud\Tea\Model;

class AcceptHandshakeRequest extends Model
{
    /**
     * @var string
     */
    public $handshakeId;
    protected $_name = [
        'handshakeId' => 'HandshakeId',
    ];

    public function validate()
    {
        Model::validateRequired('handshakeId', $this->handshakeId, true);
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
