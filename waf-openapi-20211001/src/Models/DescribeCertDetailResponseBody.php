<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models;

use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeCertDetailResponseBody\certDetail;
use AlibabaCloud\Tea\Model;

class DescribeCertDetailResponseBody extends Model
{
    /**
     * @description The details of the certificate.
     *
     * @var certDetail
     */
    public $certDetail;

    /**
     * @description The ID of the request.
     *
     * @example 3C115DBE-8E53-5A12-9CAF-FD3F****CDF6
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'certDetail' => 'CertDetail',
        'requestId'  => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->certDetail) {
            $res['CertDetail'] = null !== $this->certDetail ? $this->certDetail->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeCertDetailResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CertDetail'])) {
            $model->certDetail = certDetail::fromMap($map['CertDetail']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
