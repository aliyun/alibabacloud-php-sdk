<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models;

use AlibabaCloud\Tea\Model;

class SetCdnDomainCSRCertificateRequest extends Model
{
    /**
     * @description The accelerated domain name for which you want to configure an SSL certificate. The domain name must have HTTPS secure acceleration enabled.
     *
     * @example example.com
     *
     * @var string
     */
    public $domainName;

    /**
     * @description The content of the certificate. The certificate must match the certificate signing request (CSR) created by calling the [CreateCdnCertificateSigningRequest](~~144478~~) operation. Make sure that the certificate is in the PEM format, and the content of the certificate is encoded in Base64 and then encoded by encodeURIComponent.
     *
     * @example ----BEGIN CERTIFICATE----- MIIFz****-----END CERTIFICATE-----
     *
     * @var string
     */
    public $serverCertificate;
    protected $_name = [
        'domainName'        => 'DomainName',
        'serverCertificate' => 'ServerCertificate',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }
        if (null !== $this->serverCertificate) {
            $res['ServerCertificate'] = $this->serverCertificate;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SetCdnDomainCSRCertificateRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }
        if (isset($map['ServerCertificate'])) {
            $model->serverCertificate = $map['ServerCertificate'];
        }

        return $model;
    }
}
