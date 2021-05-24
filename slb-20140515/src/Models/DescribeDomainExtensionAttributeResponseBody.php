<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Slb\V20140515\Models;

use AlibabaCloud\Tea\Model;

class DescribeDomainExtensionAttributeResponseBody extends Model
{
    /**
     * @var string
     */
    public $domain;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $loadBalancerId;

    /**
     * @var int
     */
    public $listenerPort;

    /**
     * @var string
     */
    public $serverCertificateId;

    /**
     * @var string
     */
    public $domainExtensionId;
    protected $_name = [
        'domain'              => 'Domain',
        'requestId'           => 'RequestId',
        'loadBalancerId'      => 'LoadBalancerId',
        'listenerPort'        => 'ListenerPort',
        'serverCertificateId' => 'ServerCertificateId',
        'domainExtensionId'   => 'DomainExtensionId',
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
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->loadBalancerId) {
            $res['LoadBalancerId'] = $this->loadBalancerId;
        }
        if (null !== $this->listenerPort) {
            $res['ListenerPort'] = $this->listenerPort;
        }
        if (null !== $this->serverCertificateId) {
            $res['ServerCertificateId'] = $this->serverCertificateId;
        }
        if (null !== $this->domainExtensionId) {
            $res['DomainExtensionId'] = $this->domainExtensionId;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['LoadBalancerId'])) {
            $model->loadBalancerId = $map['LoadBalancerId'];
        }
        if (isset($map['ListenerPort'])) {
            $model->listenerPort = $map['ListenerPort'];
        }
        if (isset($map['ServerCertificateId'])) {
            $model->serverCertificateId = $map['ServerCertificateId'];
        }
        if (isset($map['DomainExtensionId'])) {
            $model->domainExtensionId = $map['DomainExtensionId'];
        }

        return $model;
    }
}
