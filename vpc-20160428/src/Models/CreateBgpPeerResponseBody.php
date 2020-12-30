<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\Tea\Model;

class CreateBgpPeerResponseBody extends Model
{
    /**
     * @var string
     */
    public $bgpPeerId;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'bgpPeerId' => 'BgpPeerId',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bgpPeerId) {
            $res['BgpPeerId'] = $this->bgpPeerId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateBgpPeerResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BgpPeerId'])) {
            $model->bgpPeerId = $map['BgpPeerId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
