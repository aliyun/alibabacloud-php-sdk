<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cas\V20200407\Models;

use AlibabaCloud\Tea\Model;

class RenewCertificateOrderForPackageRequestResponseBody extends Model
{
    /**
     * @description The ID of the certificate application order that is renewed.
     *
     * > You can use the ID to query the status of the certificate application. For more information, see [DescribeCertificateState](~~455800~~).
     * @example 323451222
     *
     * @var int
     */
    public $orderId;

    /**
     * @description The ID of the request.
     *
     * @example 082FAB35-6AB9-4FD5-8750-D36673548E76
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'orderId'   => 'OrderId',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->orderId) {
            $res['OrderId'] = $this->orderId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RenewCertificateOrderForPackageRequestResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OrderId'])) {
            $model->orderId = $map['OrderId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
