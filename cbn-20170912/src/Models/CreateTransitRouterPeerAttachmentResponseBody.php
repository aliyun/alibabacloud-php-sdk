<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cbn\V20170912\Models;

use AlibabaCloud\Tea\Model;

class CreateTransitRouterPeerAttachmentResponseBody extends Model
{
    /**
     * @description The ID of the request.
     *
     * @example 59422BF5-BAAD-4CFD-9019-9557BD3ACFA3
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The ID of the inter-region connection.
     *
     * @example tr-attach-nwkiqfvw22qesz****
     *
     * @var string
     */
    public $transitRouterAttachmentId;
    protected $_name = [
        'requestId'                 => 'RequestId',
        'transitRouterAttachmentId' => 'TransitRouterAttachmentId',
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
        if (null !== $this->transitRouterAttachmentId) {
            $res['TransitRouterAttachmentId'] = $this->transitRouterAttachmentId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateTransitRouterPeerAttachmentResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TransitRouterAttachmentId'])) {
            $model->transitRouterAttachmentId = $map['TransitRouterAttachmentId'];
        }

        return $model;
    }
}
