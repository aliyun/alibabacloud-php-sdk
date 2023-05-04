<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models;

use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeDomainCertificateInfoResponseBody\certInfos;
use AlibabaCloud\Tea\Model;

class DescribeDomainCertificateInfoResponseBody extends Model
{
    /**
     * @description The unit of the validity period of the SSL certificate.
     *
     *   **months**: The validity period is measured in months.
     *   **years**: The validity period is measured in years.
     *
     * @var certInfos
     */
    public $certInfos;

    /**
     * @description The time when the SSL certificate expires.
     *
     * @example 5C1E43DC-9E51-4771-82C0-7D5ECEB547A1
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
     * @return DescribeDomainCertificateInfoResponseBody
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
