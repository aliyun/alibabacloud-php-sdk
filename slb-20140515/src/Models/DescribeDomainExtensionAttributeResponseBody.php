<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Slb\V20140515\Models;

use AlibabaCloud\Tea\Model;

class DescribeDomainExtensionAttributeResponseBody extends Model
{
    /**
     * @var int
     */
    public $listenerPort;

    /**
     * @var string
     */
    public $domainExtensionId;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $serverCertificateId;

    /**
     * @var string
     */
    public $loadBalancerId;

    /**
     * @var string
     */
    public $domain;
    protected $_name = [
        'listenerPort'        => 'ListenerPort',
        'domainExtensionId'   => 'DomainExtensionId',
        'requestId'           => 'RequestId',
        'serverCertificateId' => 'ServerCertificateId',
        'loadBalancerId'      => 'LoadBalancerId',
        'domain'              => 'Domain',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->listenerPort) {
            $res['ListenerPort'] = $this->listenerPort;
        }
        if (null !== $this->domainExtensionId) {
            $res['DomainExtensionId'] = $this->domainExtensionId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->serverCertificateId) {
            $res['ServerCertificateId'] = $this->serverCertificateId;
        }
        if (null !== $this->loadBalancerId) {
            $res['LoadBalancerId'] = $this->loadBalancerId;
        }
        if (null !== $this->domain) {
            $res['Domain'] = $this->domain;
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
        if (isset($map['ListenerPort'])) {
            $model->listenerPort = $map['ListenerPort'];
        }
        if (isset($map['DomainExtensionId'])) {
            $model->domainExtensionId = $map['DomainExtensionId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ServerCertificateId'])) {
            $model->serverCertificateId = $map['ServerCertificateId'];
        }
        if (isset($map['LoadBalancerId'])) {
            $model->loadBalancerId = $map['LoadBalancerId'];
        }
        if (isset($map['Domain'])) {
            $model->domain = $map['Domain'];
        }

        return $model;
    }
}
