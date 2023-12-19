<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cas\V20200407\Models;

use AlibabaCloud\Tea\Model;

class CancelOrderRequestRequest extends Model
{
    /**
     * @description The ID of the certificate application order that you want to cancel.
     *
     * >  After you call the [CreateCertificateForPackageRequest](~~204087~~), [CreateCertificateRequest](~~164105~~), or [CreateCertificateWithCsrRequest](~~178732~~) operation to submit a certificate application, you can obtain the ID of the certificate application order from the **OrderId** response parameter.
     * @example 123451222
     *
     * @var int
     */
    public $orderId;
    protected $_name = [
        'orderId' => 'OrderId',
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CancelOrderRequestRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OrderId'])) {
            $model->orderId = $map['OrderId'];
        }

        return $model;
    }
}
