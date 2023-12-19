<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cas\V20200407\Models;

use AlibabaCloud\Tea\Model;

class CreateCertificateForPackageRequestResponseBody extends Model
{
    /**
     * @description The ID of the certificate application order.
     *
     * > You can use the ID to query the status of the certificate application order. For more information, see [DescribeCertificateState](~~455800~~).
     * @example 2021010
     *
     * @var int
     */
    public $orderId;

    /**
     * @description The ID of the request, which is used to locate and troubleshoot issues.
     *
     * @example 5890029B-938A-589E-98B9-3DEC7BA7C400
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
     * @return CreateCertificateForPackageRequestResponseBody
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
