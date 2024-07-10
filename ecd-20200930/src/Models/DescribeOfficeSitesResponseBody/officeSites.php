<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeOfficeSitesResponseBody;

use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeOfficeSitesResponseBody\officeSites\ADConnectors;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeOfficeSitesResponseBody\officeSites\logs;
use AlibabaCloud\Tea\Model;

class officeSites extends Model
{
    /**
     * @description Details of AD connectors.
     *
     * @var ADConnectors[]
     */
    public $ADConnectors;

    /**
     * @description The hostname of the domain controller. The hostname must comply with the hostname naming convention of Windows.
     *
     * @example beijing-ad01
     *
     * @var string
     */
    public $adHostname;

    /**
     * @description The hostname of the secondary domain controller.
     *
     * @example beijing-ad02
     *
     * @var string
     */
    public $backupDCHostname;

    /**
     * @description The DNS address of the secondary domain controller.
     *
     * @example 172.24.XX.XX
     *
     * @var string
     */
    public $backupDns;

    /**
     * @description The maximum public bandwidth value. Valid values: 0 to 1000.\\
     * If you leave this parameter empty or set this parameter to 0, Internet access is not enabled.
     * @example 10
     *
     * @var int
     */
    public $bandwidth;

    /**
     * @description The CEN instance status.
     *
     * @example attached
     *
     * @var string
     */
    public $cenAttachStatus;

    /**
     * @description The CEN instance ID.
     *
     * @example cen-3gwy16dojz1m65****
     *
     * @var string
     */
    public $cenId;

    /**
     * @description The IPv4 CIDR block of the VPC that the office network uses.
     *
     * @example 172.16.0.0/16
     *
     * @var string
     */
    public $cidrBlock;

    /**
     * @description Indicates whether the CloudBox-based office network is created.
     *
     * Valid values:
     *
     *   true
     *   false
     *
     * @example true
     *
     * @var bool
     */
    public $cloudBoxOfficeSite;

    /**
     * @description The time when the office network was created.
     *
     * @example 2021-05-06T05:58Z
     *
     * @var string
     */
    public $creationTime;

    /**
     * @description The ID of the security group.
     *
     * @example sg-bp1ce64o4g9mdf5u****
     *
     * @var string
     */
    public $customSecurityGroupId;

    /**
     * @description The method that is used to connect cloud computers that reside in the office network from Alibaba Cloud Workspace clients.
     *
     * Valid values:
     *
     *   INTERNET (default): Cloud computers are connected from Alibaba Cloud Workspace clients over the Internet.
     *   VPC: Cloud computers are connected from Alibaba Cloud Workspace clients over the VPC.
     *   ANY: Cloud computers are connected from Alibaba Cloud Workspace clients over the Internet or the VPC. When end users connect to cloud computers from Alibaba Cloud Workspace clients, you can choose a connection method based on your business requirements.
     *
     * @example INTERNET
     *
     * @var string
     */
    public $desktopAccessType;

    /**
     * @description The number of cloud computers that are created.
     *
     * @example 1
     *
     * @var int
     */
    public $desktopCount;

    /**
     * @description The endpoint that is used to connect to cloud computers in the directory over a VPC.
     *
     * @example http://ep-bp1s2vmbj55r5rzc****.epsrv-bp1pcfhpwvlpny01****.cn-hangzhou.privatelink.aliyuncs.com
     *
     * @var string
     */
    public $desktopVpcEndpoint;

    /**
     * @description The array of DNS addresses in the AD domains.
     *
     * @var string[]
     */
    public $dnsAddress;

    /**
     * @description The username of a Domain Name System (DNS) user.
     *
     * @example testDnsUserName
     *
     * @var string
     */
    public $dnsUserName;

    /**
     * @description The domain name of the enterprise AD.
     *
     * @example example.com
     *
     * @var string
     */
    public $domainName;

    /**
     * @description The password of the domain administrator.
     *
     * @example testPassword
     *
     * @var string
     */
    public $domainPassword;

