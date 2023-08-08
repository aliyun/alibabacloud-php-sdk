<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cbn\V20170912\Models;

use AlibabaCloud\Tea\Model;

class CreateTransitRouterVpnAttachmentResponseBody extends Model
{
    /**
     * @description The ID of the request.
     *
     * @example 8B5DD40A-3A29-5AC0-B8DA-05FD10D5C893
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The ID of the VPN attachment.
     *
     * @example tr-attach-y5dup2qwfyh9lu****
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
     * @return CreateTransitRouterVpnAttachmentResponseBody
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
