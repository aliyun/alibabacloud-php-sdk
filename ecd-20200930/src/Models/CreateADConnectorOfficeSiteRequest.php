<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Dara\Model;

class CreateADConnectorOfficeSiteRequest extends Model
{
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
    public $cenId;

    /**
     * @var int
     */
    public $cenOwnerId;

    /**
     * @var string
     */
    public $cidrBlock;

    /**
     * @var string
     */
    public $desktopAccessType;

    /**
     * @var string[]
     */
    public $dnsAddress;

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
    public $enableInternetAccess;

    /**
     * @var bool
     */
    public $mfaEnabled;

    /**
     * @var string
     */
    public $officeSiteName;

    /**
     * @var string
     */
    public $protocolType;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var int
     */
    public $specification;

    /**
     * @var string[]
     */
    public $subDomainDnsAddress;

    /**
     * @var string
     */
    public $subDomainName;

    /**
     * @var string[]
     */
    public $vSwitchId;

    /**
     * @var string
     */
    public $verifyCode;
    protected $_name = [
        'adHostname' => 'AdHostname',
        'backupDCHostname' => 'BackupDCHostname',
        'backupDns' => 'BackupDns',
        'bandwidth' => 'Bandwidth',
        'cenId' => 'CenId',
        'cenOwnerId' => 'CenOwnerId',
        'cidrBlock' => 'CidrBlock',
        'desktopAccessType' => 'DesktopAccessType',
        'dnsAddress' => 'DnsAddress',
        'domainName' => 'DomainName',
        'domainPassword' => 'DomainPassword',
        'domainUserName' => 'DomainUserName',
        'enableAdminAccess' => 'EnableAdminAccess',
        'enableInternetAccess' => 'EnableInternetAccess',
        'mfaEnabled' => 'MfaEnabled',
        'officeSiteName' => 'OfficeSiteName',
        'protocolType' => 'ProtocolType',
        'regionId' => 'RegionId',
        'specification' => 'Specification',
        'subDomainDnsAddress' => 'SubDomainDnsAddress',
        'subDomainName' => 'SubDomainName',
        'vSwitchId' => 'VSwitchId',
        'verifyCode' => 'VerifyCode',
    ];

    public function validate()
    {
        if (\is_array($this->dnsAddress)) {
            Model::validateArray($this->dnsAddress);
        }
        if (\is_array($this->subDomainDnsAddress)) {
            Model::validateArray($this->subDomainDnsAddress);
        }
        if (\is_array($this->vSwitchId)) {
            Model::validateArray($this->vSwitchId);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
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
            if (\is_array($this->dnsAddress)) {
                $res['DnsAddress'] = [];
                $n1 = 0;
                foreach ($this->dnsAddress as $item1) {
                    $res['DnsAddress'][$n1++] = $item1;
                }
            }
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
            if (\is_array($this->subDomainDnsAddress)) {
                $res['SubDomainDnsAddress'] = [];
                $n1 = 0;
                foreach ($this->subDomainDnsAddress as $item1) {
                    $res['SubDomainDnsAddress'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->subDomainName) {
            $res['SubDomainName'] = $this->subDomainName;
        }

        if (null !== $this->vSwitchId) {
            if (\is_array($this->vSwitchId)) {
                $res['VSwitchId'] = [];
                $n1 = 0;
                foreach ($this->vSwitchId as $item1) {
                    $res['VSwitchId'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->verifyCode) {
            $res['VerifyCode'] = $this->verifyCode;
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
                $model->dnsAddress = [];
                $n1 = 0;
                foreach ($map['DnsAddress'] as $item1) {
                    $model->dnsAddress[$n1++] = $item1;
                }
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
                $model->subDomainDnsAddress = [];
                $n1 = 0;
                foreach ($map['SubDomainDnsAddress'] as $item1) {
                    $model->subDomainDnsAddress[$n1++] = $item1;
                }
            }
        }

        if (isset($map['SubDomainName'])) {
            $model->subDomainName = $map['SubDomainName'];
        }

        if (isset($map['VSwitchId'])) {
            if (!empty($map['VSwitchId'])) {
                $model->vSwitchId = [];
                $n1 = 0;
                foreach ($map['VSwitchId'] as $item1) {
                    $model->vSwitchId[$n1++] = $item1;
                }
            }
        }

        if (isset($map['VerifyCode'])) {
            $model->verifyCode = $map['VerifyCode'];
        }

        return $model;
    }
}
