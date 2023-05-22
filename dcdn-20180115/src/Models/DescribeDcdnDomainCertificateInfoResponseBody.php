<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models;

use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnDomainCertificateInfoResponseBody\certInfos;
use AlibabaCloud\Tea\Model;

class DescribeDcdnDomainCertificateInfoResponseBody extends Model
{
    /**
     * @description The validity period of the certificate. Unit: **months** or **years**.
     *
     * @var certInfos
     */
    public $certInfos;

    /**
     * @description The status of the certificate. Valid values:
     *
     *   **success**: The certificate has taken effect.
     *   **checking**: The system is checking whether the domain name is using Dynamic Route for CDN (DCDN).
     *   **cname_error**: The domain name is not using DCDN.
     *   **domain_invalid**: The domain name contains invalid characters.
     *   **unsupport_wildcard**: The wildcard domain name is not supported.
     *   **applying**: Certificate application is in progress.
     *   **get_token_timeout**: The certificate application request has timed out.
     *   **check_token_timeout**: The verification has timed out.
     *   **get_cert_timeout**: The request to obtain the certificate has timed out.
     *   **failed**: The certificate application request failed.
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
     * @return DescribeDcdnDomainCertificateInfoResponseBody
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
