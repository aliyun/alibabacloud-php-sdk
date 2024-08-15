<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceDirectoryMaster\V20220419\Models;

use AlibabaCloud\Tea\Model;

class GetHandshakeRequest extends Model
{
    /**
     * @description The ID of the invitation.
     *
     * This parameter is required.
     * @example h-ycm4rp****
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
     * @return GetHandshakeRequest
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
