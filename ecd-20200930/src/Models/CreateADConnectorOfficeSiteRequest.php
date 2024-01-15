<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Tea\Model;

class CreateADConnectorOfficeSiteRequest extends Model
{
    /**
     * @description The hostname of the domain controller. The hostname must comply with the naming conventions for Windows hosts.
     *
     * @example beijing-ad01
     *
     * @var string
     */
    public $adHostname;

    /**
     * @description The maximum public bandwidth of the Internet access package. Valid values: 0 to 200.\
     * If you do not specify this parameter or you set this parameter to 0, Internet access is disabled.
     * @example 1
     *
     * @var int
     */
    public $bandwidth;

    /**
     * @description The ID of the CEN instance.
     *
     * @example cen-3gwy16dojz1m65****
     *
     * @var string
     */
    public $cenId;

    /**
     * @description The ID of the Alibaba Cloud account to which the Cloud Enterprise Network (CEN) instance belongs.
     *
     *   If you do not specify CenId or the CEN instance that is specified by CenId belongs to the current Alibaba Cloud account, leave this parameter empty.
     *   If you specify CenId and the CEN instance that is specified by CenId belongs to another Alibaba Cloud account, enter the ID of the Alibaba Cloud account.
     *
     * @example 102681951715****
     *
     * @var int
     */
    public $cenOwnerId;

    /**
     * @description The IPv4 CIDR block in the secure office network of the workspace. The IPv4 CIDR block that the system uses to create a virtual private cloud (VPC) for the workspace. We recommend that you set the IPv4 CIDR block to 10.0.0.0/12, 172.16.0.0/12, 192.168.0.0/16, or a subnet of these CIDR blocks. If you set the IPv4 CIDR block to 10.0.0.0/12 or 172.16.0.0/12, the mask is 1224 bits in length. If you set the IPv4 CIDR block to 192.168.0.0/16, the mask is 1624 bits in length.
     *
     * @example 47.100.XX.XX
     *
     * @var string
     */
    public $cidrBlock;

    /**
     * @description The connection method that is used to connect clients to cloud desktops. Valid values:
     *
     *   Internet: connects clients to cloud desktops only over the Internet.
     *   VPC: connects clients to cloud desktops only over a VPC.
     *   Any: connects clients to cloud desktops over the Internet or a VPC. You can select a connection method based on your business requirements when you connect to your cloud desktop from a client.
     *
     * > VPC connections are established by using Alibaba Cloud PrivateLink. You can use PrivateLink free of charge. If you set this parameter to VPC or Any, PrivateLink is automatically activated.
     * @example Internet
     *
     * @var string
     */
    public $desktopAccessType;

    /**
     * @description The IP address of the DNS server of the enterprise AD system. You can specify only one IP address.
     *
     * @example 192.168.XX.XX
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
     * @description The password of the domain administrator. The password can be up to 64 characters in length.
     *
     * @example testPassword
     *
     * @var string
     */
    public $domainPassword;

    /**
     * @description The username of the domain administrator. The username can be up to 64 characters in length.
     *
     * > Specify the username by using sAMAccountName instead of userPrincipalName.
     * @example Administrator
     *
     * @var string
     */
    public $domainUserName;

    /**
     * @description Specifies whether to grant the permissions of the local administrator to end users of the cloud desktops that belong to the workspace. Default value: `true`
     *
     * @example true
     *
     * @var bool
     */
    public $enableAdminAccess;

    /**
     * @description Specifies whether to enable Internet access.
     *
     * @example true
     *
     * @var bool
     */
    public $enableInternetAccess;

    /**
     * @description Specifies whether to enable multi-factor authentication (MFA).
     *
     * @example false
     *
     * @var bool
     */
    public $mfaEnabled;

    /**
     * @description The name of the workspace. The name must be 2 to 255 characters in length. The name must start with a letter but cannot start with `http://` or `https://`. The name can contain letters, digits, colons (:), underscores (\_), and hyphens (-).\
     * Default value: null
     * @example test
     *
     * @var string
     */
    public $officeSiteName;

    /**
     * @description The type of the protocol. Set the value to ASP.
     *
     * @example ASP
     *
     * @var string
     */
    public $protocolType;

    /**
     * @description The region ID of the workspace.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The type of the AD connector.
     *
     *   1: General
     *   2: Advanced
     *
     * @example 1
     *
     * @var int
     */
    public $specification;

    /**
     * @description The DNS address of the enterprise AD subdomain. If you specify `SubDomainName` but do not specify this parameter, the DNS address of the subdomain is the same as the DNS address of the parent domain.
     *
     * @example 192.168.XX.XX
     *
     * @var string[]
     */
    public $subDomainDnsAddress;

    /**
     * @description The domain name of the enterprise AD subdomain.
     *
     * @example child.example.com
     *
     * @var string
     */
    public $subDomainName;

