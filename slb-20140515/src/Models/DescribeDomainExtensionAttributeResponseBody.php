<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Slb\V20140515\Models;

use AlibabaCloud\Tea\Model;

class DescribeDomainExtensionAttributeResponseBody extends Model
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
     * @example de-bp1rp7ta191dv
     *
     * @var string
     */
    public $domainExtensionId;

    /**
     * @description The frontend port of the HTTPS listener that is configured for the SLB instance. Valid values: **1** to **65535**.
     *
     * @example 443
     *
     * @var int
     */
    public $listenerPort;

    /**
     * @description The ID of the SLB instance.
     *
     * @example lb-bp1o94dp5i6*****earr9g6d1l
     *
     * @var string
     */
    public $loadBalancerId;

    /**
     * @description The ID of the request.
     *
     * @example 48C1B671-C6DB-4DDE-9B30-10557E36CDE0
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The ID of the server certificate that is used by the domain name.
     *
     * @example 231579085529123_166f82******_1714763408_709981430
     *
     * @var string
     */
    public $serverCertificateId;
    protected $_name = [
        'domain'              => 'Domain',
        'domainExtensionId'   => 'DomainExtensionId',
        'listenerPort'        => 'ListenerPort',
        'loadBalancerId'      => 'LoadBalancerId',
        'requestId'           => 'RequestId',
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
        if (null !== $this->listenerPort) {
            $res['ListenerPort'] = $this->listenerPort;
        }
        if (null !== $this->loadBalancerId) {
            $res['LoadBalancerId'] = $this->loadBalancerId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->serverCertificateId) {
            $res['ServerCertificateId'] = $this->serverCertificateId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDomainExtensionAttributeResponseBody
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
        if (isset($map['ListenerPort'])) {
            $model->listenerPort = $map['ListenerPort'];
        }
        if (isset($map['LoadBalancerId'])) {
            $model->loadBalancerId = $map['LoadBalancerId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ServerCertificateId'])) {
            $model->serverCertificateId = $map['ServerCertificateId'];
        }

        return $model;
    }
}
