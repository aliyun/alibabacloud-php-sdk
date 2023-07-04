<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\Tea\Model;

class CreateBgpPeerResponseBody extends Model
{
    /**
     * @description The ID of the BGP peer.
     *
     * @example bgp-m5eoyp2mwegk8ce9v****
     *
     * @var string
     */
    public $bgpPeerId;

    /**
     * @description The ID of the request.
     *
     * @example D4B7649A-61BB-4C64-A586-1DFF1EDA6A42
     *
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