    /**
     * @description The username of the domain administrator.
     *
     * @example Administrator
     *
     * @var string
     */
    public $domainUserName;

    /**
     * @description Indicates whether the local administrator permissions are granted to users that are authorized to use cloud computers in the office network.
     *
     * Valid values:
     *
     *   true (default)
     *   false
     *
     * @example true
     *
     * @var bool
     */
    public $enableAdminAccess;

    /**
     * @description Indicates whether the connection between cloud computers in the office network is enabled. After you enable the connection between cloud computers in the office network, cloud computers in the office network can access each other.
     *
     * @example false
     *
     * @var bool
     */
    public $enableCrossDesktopAccess;

    /**
     * @description Indicates whether Internet access is enabled.
     *
     * @example false
     *
     * @var bool
     */
    public $enableInternetAccess;

    /**
     * @description Indicates whether route access control is enabled for cloud services.
     *
     * @example false
     *
     * @var bool
     */
    public $enableServiceRoute;

    /**
     * @description An array of Apsara File Storage NAS (NAS) file system IDs.
     *
     * @var string[]
     */
    public $fileSystemIds;

    /**
     * @description Details about registration logs.
     *
     * @var logs[]
     */
    public $logs;

    /**
     * @description Indicates whether multi-factor authentication (MFA) is enabled.
     *
     * @example false
     *
     * @var bool
     */
    public $mfaEnabled;

    /**
     * @description The name of the office network. The name is unique in a region.
     *
     * @example test
     *
     * @var string
     */
    public $name;

    /**
     * @description Indicates whether two-factor verification is enabled when an end user logs on to an Alibaba Cloud Workspace client. This parameter is required only for convenience office networks. If two-factor verification is enabled, the system checks whether security risks exist within the logon account when a convenience user logs on to the client. If risks are detected, the system sends a verification code to the email address that is associated with the account. Then, the convenience user can log on to the client only after the user enters the correct verification code.
     *
     * @example false
     *
     * @var bool
     */
    public $needVerifyLoginRisk;

    /**
     * @description Indicates whether the trusted device verification is enabled.
     *
     * Valid values:
     *
     *   true
     *   false
     *
     * @example true
     *
     * @var bool
     */
    public $needVerifyZeroDevice;

    /**
     * @description The premium bandwidth plan ID.
     *
     * @example np-amtp8e8q1o9e4****
     *
     * @var string
     */
    public $networkPackageId;

    /**
     * @description The IDs of the office networks.
     *
     * @example cn-hangzhou+dir-363353****
     *
     * @var string
     */
    public $officeSiteId;

    /**
     * @description The account type of the office network.
     *
     * Valid values:
     *
     *   SIMPLE: the convenience account
     *   AD_CONNECTOR: the enterprise AD account
     *
     * @example AD_CONNECTOR
     *
     * @var string
     */
    public $officeSiteType;

    /**
     * @description The organizational unit (OU) in the AD domain to which the office network is connected.
     *
     * @example example.com/Domain Controllers
     *
     * @var string
     */
    public $ouName;

    /**
     * @description The protocol type.
     *
     * Valid values:
     *
     *   HDX
     *   ASP
     *
     * @example ASP
     *
     * @var string
     */
    public $protocolType;

    /**
     * @description The IP address of the RDS license.
     *
     * @example 47.100.XX.XX
     *
     * @var string
     */
    public $rdsLicenseAddress;

    /**
     * @description The domain name of the RDS license.
     *
     * @example test.com
     *
     * @var string
     */
    public $rdsLicenseDomainName;

    /**
     * @description The remote desktop service (RDS) license status.
     *
     * @example 2
     *
     * @var string
     */
    public $rdsLicenseStatus;

    /**
     * @var string
     */
    public $securityProtection;

    /**
     * @description Indicates whether single sign-on (SSO) is enabled.
     *
     * @example false
     *
     * @var bool
     */
    public $ssoEnabled;

    /**
     * @description The SSO type.
     *
     * Valid values:
     *
     *   SAML.
     *
     * @example null
     *
     * @var string
     */
    public $ssoType;

