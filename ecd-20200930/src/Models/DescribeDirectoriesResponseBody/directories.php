<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeDirectoriesResponseBody;

use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeDirectoriesResponseBody\directories\ADConnectors;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeDirectoriesResponseBody\directories\logs;
use AlibabaCloud\Tea\Model;

class directories extends Model
{
    /**
     * @description Details of the AD connector.
     *
     * @var ADConnectors[]
     */
    public $ADConnectors;

    /**
     * @description The time when the directory was created.
     *
     * @example 2020-11-02T01:44Z
     *
     * @var string
     */
    public $creationTime;

    /**
     * @description The security group ID. This parameter is returned only when the directory type is AD office network.
     *
     * @example sg-bp1ce64o4g9mdf5u****
     *
     * @var string
     */
    public $customSecurityGroupId;

    /**
     * @description The method in which the cloud computer is connected.
     *
     * Valid values:
     *
     *   VPC
     *
     * <!-- -->
     *
     *   Internet
     *
     * <!-- -->
     *
     *   Any
     *
     * <!-- -->
     * @example Internet
     *
     * @var string
     */
    public $desktopAccessType;

    /**
     * @description The endpoint that is used to connect to cloud computers in the directory over a VPC.
     *
     * @example http://ep-bp1s2vmbj55r5rzc****.epsrv-bp1pcfhpwvlpny01****.cn-hangzhou.privatelink.aliyuncs.com
     *
     * @var string
     */
    public $desktopVpcEndpoint;

    /**
     * @description The directory ID.
     *
     * @example cn-hangzhou+dir-gx2x1dhsmu52rd****
     *
     * @var string
     */
    public $directoryId;

    /**
     * @description The directory type.
     *
     * Valid values:
     *
     *   AD_CONNECTOR: AD directory
     *
     * <!-- -->
     *
     *   RAM: RAM directory
     *
     * <!-- -->
     * @example RAM
     *
     * @var string
     */
    public $directoryType;

    /**
     * @description The DNS address of the directory.
     *
     * @var string[]
     */
    public $dnsAddress;

    /**
     * @description The username of a DNS user.
     *
     * @example testDnsUserName
     *
     * @var string
     */
    public $dnsUserName;

    /**
     * @description The domain name.
     *
     * @example example.com
     *
     * @var string
     */
    public $domainName;

    /**
     * @description The password of the domain administrator. This parameter is returned only when the directory type is AD office network.
     *
     * @example testPassword
     *
     * @var string
     */
    public $domainPassword;

    /**
     * @description The username of the domain administrator.
     *
     * @example sAMAccountName
     *
     * @var string
     */
    public $domainUserName;

    /**
     * @description Indicates whether the local administrator permissions are granted to users that use cloud computers in the office network.
     *
     * @example true
     *
     * @var bool
     */
    public $enableAdminAccess;

    /**
     * @description Indicates whether cloud computers can communicate with each other in the directory.
     *
     * @example true
     *
     * @var bool
     */
    public $enableCrossDesktopAccess;

    /**
     * @description Indicates whether access over the Internet is enabled.
     *
     * >  This parameter is unavailable.
     * @example false
     *
     * @var bool
     */
    public $enableInternetAccess;

    /**
     * @description The IDs of Apsara File Storage NAS (NAS) file systems.
     *
     * @var string[]
     */
    public $fileSystemIds;

    /**
     * @description The registration logs. This parameter is returned only when the directory type is AD office network.
     *
     * @var logs[]
     */
    public $logs;

    /**
     * @description Indicates whether MFA is enabled.
     *
     * @example false
     *
     * @var bool
     */
    public $mfaEnabled;

    /**
     * @description The directory name.
     *
     * @example testDirectoryName
     *
     * @var string
     */
    public $name;

    /**
     * @description Indicates whether two-step verification for logons is enabled. This parameter is returned only for directories of convenience account type.\
     * If two-factor verification is enabled, the system checks whether security risks exist within the logon account when a convenience user logs on to an Alibaba Cloud Workspace client. If risks are detected, the system sends a verification code to the email address that is associated with the account. Then, the convenience user can log on to the client only after the user enters the correct verification code.
     * @example false
     *
     * @var bool
     */
    public $needVerifyLoginRisk;

    /**
     * @description The organization unit that you selected when you added the cloud computer to the domain.
     *
     * @example example.com/Domain Controllers
     *
     * @var string
     */
    public $ouName;

    /**
     * @description Indicates whether single sign-on (SSO) is enabled.
     *
     * @example false
     *
     * @var bool
     */
    public $ssoEnabled;

