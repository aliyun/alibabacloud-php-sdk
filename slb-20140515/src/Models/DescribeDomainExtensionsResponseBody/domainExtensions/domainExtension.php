<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Slb\V20140515\Models\DescribeDomainExtensionsResponseBody\domainExtensions;

use AlibabaCloud\Tea\Model;

class domainExtension extends Model
{
    /**
     * @description The domain name.
     *
     * @example www.example.com
     *
     * @var string
     */
    public $domain;

    /**
     * @description The ID of the additional certificate.
     *
     * @example de-bp1rp7ta1****
     *
     * @var string
     */
    public $domainExtensionId;

    /**
     * @description The ID of the server certificate that is used by the domain name.
     *
     * @example 1231579085529123_166f8204689_1714763408_70998****
     *
     * @var string
     */
    public $serverCertificateId;
    protected $_name = [
        'domain'              => 'Domain',
        'domainExtensionId'   => 'DomainExtensionId',
        'serverCertificateId' => 'ServerCertificateId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->domain) {
            $res['Domain'] = $this->domain;
        }
        if (null !== $this->domainExtensionId) {
            $res['DomainExtensionId'] = $this->domainExtensionId;
        }
        if (null !== $this->serverCertificateId) {
            $res['ServerCertificateId'] = $this->serverCertificateId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return domainExtension
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Domain'])) {
            $model->domain = $map['Domain'];
        }
        if (isset($map['DomainExtensionId'])) {
            $model->domainExtensionId = $map['DomainExtensionId'];
        }
        if (isset($map['ServerCertificateId'])) {
            $model->serverCertificateId = $map['ServerCertificateId'];
        }

        return $model;
    }
}
