<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeOfficeSitesResponse;

use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeOfficeSitesResponse\officeSites\ADConnectors;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeOfficeSitesResponse\officeSites\logs;
use AlibabaCloud\Tea\Model;

class officeSites extends Model
{
    /**
     * @var int
     */
    public $bandwidth;

    /**
     * @var string
     */
    public $cenId;

    /**
     * @var string
     */
    public $cidrBlock;

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
    public $networkPackageId;

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
     * @var bool
     */
    public $ssoEnabled;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $subDomainName;

    /**
     * @var string
     */
    public $trustPassword;

    /**
     * @var string
     */
    public $vpcId;

    /**
     * @var ADConnectors[]
     */
    public $ADConnectors;

    /**
     * @var logs[]
     */
    public $logs;

    /**
     * @var string[]
     */
    public $dnsAddress;

    /**
     * @var string[]
     */
    public $fileSystemIds;

    /**
     * @var string[]
     */
    public $subDnsAddress;

    /**
     * @var string[]
     */
    public $vSwitchIds;
    protected $_name = [
        'bandwidth'                => 'Bandwidth',
        'cenId'                    => 'CenId',
        'cidrBlock'                => 'CidrBlock',
        'creationTime'             => 'CreationTime',
        'customSecurityGroupId'    => 'CustomSecurityGroupId',
        'desktopAccessType'        => 'DesktopAccessType',
        'desktopVpcEndpoint'       => 'DesktopVpcEndpoint',
        'dnsUserName'              => 'DnsUserName',
        'domainName'               => 'DomainName',
        'domainPassword'           => 'DomainPassword',
        'domainUserName'           => 'DomainUserName',
        'enableAdminAccess'        => 'EnableAdminAccess',
        'enableCrossDesktopAccess' => 'EnableCrossDesktopAccess',
        'enableInternetAccess'     => 'EnableInternetAccess',
        'mfaEnabled'               => 'MfaEnabled',
        'name'                     => 'Name',
        'needVerifyLoginRisk'      => 'NeedVerifyLoginRisk',
        'networkPackageId'         => 'NetworkPackageId',
        'officeSiteId'             => 'OfficeSiteId',
        'officeSiteType'           => 'OfficeSiteType',
        'ouName'                   => 'OuName',
        'ssoEnabled'               => 'SsoEnabled',
        'status'                   => 'Status',
        'subDomainName'            => 'SubDomainName',
        'trustPassword'            => 'TrustPassword',
        'vpcId'                    => 'VpcId',
        'ADConnectors'             => 'ADConnectors',
        'logs'                     => 'Logs',
        'dnsAddress'               => 'DnsAddress',
        'fileSystemIds'            => 'FileSystemIds',
        'subDnsAddress'            => 'SubDnsAddress',
        'vSwitchIds'               => 'VSwitchIds',
    ];

