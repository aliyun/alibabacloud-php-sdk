<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeDirectoriesResponseBody;

use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeDirectoriesResponseBody\directories\ADConnectors;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeDirectoriesResponseBody\directories\logs;
use AlibabaCloud\Tea\Model;

class directories extends Model
{
    /**
     * @var ADConnectors[]
     */
    public $ADConnectors;

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
