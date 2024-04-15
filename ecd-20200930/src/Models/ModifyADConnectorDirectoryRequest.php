<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Tea\Model;

class ModifyADConnectorDirectoryRequest extends Model
{
    /**
     * @description The hostname of the domain controller. The hostname must comply with the naming conventions for hostnames in Windows.
     *
     * @example cnshsv21hmcdc01
     *
     * @var string
     */
    public $adHostname;

    /**
     * @description The ID of the directory.
     *
     * @example cn-hangzhou+dir-gx2x1dhsmu52rd****
     *
     * @var string
     */
    public $directoryId;

    /**
     * @description The name of the AD directory.
     *
     * @example testDirectoryName
     *
     * @var string
     */
    public $directoryName;

    /**
     * @description Details of the DNS addresses that correspond to the enterprise AD system. You can specify only one IP address. Make sure that the specified IP address can be accessed over the network that the selected vSwitch uses.
     *
     * @example 127.0.**.**
     *
     * @var string[]
     */
    public $dnsAddress;

    /**
     * @description The domain name. The domain name must be 2 to 255 characters in length and consist of two parts. Example: example.com. You can register each domain name only once.
     *
     * @example example.com
     *
     * @var string
     */
    public $domainName;

    /**
     * @description The password of the domain administrator. The username can be up to 64 characters in length.
     *
     * @example testPassword
     *
     * @var string
     */
    public $domainPassword;

    /**
     * @description The username of the domain administrator. The username can be up to 64 characters in length.
     *
     * @example sAMAccountName
     *
     * @var string
     */
    public $domainUserName;

    /**
     * @description Specifies whether to enable multi-factor authentication (MFA). Default value: false.
     *
     * > The first time you log on to the Alibaba Cloud Workspace client as an end user, you must bind an MFA device.
     * @example false
     *
     * @var bool
     */
    public $mfaEnabled;

    /**
     * @description The name of the organizational unit (OU) in the AD domain. You can call the ListUserAdOrganizationUnits operation to obtain the name of the OU.
     *
     * @example example.com/Domain Controllers
     *
     * @var string
     */
    public $OUName;

    /**
     * @description The ID of the region.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The DNS addresses of the enterprise AD subdomain. If you specify SubDomainName but not this parameter, the DNS address of the subdomain is considered to be the same as that of the parent domain.
     *
     * @example 127.0.**.**
     *
     * @var string[]
     */
    public $subDomainDnsAddress;

    /**
     * @description The domain name of the enterprise AD subdomain.
     *
     * @example childexample.com
     *
     * @var string
     */
    public $subDomainName;
    protected $_name = [
        'adHostname'          => 'AdHostname',
        'directoryId'         => 'DirectoryId',
        'directoryName'       => 'DirectoryName',
        'dnsAddress'          => 'DnsAddress',
        'domainName'          => 'DomainName',
        'domainPassword'      => 'DomainPassword',
        'domainUserName'      => 'DomainUserName',
        'mfaEnabled'          => 'MfaEnabled',
        'OUName'              => 'OUName',
        'regionId'            => 'RegionId',
        'subDomainDnsAddress' => 'SubDomainDnsAddress',
        'subDomainName'       => 'SubDomainName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->adHostname) {
            $res['AdHostname'] = $this->adHostname;
        }
        if (null !== $this->directoryId) {
            $res['DirectoryId'] = $this->directoryId;
        }
        if (null !== $this->directoryName) {
            $res['DirectoryName'] = $this->directoryName;
        }
        if (null !== $this->dnsAddress) {
            $res['DnsAddress'] = $this->dnsAddress;
        }
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }
        if (null !== $this->domainPassword) {
            $res['DomainPassword'] = $this->domainPassword;
        }
        if (null !== $this->domainUserName) {
            $res['DomainUserName'] = $this->domainUserName;
        }
        if (null !== $this->mfaEnabled) {
            $res['MfaEnabled'] = $this->mfaEnabled;
        }
        if (null !== $this->OUName) {
            $res['OUName'] = $this->OUName;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->subDomainDnsAddress) {
            $res['SubDomainDnsAddress'] = $this->subDomainDnsAddress;
        }
        if (null !== $this->subDomainName) {
            $res['SubDomainName'] = $this->subDomainName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyADConnectorDirectoryRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AdHostname'])) {
            $model->adHostname = $map['AdHostname'];
        }
        if (isset($map['DirectoryId'])) {
            $model->directoryId = $map['DirectoryId'];
        }
        if (isset($map['DirectoryName'])) {
            $model->directoryName = $map['DirectoryName'];
        }
        if (isset($map['DnsAddress'])) {
            if (!empty($map['DnsAddress'])) {
                $model->dnsAddress = $map['DnsAddress'];
            }
        }
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }
        if (isset($map['DomainPassword'])) {
            $model->domainPassword = $map['DomainPassword'];
        }
        if (isset($map['DomainUserName'])) {
            $model->domainUserName = $map['DomainUserName'];
        }
        if (isset($map['MfaEnabled'])) {
            $model->mfaEnabled = $map['MfaEnabled'];
        }
        if (isset($map['OUName'])) {
            $model->OUName = $map['OUName'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['SubDomainDnsAddress'])) {
            if (!empty($map['SubDomainDnsAddress'])) {
                $model->subDomainDnsAddress = $map['SubDomainDnsAddress'];
            }
        }
        if (isset($map['SubDomainName'])) {
            $model->subDomainName = $map['SubDomainName'];
        }

        return $model;
    }
}