    public function validate()
    {
        Model::validateRequired('bandwidth', $this->bandwidth, true);
        Model::validateRequired('cenId', $this->cenId, true);
        Model::validateRequired('cidrBlock', $this->cidrBlock, true);
        Model::validateRequired('creationTime', $this->creationTime, true);
        Model::validateRequired('customSecurityGroupId', $this->customSecurityGroupId, true);
        Model::validateRequired('desktopAccessType', $this->desktopAccessType, true);
        Model::validateRequired('desktopVpcEndpoint', $this->desktopVpcEndpoint, true);
        Model::validateRequired('dnsUserName', $this->dnsUserName, true);
        Model::validateRequired('domainName', $this->domainName, true);
        Model::validateRequired('domainPassword', $this->domainPassword, true);
        Model::validateRequired('domainUserName', $this->domainUserName, true);
        Model::validateRequired('enableAdminAccess', $this->enableAdminAccess, true);
        Model::validateRequired('enableCrossDesktopAccess', $this->enableCrossDesktopAccess, true);
        Model::validateRequired('enableInternetAccess', $this->enableInternetAccess, true);
        Model::validateRequired('mfaEnabled', $this->mfaEnabled, true);
        Model::validateRequired('name', $this->name, true);
        Model::validateRequired('needVerifyLoginRisk', $this->needVerifyLoginRisk, true);
        Model::validateRequired('networkPackageId', $this->networkPackageId, true);
        Model::validateRequired('officeSiteId', $this->officeSiteId, true);
        Model::validateRequired('officeSiteType', $this->officeSiteType, true);
        Model::validateRequired('ouName', $this->ouName, true);
        Model::validateRequired('ssoEnabled', $this->ssoEnabled, true);
        Model::validateRequired('status', $this->status, true);
        Model::validateRequired('subDomainName', $this->subDomainName, true);
        Model::validateRequired('trustPassword', $this->trustPassword, true);
        Model::validateRequired('vpcId', $this->vpcId, true);
        Model::validateRequired('ADConnectors', $this->ADConnectors, true);
        Model::validateRequired('logs', $this->logs, true);
        Model::validateRequired('dnsAddress', $this->dnsAddress, true);
        Model::validateRequired('fileSystemIds', $this->fileSystemIds, true);
        Model::validateRequired('subDnsAddress', $this->subDnsAddress, true);
        Model::validateRequired('vSwitchIds', $this->vSwitchIds, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bandwidth) {
            $res['Bandwidth'] = $this->bandwidth;
        }
        if (null !== $this->cenId) {
            $res['CenId'] = $this->cenId;
        }
        if (null !== $this->cidrBlock) {
            $res['CidrBlock'] = $this->cidrBlock;
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
        if (null !== $this->mfaEnabled) {
            $res['MfaEnabled'] = $this->mfaEnabled;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->needVerifyLoginRisk) {
            $res['NeedVerifyLoginRisk'] = $this->needVerifyLoginRisk;
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
        if (null !== $this->ssoEnabled) {
            $res['SsoEnabled'] = $this->ssoEnabled;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->subDomainName) {
            $res['SubDomainName'] = $this->subDomainName;
        }
        if (null !== $this->trustPassword) {
            $res['TrustPassword'] = $this->trustPassword;
        }
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }
        if (null !== $this->ADConnectors) {
            $res['ADConnectors'] = [];
            if (null !== $this->ADConnectors && \is_array($this->ADConnectors)) {
                $n = 0;
                foreach ($this->ADConnectors as $item) {
                    $res['ADConnectors'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
        if (null !== $this->dnsAddress) {
            $res['DnsAddress'] = $this->dnsAddress;
        }
        if (null !== $this->fileSystemIds) {
            $res['FileSystemIds'] = $this->fileSystemIds;
        }
        if (null !== $this->subDnsAddress) {
            $res['SubDnsAddress'] = $this->subDnsAddress;
        }
        if (null !== $this->vSwitchIds) {
            $res['VSwitchIds'] = $this->vSwitchIds;
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
        if (isset($map['Bandwidth'])) {
            $model->bandwidth = $map['Bandwidth'];
        }
        if (isset($map['CenId'])) {
            $model->cenId = $map['CenId'];
        }
        if (isset($map['CidrBlock'])) {
            $model->cidrBlock = $map['CidrBlock'];
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
        if (isset($map['MfaEnabled'])) {
            $model->mfaEnabled = $map['MfaEnabled'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['NeedVerifyLoginRisk'])) {
            $model->needVerifyLoginRisk = $map['NeedVerifyLoginRisk'];
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
        if (isset($map['SsoEnabled'])) {
            $model->ssoEnabled = $map['SsoEnabled'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['SubDomainName'])) {
            $model->subDomainName = $map['SubDomainName'];
        }
        if (isset($map['TrustPassword'])) {
            $model->trustPassword = $map['TrustPassword'];
        }
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }
        if (isset($map['ADConnectors'])) {
            if (!empty($map['ADConnectors'])) {
                $model->ADConnectors = [];
                $n                   = 0;
                foreach ($map['ADConnectors'] as $item) {
                    $model->ADConnectors[$n++] = null !== $item ? ADConnectors::fromMap($item) : $item;
                }
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
        if (isset($map['DnsAddress'])) {
            if (!empty($map['DnsAddress'])) {
                $model->dnsAddress = $map['DnsAddress'];
            }
        }
        if (isset($map['FileSystemIds'])) {
            if (!empty($map['FileSystemIds'])) {
                $model->fileSystemIds = $map['FileSystemIds'];
            }
        }
        if (isset($map['SubDnsAddress'])) {
            if (!empty($map['SubDnsAddress'])) {
                $model->subDnsAddress = $map['SubDnsAddress'];
            }
        }
        if (isset($map['VSwitchIds'])) {
            if (!empty($map['VSwitchIds'])) {
                $model->vSwitchIds = $map['VSwitchIds'];
            }
        }

        return $model;
    }
}
