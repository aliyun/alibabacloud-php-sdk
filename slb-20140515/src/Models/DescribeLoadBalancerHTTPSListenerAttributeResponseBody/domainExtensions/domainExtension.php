<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Slb\V20140515\Models\DescribeLoadBalancerHTTPSListenerAttributeResponseBody\domainExtensions;

use AlibabaCloud\Tea\Model;

class domainExtension extends Model
{
    /**
     * @var string
     */
    public $serverCertificateId;

    /**
     * @var string
     */
    public $domain;

    /**
     * @var string
     */
    public $domainExtensionId;
    protected $_name = [
        'serverCertificateId' => 'ServerCertificateId',
        'domain'              => 'Domain',
        'domainExtensionId'   => 'DomainExtensionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->serverCertificateId) {
            $res['ServerCertificateId'] = $this->serverCertificateId;
        }
        if (null !== $this->domain) {
            $res['Domain'] = $this->domain;
        }
        if (null !== $this->domainExtensionId) {
            $res['DomainExtensionId'] = $this->domainExtensionId;
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
        if (isset($map['ServerCertificateId'])) {
            $model->serverCertificateId = $map['ServerCertificateId'];
        }
        if (isset($map['Domain'])) {
            $model->domain = $map['Domain'];
        }
        if (isset($map['DomainExtensionId'])) {
            $model->domainExtensionId = $map['DomainExtensionId'];
        }

        return $model;
    }
}
