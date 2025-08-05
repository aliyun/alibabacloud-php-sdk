<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeOfficeSitesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeOfficeSitesResponseBody\officeSites\ADConnectors;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeOfficeSitesResponseBody\officeSites\logs;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeOfficeSitesResponseBody\officeSites\resourceAmounts;

class officeSites extends Model
{
    /**
     * @var ADConnectors[]
     */
    public $ADConnectors;

    /**
     * @var string
     */
    public $acceleratorId;

    /**
     * @var string
     */
    public $adHostname;

    /**
     * @var string
     */
    public $backupDCHostname;

    /**
     * @var string
     */
    public $backupDns;

    /**
     * @var int
     */
    public $bandwidth;

    /**
     * @var string
     */
    public $cenAttachStatus;

    /**
     * @var string
     */
    public $cenId;

    /**
     * @var string
     */
    public $cidrBlock;

    /**
     * @var bool
     */
    public $cloudBoxOfficeSite;

    /**
     * @var string
     */
    public $creationTime;

    /**
     * @var string
     */
    public $customAccessPoint;

    /**
     * @var string[]
     */
    public $customDnsAddress;

    /**
     * @var string
     */
    public $customSecurityGroupId;

    /**
     * @var string
     */
    public $desktopAccessType;

    /**
     * @var int
     */
    public $desktopCount;

    /**
     * @var string
     */
    public $desktopVpcEndpoint;

    /**
     * @var string[]
     */
    public $dnsAddress;

    /**
     * @var string
     */
    public $dnsUserName;

    /**
     * @var string
     */
    public $domainName;

    /**
     * @var string
     */
    public $domainPassword;

    /**
     * @var string
     */
    public $domainUserName;

    /**
     * @var bool
     */
    public $enableAdminAccess;

    /**
     * @var bool
     */
    public $enableCrossDesktopAccess;

    /**
     * @var bool
     */
    public $enableInternetAccess;

    /**
     * @var bool
     */
    public $enableServiceRoute;

    /**
     * @var string[]
     */
    public $fileSystemIds;

    /**
     * @var bool
     */
    public $isLdap;

    /**
     * @var string
     */
    public $ldapUrl;

    /**
     * @var logs[]
     */
    public $logs;

    /**
     * @var bool
     */
    public $mfaEnabled;

    /**
     * @var string
     */
    public $name;

    /**
     * @var bool
     */
    public $needVerifyLoginRisk;

    /**
     * @var bool
     */
    public $needVerifyZeroDevice;

    /**
     * @var string
     */
    public $networkPackageId;

    /**
     * @var string
     */
    public $nmVersion;

    /**
     * @var string
     */
    public $officeSiteId;

    /**
     * @var string
     */
    public $officeSiteType;

    /**
     * @var string
     */
    public $ouName;

    /**
     * @var string
     */
    public $protocolType;

    /**
     * @var string
     */
    public $rdsLicenseAddress;

    /**
     * @var string
     */
    public $rdsLicenseDomainName;

    /**
     * @var string
     */
    public $rdsLicenseStatus;

    /**
     * @var resourceAmounts[]
     */
    public $resourceAmounts;

    /**
     * @var string
     */
    public $securityProtection;

    /**
     * @var bool
     */
    public $ssoEnabled;

    /**
     * @var string
     */
    public $ssoType;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string[]
     */
    public $subDnsAddress;

    /**
     * @var string
     */
    public $subDomainName;

    /**
     * @var string
     */
    public $subnetMode;

    /**
     * @var int
     */
    public $totalEdsCount;

    /**
     * @var int
     */
    public $totalEdsCountForGroup;

    /**
     * @var int
     */
    public $totalResourceAmount;

    /**
     * @var string
     */
    public $trustPassword;

    /**
     * @var string[]
     */
    public $vSwitchIds;

    /**
     * @var string
     */
    public $vpcId;

