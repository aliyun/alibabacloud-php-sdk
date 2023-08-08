<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cbn\V20170912\Models;

use AlibabaCloud\Tea\Model;

class CreateTransitRouterVbrAttachmentResponseBody extends Model
{
    /**
     * @description The ID of the request.
     *
     * @example C087A369-82B9-43EF-91F4-4B63A9C6E6B6
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The ID of the VBR connection.
     *
     * @example tr-attach-ia340z7xis7t5s****
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
     * @return CreateTransitRouterVbrAttachmentResponseBody
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