    /**
     * @description The verification code. If the CEN instance that is specified by CenId belongs to another Alibaba Cloud account, you must call the SendVerifyCode operation to obtain the verification code.
     *
     * @example 12****
     *
     * @var string
     */
    public $verifyCode;
    protected $_name = [
        'adHostname'           => 'AdHostname',
        'bandwidth'            => 'Bandwidth',
        'cenId'                => 'CenId',
        'cenOwnerId'           => 'CenOwnerId',
        'cidrBlock'            => 'CidrBlock',
        'desktopAccessType'    => 'DesktopAccessType',
        'dnsAddress'           => 'DnsAddress',
        'domainName'           => 'DomainName',
        'domainPassword'       => 'DomainPassword',
        'domainUserName'       => 'DomainUserName',
        'enableAdminAccess'    => 'EnableAdminAccess',
        'enableInternetAccess' => 'EnableInternetAccess',
        'mfaEnabled'           => 'MfaEnabled',
        'officeSiteName'       => 'OfficeSiteName',
        'protocolType'         => 'ProtocolType',
        'regionId'             => 'RegionId',
        'specification'        => 'Specification',
        'subDomainDnsAddress'  => 'SubDomainDnsAddress',
        'subDomainName'        => 'SubDomainName',
        'verifyCode'           => 'VerifyCode',
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
        if (null !== $this->bandwidth) {
            $res['Bandwidth'] = $this->bandwidth;
        }
        if (null !== $this->cenId) {
            $res['CenId'] = $this->cenId;
        }
        if (null !== $this->cenOwnerId) {
            $res['CenOwnerId'] = $this->cenOwnerId;
        }
        if (null !== $this->cidrBlock) {
            $res['CidrBlock'] = $this->cidrBlock;
        }
        if (null !== $this->desktopAccessType) {
            $res['DesktopAccessType'] = $this->desktopAccessType;
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
        if (null !== $this->enableAdminAccess) {
            $res['EnableAdminAccess'] = $this->enableAdminAccess;
        }
        if (null !== $this->enableInternetAccess) {
            $res['EnableInternetAccess'] = $this->enableInternetAccess;
        }
        if (null !== $this->mfaEnabled) {
            $res['MfaEnabled'] = $this->mfaEnabled;
        }
        if (null !== $this->officeSiteName) {
            $res['OfficeSiteName'] = $this->officeSiteName;
        }
        if (null !== $this->protocolType) {
            $res['ProtocolType'] = $this->protocolType;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->specification) {
            $res['Specification'] = $this->specification;
        }
        if (null !== $this->subDomainDnsAddress) {
            $res['SubDomainDnsAddress'] = $this->subDomainDnsAddress;
        }
        if (null !== $this->subDomainName) {
            $res['SubDomainName'] = $this->subDomainName;
        }
        if (null !== $this->verifyCode) {
            $res['VerifyCode'] = $this->verifyCode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateADConnectorOfficeSiteRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AdHostname'])) {
            $model->adHostname = $map['AdHostname'];
        }
        if (isset($map['Bandwidth'])) {
            $model->bandwidth = $map['Bandwidth'];
        }
        if (isset($map['CenId'])) {
            $model->cenId = $map['CenId'];
        }
        if (isset($map['CenOwnerId'])) {
            $model->cenOwnerId = $map['CenOwnerId'];
        }
        if (isset($map['CidrBlock'])) {
            $model->cidrBlock = $map['CidrBlock'];
        }
        if (isset($map['DesktopAccessType'])) {
            $model->desktopAccessType = $map['DesktopAccessType'];
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
        if (isset($map['EnableAdminAccess'])) {
            $model->enableAdminAccess = $map['EnableAdminAccess'];
        }
        if (isset($map['EnableInternetAccess'])) {
            $model->enableInternetAccess = $map['EnableInternetAccess'];
        }
        if (isset($map['MfaEnabled'])) {
            $model->mfaEnabled = $map['MfaEnabled'];
        }
        if (isset($map['OfficeSiteName'])) {
            $model->officeSiteName = $map['OfficeSiteName'];
        }
        if (isset($map['ProtocolType'])) {
            $model->protocolType = $map['ProtocolType'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['Specification'])) {
            $model->specification = $map['Specification'];
        }
        if (isset($map['SubDomainDnsAddress'])) {
            if (!empty($map['SubDomainDnsAddress'])) {
                $model->subDomainDnsAddress = $map['SubDomainDnsAddress'];
            }
        }
        if (isset($map['SubDomainName'])) {
            $model->subDomainName = $map['SubDomainName'];
        }
        if (isset($map['VerifyCode'])) {
            $model->verifyCode = $map['VerifyCode'];
        }

        return $model;
    }
}