    /**
     * @var string
     */
    public $vpcType;
    protected $_name = [
        'ADConnectors' => 'ADConnectors',
        'acceleratorId' => 'AcceleratorId',
        'adHostname' => 'AdHostname',
        'backupDCHostname' => 'BackupDCHostname',
        'backupDns' => 'BackupDns',
        'bandwidth' => 'Bandwidth',
        'cenAttachStatus' => 'CenAttachStatus',
        'cenId' => 'CenId',
        'cidrBlock' => 'CidrBlock',
        'cloudBoxOfficeSite' => 'CloudBoxOfficeSite',
        'creationTime' => 'CreationTime',
        'customAccessPoint' => 'CustomAccessPoint',
        'customDnsAddress' => 'CustomDnsAddress',
        'customSecurityGroupId' => 'CustomSecurityGroupId',
        'desktopAccessType' => 'DesktopAccessType',
        'desktopCount' => 'DesktopCount',
        'desktopVpcEndpoint' => 'DesktopVpcEndpoint',
        'dnsAddress' => 'DnsAddress',
        'dnsUserName' => 'DnsUserName',
        'domainName' => 'DomainName',
        'domainPassword' => 'DomainPassword',
        'domainUserName' => 'DomainUserName',
        'enableAdminAccess' => 'EnableAdminAccess',
        'enableCrossDesktopAccess' => 'EnableCrossDesktopAccess',
        'enableInternetAccess' => 'EnableInternetAccess',
        'enableServiceRoute' => 'EnableServiceRoute',
        'fileSystemIds' => 'FileSystemIds',
        'isLdap' => 'IsLdap',
        'ldapUrl' => 'LdapUrl',
        'logs' => 'Logs',
        'mfaEnabled' => 'MfaEnabled',
        'name' => 'Name',
        'needVerifyLoginRisk' => 'NeedVerifyLoginRisk',
        'needVerifyZeroDevice' => 'NeedVerifyZeroDevice',
        'networkPackageId' => 'NetworkPackageId',
        'nmVersion' => 'NmVersion',
        'officeSiteId' => 'OfficeSiteId',
        'officeSiteType' => 'OfficeSiteType',
        'ouName' => 'OuName',
        'protocolType' => 'ProtocolType',
        'rdsLicenseAddress' => 'RdsLicenseAddress',
        'rdsLicenseDomainName' => 'RdsLicenseDomainName',
        'rdsLicenseStatus' => 'RdsLicenseStatus',
        'resourceAmounts' => 'ResourceAmounts',
        'securityProtection' => 'SecurityProtection',
        'ssoEnabled' => 'SsoEnabled',
        'ssoType' => 'SsoType',
        'status' => 'Status',
        'subDnsAddress' => 'SubDnsAddress',
        'subDomainName' => 'SubDomainName',
        'subnetMode' => 'SubnetMode',
        'totalEdsCount' => 'TotalEdsCount',
        'totalEdsCountForGroup' => 'TotalEdsCountForGroup',
        'totalResourceAmount' => 'TotalResourceAmount',
        'trustPassword' => 'TrustPassword',
        'vSwitchIds' => 'VSwitchIds',
        'vpcId' => 'VpcId',
        'vpcType' => 'VpcType',
    ];