    /**
     * @description The office network status.
     *
     * Valid values:
     *
     *   REGISTERING: The office network is being registered.
     *   DEREGISTERING: The office network is being deregistered.
     *   REGISTERED: The office network is registered.
     *   NEEDCONFIGTRUST: A trust relationship is required for the office network.
     *   CONFIGTRUSTFAILED: A trust relationship fails to be configured for the office network.
     *   DEREGISTERED: The office network is deregistered.
     *   ERROR: One or more configurations of the office network are invalid.
     *   CONFIGTRUSTING: A trust relationship is being configured for the office network.
     *   NEEDCONFIGUSER: Users are required for the office network.
     *
     * @example REGISTERED
     *
     * @var string
     */
    public $status;

    /**
     * @description An array of DNS addresses for AD subdomains.
     *
     * @var string[]
     */
    public $subDnsAddress;

    /**
     * @description The username of enterprise AD subdomain.
     *
     * @example testSubDnsUserName
     *
     * @var string
     */
    public $subDomainName;

    /**
     * @var string
     */
    public $subnetMode;

    /**
     * @description The total number of cloud computers.
     *
     * @example 0
     *
     * @var int
     */
    public $totalEdsCount;

    /**
     * @description The number of pooled cloud computers in the cloud computer pool.
     *
     * @example 0
     *
     * @var int
     */
    public $totalEdsCountForGroup;

    /**
     * @description >  This parameter is unavailable.
     *
     * @example null
     *
     * @var string
     */
    public $trustPassword;

    /**
     * @description An array of VSwitch IDs.
     *
     * @var string[]
     */
    public $vSwitchIds;

    /**
     * @description The VPC ID.
     *
     * @example vpc-uf6tz5k67puge5jn8****
     *
     * @var string
     */
    public $vpcId;

