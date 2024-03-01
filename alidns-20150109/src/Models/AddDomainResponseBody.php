<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\SDK\Alidns\V20150109\Models\AddDomainResponseBody\dnsServers;
use AlibabaCloud\Tea\Model;

class AddDomainResponseBody extends Model
{
    /**
     * @description The Domain Name System (DNS) servers configured for the domain name.
     *
     * @var dnsServers
     */
    public $dnsServers;

    /**
     * @description The ID of the domain name.
     *
     * @example 00efd71a-770e-4255-b54e-6fe5659baffe
     *
     * @var string
     */
    public $domainId;

    /**
     * @description The domain name.
     *
     * @example dns-example.top
     *
     * @var string
     */
    public $domainName;

    /**
     * @description The ID of the domain name group.
     *
     * @example 2223
     *
     * @var string
     */
    public $groupId;

    /**
     * @description The name of the domain name group.
     *
     * @example MyGroup
     *
     * @var string
     */
    public $groupName;

    /**
     * @description The Punycode for the domain name. This parameter is returned only for Chinese domain names.
     *
     * @example xn--fsq270a.com
     *
     * @var string
     */
    public $punyCode;

    /**
     * @description The request ID.
     *
     * @example 536E9CAD-DB30-4647-AC87-AA5CC38C5382
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'dnsServers' => 'DnsServers',
        'domainId'   => 'DomainId',
        'domainName' => 'DomainName',
        'groupId'    => 'GroupId',
        'groupName'  => 'GroupName',
        'punyCode'   => 'PunyCode',
        'requestId'  => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dnsServers) {
            $res['DnsServers'] = null !== $this->dnsServers ? $this->dnsServers->toMap() : null;
        }
        if (null !== $this->domainId) {
            $res['DomainId'] = $this->domainId;
        }
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->groupName) {
            $res['GroupName'] = $this->groupName;
        }
        if (null !== $this->punyCode) {
            $res['PunyCode'] = $this->punyCode;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AddDomainResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DnsServers'])) {
            $model->dnsServers = dnsServers::fromMap($map['DnsServers']);
        }
        if (isset($map['DomainId'])) {
            $model->domainId = $map['DomainId'];
        }
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['GroupName'])) {
            $model->groupName = $map['GroupName'];
        }
        if (isset($map['PunyCode'])) {
            $model->punyCode = $map['PunyCode'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
