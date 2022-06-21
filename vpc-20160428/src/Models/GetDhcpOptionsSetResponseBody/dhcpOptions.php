<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\GetDhcpOptionsSetResponseBody;

use AlibabaCloud\Tea\Model;

class dhcpOptions extends Model
{
    /**
     * @var string
     */
    public $bootFileName;

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

    /**
     * @var string
     */
    public $TFTPServerName;
    protected $_name = [
        'bootFileName'      => 'BootFileName',
        'domainName'        => 'DomainName',
        'domainNameServers' => 'DomainNameServers',
        'ipv6LeaseTime'     => 'Ipv6LeaseTime',
        'leaseTime'         => 'LeaseTime',
        'TFTPServerName'    => 'TFTPServerName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bootFileName) {
            $res['BootFileName'] = $this->bootFileName;
        }
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
        if (null !== $this->TFTPServerName) {
            $res['TFTPServerName'] = $this->TFTPServerName;
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
        if (isset($map['BootFileName'])) {
            $model->bootFileName = $map['BootFileName'];
        }
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
        if (isset($map['TFTPServerName'])) {
            $model->TFTPServerName = $map['TFTPServerName'];
        }

        return $model;
    }
}