    /**
     * @description The VPC type.
     *
     * Valid values:
     *
     *   Basic
     *   Customized
     *   Standard
     *
     * @example Basic
     *
     * @var string
     */
    public $vpcType;
    protected $_name = [
        'ADConnectors'             => 'ADConnectors',
        'adHostname'               => 'AdHostname',
        'backupDCHostname'         => 'BackupDCHostname',
        'backupDns'                => 'BackupDns',
        'bandwidth'                => 'Bandwidth',
        'cenAttachStatus'          => 'CenAttachStatus',
        'cenId'                    => 'CenId',
        'cidrBlock'                => 'CidrBlock',
        'cloudBoxOfficeSite'       => 'CloudBoxOfficeSite',
        'creationTime'             => 'CreationTime',
        'customSecurityGroupId'    => 'CustomSecurityGroupId',
        'desktopAccessType'        => 'DesktopAccessType',
        'desktopCount'             => 'DesktopCount',
        'desktopVpcEndpoint'       => 'DesktopVpcEndpoint',
        'dnsAddress'               => 'DnsAddress',
        'dnsUserName'              => 'DnsUserName',
        'domainName'               => 'DomainName',
        'domainPassword'           => 'DomainPassword',
        'domainUserName'           => 'DomainUserName',
        'enableAdminAccess'        => 'EnableAdminAccess',
        'enableCrossDesktopAccess' => 'EnableCrossDesktopAccess',
        'enableInternetAccess'     => 'EnableInternetAccess',
        'enableServiceRoute'       => 'EnableServiceRoute',
        'fileSystemIds'            => 'FileSystemIds',
        'logs'                     => 'Logs',
        'mfaEnabled'               => 'MfaEnabled',
        'name'                     => 'Name',
        'needVerifyLoginRisk'      => 'NeedVerifyLoginRisk',
        'needVerifyZeroDevice'     => 'NeedVerifyZeroDevice',
        'networkPackageId'         => 'NetworkPackageId',
        'officeSiteId'             => 'OfficeSiteId',
        'officeSiteType'           => 'OfficeSiteType',
        'ouName'                   => 'OuName',
        'protocolType'             => 'ProtocolType',
        'rdsLicenseAddress'        => 'RdsLicenseAddress',
        'rdsLicenseDomainName'     => 'RdsLicenseDomainName',
        'rdsLicenseStatus'         => 'RdsLicenseStatus',
        'securityProtection'       => 'SecurityProtection',
        'ssoEnabled'               => 'SsoEnabled',
        'ssoType'                  => 'SsoType',
        'status'                   => 'Status',
        'subDnsAddress'            => 'SubDnsAddress',
        'subDomainName'            => 'SubDomainName',
        'subnetMode'               => 'SubnetMode',
        'totalEdsCount'            => 'TotalEdsCount',
        'totalEdsCountForGroup'    => 'TotalEdsCountForGroup',
        'trustPassword'            => 'TrustPassword',
        'vSwitchIds'               => 'VSwitchIds',
        'vpcId'                    => 'VpcId',
        'vpcType'                  => 'VpcType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ADConnectors) {
            $res['ADConnectors'] = [];
            if (null !== $this->ADConnectors && \is_array($this->ADConnectors)) {
                $n = 0;
                foreach ($this->ADConnectors as $item) {
                    $res['ADConnectors'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->adHostname) {
            $res['AdHostname'] = $this->adHostname;
        }
        if (null !== $this->backupDCHostname) {
            $res['BackupDCHostname'] = $this->backupDCHostname;
        }
        if (null !== $this->backupDns) {
            $res['BackupDns'] = $this->backupDns;
        }
        if (null !== $this->bandwidth) {
            $res['Bandwidth'] = $this->bandwidth;
        }
        if (null !== $this->cenAttachStatus) {
            $res['CenAttachStatus'] = $this->cenAttachStatus;
        }
        if (null !== $this->cenId) {
            $res['CenId'] = $this->cenId;
        }
        if (null !== $this->cidrBlock) {
            $res['CidrBlock'] = $this->cidrBlock;
        }
        if (null !== $this->cloudBoxOfficeSite) {
            $res['CloudBoxOfficeSite'] = $this->cloudBoxOfficeSite;
        }
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }
        if (null !== $this->customSecurityGroupId) {
            $res['CustomSecurityGroupId'] = $this->customSecurityGroupId;
        }
        if (null !== $this->desktopAccessType) {
            $res['DesktopAccessType'] = $this->desktopAccessType;
        }
        if (null !== $this->desktopCount) {
            $res['DesktopCount'] = $this->desktopCount;
        }
        if (null !== $this->desktopVpcEndpoint) {
            $res['DesktopVpcEndpoint'] = $this->desktopVpcEndpoint;
        }
        if (null !== $this->dnsAddress) {
            $res['DnsAddress'] = $this->dnsAddress;
        }
        if (null !== $this->dnsUserName) {
            $res['DnsUserName'] = $this->dnsUserName;
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
        if (null !== $this->enableCrossDesktopAccess) {
            $res['EnableCrossDesktopAccess'] = $this->enableCrossDesktopAccess;
        }
        if (null !== $this->enableInternetAccess) {
            $res['EnableInternetAccess'] = $this->enableInternetAccess;
        }
        if (null !== $this->enableServiceRoute) {
            $res['EnableServiceRoute'] = $this->enableServiceRoute;
        }
        if (null !== $this->fileSystemIds) {
            $res['FileSystemIds'] = $this->fileSystemIds;
        }
        if (null !== $this->logs) {
            $res['Logs'] = [];
            if (null !== $this->logs && \is_array($this->logs)) {
                $n = 0;
                foreach ($this->logs as $item) {
                    $res['Logs'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->mfaEnabled) {
            $res['MfaEnabled'] = $this->mfaEnabled;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->needVerifyLoginRisk) {
            $res['NeedVerifyLoginRisk'] = $this->needVerifyLoginRisk;
        }
        if (null !== $this->needVerifyZeroDevice) {
            $res['NeedVerifyZeroDevice'] = $this->needVerifyZeroDevice;
        }
        if (null !== $this->networkPackageId) {
            $res['NetworkPackageId'] = $this->networkPackageId;
        }
        if (null !== $this->officeSiteId) {
            $res['OfficeSiteId'] = $this->officeSiteId;
        }
        if (null !== $this->officeSiteType) {
            $res['OfficeSiteType'] = $this->officeSiteType;
        }
        if (null !== $this->ouName) {
            $res['OuName'] = $this->ouName;
        }
        if (null !== $this->protocolType) {
            $res['ProtocolType'] = $this->protocolType;
        }
        if (null !== $this->rdsLicenseAddress) {
            $res['RdsLicenseAddress'] = $this->rdsLicenseAddress;
        }
        if (null !== $this->rdsLicenseDomainName) {
            $res['RdsLicenseDomainName'] = $this->rdsLicenseDomainName;
        }
        if (null !== $this->rdsLicenseStatus) {
            $res['RdsLicenseStatus'] = $this->rdsLicenseStatus;
        }
        if (null !== $this->securityProtection) {
            $res['SecurityProtection'] = $this->securityProtection;
        }
        if (null !== $this->ssoEnabled) {
            $res['SsoEnabled'] = $this->ssoEnabled;
        }
        if (null !== $this->ssoType) {
            $res['SsoType'] = $this->ssoType;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->subDnsAddress) {
            $res['SubDnsAddress'] = $this->subDnsAddress;
        }
        if (null !== $this->subDomainName) {
            $res['SubDomainName'] = $this->subDomainName;
        }
        if (null !== $this->subnetMode) {
            $res['SubnetMode'] = $this->subnetMode;
        }
        if (null !== $this->totalEdsCount) {
            $res['TotalEdsCount'] = $this->totalEdsCount;
        }
        if (null !== $this->totalEdsCountForGroup) {
            $res['TotalEdsCountForGroup'] = $this->totalEdsCountForGroup;
        }
        if (null !== $this->trustPassword) {
            $res['TrustPassword'] = $this->trustPassword;
        }
        if (null !== $this->vSwitchIds) {
            $res['VSwitchIds'] = $this->vSwitchIds;
        }
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }
        if (null !== $this->vpcType) {
            $res['VpcType'] = $this->vpcType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return officeSites
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ADConnectors'])) {
            if (!empty($map['ADConnectors'])) {
                $model->ADConnectors = [];
                $n                   = 0;
                foreach ($map['ADConnectors'] as $item) {
                    $model->ADConnectors[$n++] = null !== $item ? ADConnectors::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['AdHostname'])) {
            $model->adHostname = $map['AdHostname'];
        }
        if (isset($map['BackupDCHostname'])) {
            $model->backupDCHostname = $map['BackupDCHostname'];
        }
        if (isset($map['BackupDns'])) {
            $model->backupDns = $map['BackupDns'];
        }
        if (isset($map['Bandwidth'])) {
            $model->bandwidth = $map['Bandwidth'];
        }
        if (isset($map['CenAttachStatus'])) {
            $model->cenAttachStatus = $map['CenAttachStatus'];
        }
        if (isset($map['CenId'])) {
            $model->cenId = $map['CenId'];
        }
        if (isset($map['CidrBlock'])) {
            $model->cidrBlock = $map['CidrBlock'];
        }
        if (isset($map['CloudBoxOfficeSite'])) {
            $model->cloudBoxOfficeSite = $map['CloudBoxOfficeSite'];
        }
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }
        if (isset($map['CustomSecurityGroupId'])) {
            $model->customSecurityGroupId = $map['CustomSecurityGroupId'];
        }
        if (isset($map['DesktopAccessType'])) {
            $model->desktopAccessType = $map['DesktopAccessType'];
        }
        if (isset($map['DesktopCount'])) {
            $model->desktopCount = $map['DesktopCount'];
        }
        if (isset($map['DesktopVpcEndpoint'])) {
            $model->desktopVpcEndpoint = $map['DesktopVpcEndpoint'];
        }
        if (isset($map['DnsAddress'])) {
            if (!empty($map['DnsAddress'])) {
                $model->dnsAddress = $map['DnsAddress'];
            }
        }
        if (isset($map['DnsUserName'])) {
            $model->dnsUserName = $map['DnsUserName'];
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
        if (isset($map['EnableCrossDesktopAccess'])) {
            $model->enableCrossDesktopAccess = $map['EnableCrossDesktopAccess'];
        }
        if (isset($map['EnableInternetAccess'])) {
            $model->enableInternetAccess = $map['EnableInternetAccess'];
        }
        if (isset($map['EnableServiceRoute'])) {
            $model->enableServiceRoute = $map['EnableServiceRoute'];
        }
        if (isset($map['FileSystemIds'])) {
            if (!empty($map['FileSystemIds'])) {
                $model->fileSystemIds = $map['FileSystemIds'];
            }
        }
        if (isset($map['Logs'])) {
            if (!empty($map['Logs'])) {
                $model->logs = [];
                $n           = 0;
                foreach ($map['Logs'] as $item) {
                    $model->logs[$n++] = null !== $item ? logs::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['MfaEnabled'])) {
            $model->mfaEnabled = $map['MfaEnabled'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['NeedVerifyLoginRisk'])) {
            $model->needVerifyLoginRisk = $map['NeedVerifyLoginRisk'];
        }
        if (isset($map['NeedVerifyZeroDevice'])) {
            $model->needVerifyZeroDevice = $map['NeedVerifyZeroDevice'];
        }
        if (isset($map['NetworkPackageId'])) {
            $model->networkPackageId = $map['NetworkPackageId'];
        }
        if (isset($map['OfficeSiteId'])) {
            $model->officeSiteId = $map['OfficeSiteId'];
        }
        if (isset($map['OfficeSiteType'])) {
            $model->officeSiteType = $map['OfficeSiteType'];
        }
        if (isset($map['OuName'])) {
            $model->ouName = $map['OuName'];
        }
        if (isset($map['ProtocolType'])) {
            $model->protocolType = $map['ProtocolType'];
        }
        if (isset($map['RdsLicenseAddress'])) {
            $model->rdsLicenseAddress = $map['RdsLicenseAddress'];
        }
        if (isset($map['RdsLicenseDomainName'])) {
            $model->rdsLicenseDomainName = $map['RdsLicenseDomainName'];
        }
        if (isset($map['RdsLicenseStatus'])) {
            $model->rdsLicenseStatus = $map['RdsLicenseStatus'];
        }
        if (isset($map['SecurityProtection'])) {
            $model->securityProtection = $map['SecurityProtection'];
        }
        if (isset($map['SsoEnabled'])) {
            $model->ssoEnabled = $map['SsoEnabled'];
        }
        if (isset($map['SsoType'])) {
            $model->ssoType = $map['SsoType'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['SubDnsAddress'])) {
            if (!empty($map['SubDnsAddress'])) {
                $model->subDnsAddress = $map['SubDnsAddress'];
            }
        }
        if (isset($map['SubDomainName'])) {
            $model->subDomainName = $map['SubDomainName'];
        }
        if (isset($map['SubnetMode'])) {
            $model->subnetMode = $map['SubnetMode'];
        }
        if (isset($map['TotalEdsCount'])) {
            $model->totalEdsCount = $map['TotalEdsCount'];
        }
        if (isset($map['TotalEdsCountForGroup'])) {
            $model->totalEdsCountForGroup = $map['TotalEdsCountForGroup'];
        }
        if (isset($map['TrustPassword'])) {
            $model->trustPassword = $map['TrustPassword'];
        }
        if (isset($map['VSwitchIds'])) {
            if (!empty($map['VSwitchIds'])) {
                $model->vSwitchIds = $map['VSwitchIds'];
            }
        }
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }
        if (isset($map['VpcType'])) {
            $model->vpcType = $map['VpcType'];
        }

        return $model;
    }
}
