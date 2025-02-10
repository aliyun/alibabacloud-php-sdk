<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\GetDhcpOptionsSetResponseBody;

use AlibabaCloud\Dara\Model;

class dhcpOptions extends Model
{
    /**
     * @var string
     */
    public $domainName;
    /**
     * @var string
     */
    public $domainNameServers;
    /**
     * @var string
     */
    public $ipv6LeaseTime;
    /**
     * @var string
     */
    public $leaseTime;
    protected $_name = [
        'domainName'        => 'DomainName',
        'domainNameServers' => 'DomainNameServers',
        'ipv6LeaseTime'     => 'Ipv6LeaseTime',
        'leaseTime'         => 'LeaseTime',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }

        if (null !== $this->domainNameServers) {
            $res['DomainNameServers'] = $this->domainNameServers;
        }

        if (null !== $this->ipv6LeaseTime) {
            $res['Ipv6LeaseTime'] = $this->ipv6LeaseTime;
        }

        if (null !== $this->leaseTime) {
            $res['LeaseTime'] = $this->leaseTime;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }

        if (isset($map['DomainNameServers'])) {
            $model->domainNameServers = $map['DomainNameServers'];
        }

        if (isset($map['Ipv6LeaseTime'])) {
            $model->ipv6LeaseTime = $map['Ipv6LeaseTime'];
        }

        if (isset($map['LeaseTime'])) {
            $model->leaseTime = $map['LeaseTime'];
        }

        return $model;
    }
}