    /**
     * @description The status of the AD directory.
     *
     * Valid values:
     *
     *   REGISTERING
     *
     * <!-- -->
     *
     *   REGISTERED
     *
     * <!-- -->
     * @example REGISTERING
     *
     * @var string
     */
    public $status;

    /**
     * @description The DNS address of the enterprise AD subdomain.
     *
     * @var string[]
     */
    public $subDnsAddress;

    /**
     * @description The fully qualified domain name (FQDN) of the existing AD subdomain. The value contains both the host name and the domain name.
     *
     * @example child.example.com
     *
     * @var string
     */
    public $subDomainName;

    /**
     * @description The AD trust password. This parameter is returned only when the directory type is AD office network.
     *
     * @example 82Tg****
     *
     * @var string
     */
    public $trustPassword;

    /**
     * @description The IDs of the vSwitches specified when the directory was created.
     *
     * @var string[]
     */
    public $vSwitchIds;

    /**
     * @description The ID of the VPC to which the vSwitch belongs. This parameter is returned only when the directory type is AD office network.
     *
     * @example vpc-uf6tz5k67puge5jn8****
     *
     * @var string
     */
    public $vpcId;
    protected $_name = [
        'ADConnectors'             => 'ADConnectors',
        'creationTime'             => 'CreationTime',
        'customSecurityGroupId'    => 'CustomSecurityGroupId',
        'desktopAccessType'        => 'DesktopAccessType',
        'desktopVpcEndpoint'       => 'DesktopVpcEndpoint',
        'directoryId'              => 'DirectoryId',
        'directoryType'            => 'DirectoryType',
        'dnsAddress'               => 'DnsAddress',
        'dnsUserName'              => 'DnsUserName',
        'domainName'               => 'DomainName',
        'domainPassword'           => 'DomainPassword',
        'domainUserName'           => 'DomainUserName',
        'enableAdminAccess'        => 'EnableAdminAccess',
        'enableCrossDesktopAccess' => 'EnableCrossDesktopAccess',
        'enableInternetAccess'     => 'EnableInternetAccess',
        'fileSystemIds'            => 'FileSystemIds',
        'logs'                     => 'Logs',
        'mfaEnabled'               => 'MfaEnabled',
        'name'                     => 'Name',
        'needVerifyLoginRisk'      => 'NeedVerifyLoginRisk',
        'ouName'                   => 'OuName',
        'ssoEnabled'               => 'SsoEnabled',
        'status'                   => 'Status',
        'subDnsAddress'            => 'SubDnsAddress',
        'subDomainName'            => 'SubDomainName',
        'trustPassword'            => 'TrustPassword',
        'vSwitchIds'               => 'VSwitchIds',
        'vpcId'                    => 'VpcId',
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
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }
        if (null !== $this->customSecurityGroupId) {
            $res['CustomSecurityGroupId'] = $this->customSecurityGroupId;
        }
        if (null !== $this->desktopAccessType) {
            $res['DesktopAccessType'] = $this->desktopAccessType;
        }
        if (null !== $this->desktopVpcEndpoint) {
            $res['DesktopVpcEndpoint'] = $this->desktopVpcEndpoint;
        }
        if (null !== $this->directoryId) {
            $res['DirectoryId'] = $this->directoryId;
        }
        if (null !== $this->directoryType) {
            $res['DirectoryType'] = $this->directoryType;
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
        if (null !== $this->ouName) {
            $res['OuName'] = $this->ouName;
        }
        if (null !== $this->ssoEnabled) {
            $res['SsoEnabled'] = $this->ssoEnabled;
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
        if (null !== $this->trustPassword) {
            $res['TrustPassword'] = $this->trustPassword;
        }
        if (null !== $this->vSwitchIds) {
            $res['VSwitchIds'] = $this->vSwitchIds;
        }
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return directories
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
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }
        if (isset($map['CustomSecurityGroupId'])) {
            $model->customSecurityGroupId = $map['CustomSecurityGroupId'];
        }
        if (isset($map['DesktopAccessType'])) {
            $model->desktopAccessType = $map['DesktopAccessType'];
        }
        if (isset($map['DesktopVpcEndpoint'])) {
            $model->desktopVpcEndpoint = $map['DesktopVpcEndpoint'];
        }
        if (isset($map['DirectoryId'])) {
            $model->directoryId = $map['DirectoryId'];
        }
        if (isset($map['DirectoryType'])) {
            $model->directoryType = $map['DirectoryType'];
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
        if (isset($map['OuName'])) {
            $model->ouName = $map['OuName'];
        }
        if (isset($map['SsoEnabled'])) {
            $model->ssoEnabled = $map['SsoEnabled'];
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

        return $model;
    }
}