    public function validate()
    {
        if (\is_array($this->ADConnectors)) {
            Model::validateArray($this->ADConnectors);
        }
        if (\is_array($this->customDnsAddress)) {
            Model::validateArray($this->customDnsAddress);
        }
        if (\is_array($this->dnsAddress)) {
            Model::validateArray($this->dnsAddress);
        }
        if (\is_array($this->fileSystemIds)) {
            Model::validateArray($this->fileSystemIds);
        }
        if (\is_array($this->logs)) {
            Model::validateArray($this->logs);
        }
        if (\is_array($this->resourceAmounts)) {
            Model::validateArray($this->resourceAmounts);
        }
        if (\is_array($this->subDnsAddress)) {
            Model::validateArray($this->subDnsAddress);
        }
        if (\is_array($this->vSwitchIds)) {
            Model::validateArray($this->vSwitchIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->ADConnectors) {
            if (\is_array($this->ADConnectors)) {
                $res['ADConnectors'] = [];
                $n1 = 0;
                foreach ($this->ADConnectors as $item1) {
                    $res['ADConnectors'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->acceleratorId) {
            $res['AcceleratorId'] = $this->acceleratorId;
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

        if (null !== $this->customAccessPoint) {
            $res['CustomAccessPoint'] = $this->customAccessPoint;
        }

        if (null !== $this->customDnsAddress) {
            if (\is_array($this->customDnsAddress)) {
                $res['CustomDnsAddress'] = [];
                $n1 = 0;
                foreach ($this->customDnsAddress as $item1) {
                    $res['CustomDnsAddress'][$n1] = $item1;
                    ++$n1;
                }
            }
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
            if (\is_array($this->dnsAddress)) {
                $res['DnsAddress'] = [];
                $n1 = 0;
                foreach ($this->dnsAddress as $item1) {
                    $res['DnsAddress'][$n1] = $item1;
                    ++$n1;
                }
            }
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
            if (\is_array($this->fileSystemIds)) {
                $res['FileSystemIds'] = [];
                $n1 = 0;
                foreach ($this->fileSystemIds as $item1) {
                    $res['FileSystemIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->isLdap) {
            $res['IsLdap'] = $this->isLdap;
        }

        if (null !== $this->ldapUrl) {
            $res['LdapUrl'] = $this->ldapUrl;
        }

        if (null !== $this->logs) {
            if (\is_array($this->logs)) {
                $res['Logs'] = [];
                $n1 = 0;
                foreach ($this->logs as $item1) {
                    $res['Logs'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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

        if (null !== $this->nmVersion) {
            $res['NmVersion'] = $this->nmVersion;
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

        if (null !== $this->resourceAmounts) {
            if (\is_array($this->resourceAmounts)) {
                $res['ResourceAmounts'] = [];
                $n1 = 0;
                foreach ($this->resourceAmounts as $item1) {
                    $res['ResourceAmounts'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
            if (\is_array($this->subDnsAddress)) {
                $res['SubDnsAddress'] = [];
                $n1 = 0;
                foreach ($this->subDnsAddress as $item1) {
                    $res['SubDnsAddress'][$n1] = $item1;
                    ++$n1;
                }
            }
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

        if (null !== $this->totalResourceAmount) {
            $res['TotalResourceAmount'] = $this->totalResourceAmount;
        }

        if (null !== $this->trustPassword) {
            $res['TrustPassword'] = $this->trustPassword;
        }

        if (null !== $this->vSwitchIds) {
            if (\is_array($this->vSwitchIds)) {
                $res['VSwitchIds'] = [];
                $n1 = 0;
                foreach ($this->vSwitchIds as $item1) {
                    $res['VSwitchIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }

        if (null !== $this->vpcType) {
            $res['VpcType'] = $this->vpcType;
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
        if (isset($map['ADConnectors'])) {
            if (!empty($map['ADConnectors'])) {
                $model->ADConnectors = [];
                $n1 = 0;
                foreach ($map['ADConnectors'] as $item1) {
                    $model->ADConnectors[$n1] = ADConnectors::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['AcceleratorId'])) {
            $model->acceleratorId = $map['AcceleratorId'];
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

        if (isset($map['CustomAccessPoint'])) {
            $model->customAccessPoint = $map['CustomAccessPoint'];
        }

        if (isset($map['CustomDnsAddress'])) {
            if (!empty($map['CustomDnsAddress'])) {
                $model->customDnsAddress = [];
                $n1 = 0;
                foreach ($map['CustomDnsAddress'] as $item1) {
                    $model->customDnsAddress[$n1] = $item1;
                    ++$n1;
                }
            }
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
                $model->dnsAddress = [];
                $n1 = 0;
                foreach ($map['DnsAddress'] as $item1) {
                    $model->dnsAddress[$n1] = $item1;
                    ++$n1;
                }
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
                $model->fileSystemIds = [];
                $n1 = 0;
                foreach ($map['FileSystemIds'] as $item1) {
                    $model->fileSystemIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['IsLdap'])) {
            $model->isLdap = $map['IsLdap'];
        }

        if (isset($map['LdapUrl'])) {
            $model->ldapUrl = $map['LdapUrl'];
        }

        if (isset($map['Logs'])) {
            if (!empty($map['Logs'])) {
                $model->logs = [];
                $n1 = 0;
                foreach ($map['Logs'] as $item1) {
                    $model->logs[$n1] = logs::fromMap($item1);
                    ++$n1;
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

        if (isset($map['NmVersion'])) {
            $model->nmVersion = $map['NmVersion'];
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

        if (isset($map['ResourceAmounts'])) {
            if (!empty($map['ResourceAmounts'])) {
                $model->resourceAmounts = [];
                $n1 = 0;
                foreach ($map['ResourceAmounts'] as $item1) {
                    $model->resourceAmounts[$n1] = resourceAmounts::fromMap($item1);
                    ++$n1;
                }
            }
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
                $model->subDnsAddress = [];
                $n1 = 0;
                foreach ($map['SubDnsAddress'] as $item1) {
                    $model->subDnsAddress[$n1] = $item1;
                    ++$n1;
                }
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

        if (isset($map['TotalResourceAmount'])) {
            $model->totalResourceAmount = $map['TotalResourceAmount'];
        }

        if (isset($map['TrustPassword'])) {
            $model->trustPassword = $map['TrustPassword'];
        }

        if (isset($map['VSwitchIds'])) {
            if (!empty($map['VSwitchIds'])) {
                $model->vSwitchIds = [];
                $n1 = 0;
                foreach ($map['VSwitchIds'] as $item1) {
                    $model->vSwitchIds[$n1] = $item1;
                    ++$n1;
                }
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
