<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeDirectoriesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeDirectoriesResponseBody\directories\ADConnectors;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeDirectoriesResponseBody\directories\logs;

class directories extends Model
{
    /**
     * @var ADConnectors[]
     */
    public $ADConnectors;

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
     * @var string
     */
    public $creationTime;

    /**
     * @var string
     */
    public $customSecurityGroupId;

    /**
     * @var string
     */
    public $desktopAccessType;

    /**
     * @var string
     */
    public $desktopVpcEndpoint;

    /**
     * @var string
     */
    public $directoryId;

    /**
     * @var string
     */
    public $directoryType;

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
     * @var string[]
     */
    public $fileSystemIds;

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
     * @var string
     */
    public $ouName;

    /**
     * @var bool
     */
    public $ssoEnabled;

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
    public $trustPassword;

    /**
     * @var string[]
     */
    public $vSwitchIds;

    /**
     * @var string
     */
    public $vpcId;
    protected $_name = [
        'ADConnectors' => 'ADConnectors',
        'adHostname' => 'AdHostname',
        'backupDCHostname' => 'BackupDCHostname',
        'backupDns' => 'BackupDns',
        'creationTime' => 'CreationTime',
        'customSecurityGroupId' => 'CustomSecurityGroupId',
        'desktopAccessType' => 'DesktopAccessType',
        'desktopVpcEndpoint' => 'DesktopVpcEndpoint',
        'directoryId' => 'DirectoryId',
        'directoryType' => 'DirectoryType',
        'dnsAddress' => 'DnsAddress',
        'dnsUserName' => 'DnsUserName',
        'domainName' => 'DomainName',
        'domainPassword' => 'DomainPassword',
        'domainUserName' => 'DomainUserName',
        'enableAdminAccess' => 'EnableAdminAccess',
        'enableCrossDesktopAccess' => 'EnableCrossDesktopAccess',
        'enableInternetAccess' => 'EnableInternetAccess',
        'fileSystemIds' => 'FileSystemIds',
        'logs' => 'Logs',
        'mfaEnabled' => 'MfaEnabled',
        'name' => 'Name',
        'needVerifyLoginRisk' => 'NeedVerifyLoginRisk',
        'ouName' => 'OuName',
        'ssoEnabled' => 'SsoEnabled',
        'status' => 'Status',
        'subDnsAddress' => 'SubDnsAddress',
        'subDomainName' => 'SubDomainName',
        'trustPassword' => 'TrustPassword',
        'vSwitchIds' => 'VSwitchIds',
        'vpcId' => 'VpcId',
    ];

    public function validate()
    {
        if (\is_array($this->ADConnectors)) {
            Model::validateArray($this->ADConnectors);
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

        if (null !== $this->adHostname) {
            $res['AdHostname'] = $this->adHostname;
        }

        if (null !== $this->backupDCHostname) {
            $res['BackupDCHostname'] = $this->backupDCHostname;
        }

        if (null !== $this->backupDns) {
            $res['BackupDns'] = $this->backupDns;
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

        if (isset($map['AdHostname'])) {
            $model->adHostname = $map['AdHostname'];
        }

        if (isset($map['BackupDCHostname'])) {
            $model->backupDCHostname = $map['BackupDCHostname'];
        }

        if (isset($map['BackupDns'])) {
            $model->backupDns = $map['BackupDns'];
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

        return $model;
    }
}
