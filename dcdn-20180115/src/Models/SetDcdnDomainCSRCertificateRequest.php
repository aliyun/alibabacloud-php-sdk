<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models;

use AlibabaCloud\Tea\Model;

class SetDcdnDomainCSRCertificateRequest extends Model
{
    /**
     * @description The domain name that is secured by the certificate. The domain name uses HTTPS acceleration.
     *
     * @example example.com
     *
     * @var string
     */
    public $domainName;

    /**
     * @description The content of the certificate. The certificate must match the certificate signing request (CSR) created by calling the [CreateDcdnCertificateSigningRequest](~~144478~~) operation. Make sure that the certificate is in PEM format and its content is Base64-encoded and then encoded by encodeURIComponent.
     *
     * @example test
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
     * @return SetDcdnDomainCSRCertificateRequest
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
