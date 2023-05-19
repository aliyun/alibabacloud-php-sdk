<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models;

use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnDomainByCertificateResponseBody\certInfos;
use AlibabaCloud\Tea\Model;

class DescribeDcdnDomainByCertificateResponseBody extends Model
{
    /**
     * @description The information about the certificate.
     *
     * @var certInfos
     */
    public $certInfos;

    /**
     * @description The ID of the request.
     *
     * @example ASAF2FDS-12SADSA-DDSAE3D-DSADCD4C-CDADS2D
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'certInfos' => 'CertInfos',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->certInfos) {
            $res['CertInfos'] = null !== $this->certInfos ? $this->certInfos->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDcdnDomainByCertificateResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CertInfos'])) {
            $model->certInfos = certInfos::fromMap($map['CertInfos']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
