<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\ListDhcpOptionsSetsResponseBody\dhcpOptionsSets;

use AlibabaCloud\Tea\Model;

class dhcpOptions extends Model
{
    /**
     * @description The suffix of the hostname.
     *
     * @example example.com
     *
     * @var string
     */
    public $domainName;

    /**
     * @description The DNS server IP address.
     *
     * @example 192.168.XX.XX
     *
     * @var string
     */
    public $domainNameServers;

    /**
     * @description The lease time of the IPv6 addresses for the DHCP options set.
     *
     *   If you use hours as the unit, valid values are **24h to 1176h** and **87600h to 175200h**. Default value: **87600h**.
     *   If you use days as the unit, valid values are **1d to 49d** and **3650d to 7300d**. Default value: **3650d**.
     *
     * @example 3650d
     *
     * @var string
     */
    public $ipv6LeaseTime;

    /**
     * @description The lease time of the IPv4 addresses for the DHCP options set.
     *
     *   If you use hours as the unit, valid values are **24h to 1176h** and **87600h to 175200h**. Default value: **87600h**.
     *   If you use days as the unit, valid values are **1d to 49d** and **3650d to 7300d**. Default value: **3650d**.
     *
     * @example 3650d
     *
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
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return dhcpOptions
     */
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
