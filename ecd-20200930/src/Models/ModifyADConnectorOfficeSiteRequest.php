<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Tea\Model;

class ModifyADConnectorOfficeSiteRequest extends Model
{
    /**
     * @description The hostname of the domain controller. The hostname must comply with the naming conventions for hostnames in Windows.
     *
     * @example beijing-ad01
     *
     * @var string
     */
    public $adHostname;

    /**
     * @description Details of the IP addresses of the Domain Name System (DNS) servers that correspond to the enterprise AD system. You can specify only one IP address.
     *
     * @example 127.0.*.*
     *
     * @var string[]
     */
    public $dnsAddress;

    /**
     * @description The domain name of the enterprise AD system. You can register each domain name only once.
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
     * > Specify the value of the sAMAccountName parameter instead of the value of the userPrincipalName parameter as the username.
     * @example Administrator
     *
     * @var string
     */
    public $domainUserName;

    /**
     * @description Specifies whether to enable multi-factor authentication (MFA).\
     * Default value: false.
     * @example false
     *
     * @var bool
     */
    public $mfaEnabled;

    /**
     * @description The name of the organizational unit (OU) in the AD domain. You can call the [ListUserAdOrganizationUnits](~~311259~~) operation to obtain the name of the OU.
     *
     * @example oldad.com/Domain Controllers
     *
     * @var string
     */
    public $OUName;

    /**
     * @description The ID of the workspace.
     *
     * @example cn-hangzhou+dir-363353****
     *
     * @var string
     */
    public $officeSiteId;

    /**
     * @description The name of the workspace. The name must be 2 to 255 characters in length. The name can contain letters, digits, colons (:), underscores (\_), and hyphens (-). The name must start with a letter but cannot start with `http://` or `https://`.
     *
     * @example test
     *
     * @var string
     */
    public $officeSiteName;

    /**
     * @description The ID of the region. You can call the [DescribeRegions](~~196646~~) operation to query the most recent region list.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The DNS address of the enterprise AD subdomain. You can specify only one IP address. If you specify a value for the `SubDomainName` parameter but you do not specify a value for this parameter, the DNS address of the subdomain is the same as the DNS address of the parent domain.
     *
     * @example 127.0.*.*
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
        'dnsAddress'          => 'DnsAddress',
        'domainName'          => 'DomainName',
        'domainPassword'      => 'DomainPassword',
        'domainUserName'      => 'DomainUserName',
        'mfaEnabled'          => 'MfaEnabled',
        'OUName'              => 'OUName',
        'officeSiteId'        => 'OfficeSiteId',
        'officeSiteName'      => 'OfficeSiteName',
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
        if (null !== $this->officeSiteId) {
            $res['OfficeSiteId'] = $this->officeSiteId;
        }
        if (null !== $this->officeSiteName) {
            $res['OfficeSiteName'] = $this->officeSiteName;
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
     * @return ModifyADConnectorOfficeSiteRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AdHostname'])) {
            $model->adHostname = $map['AdHostname'];
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
        if (isset($map['OfficeSiteId'])) {
            $model->officeSiteId = $map['OfficeSiteId'];
        }
        if (isset($map['OfficeSiteName'])) {
            $model->officeSiteName = $map['OfficeSiteName'];
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
