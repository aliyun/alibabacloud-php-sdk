<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Tea\Model;

class CreateADConnectorOfficeSiteRequest extends Model
{
    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $cidrBlock;

    /**
     * @var string
     */
    public $cenId;

    /**
     * @var int
     */
    public $bandwidth;

    /**
     * @var string
     */
    public $domainName;

    /**
     * @var string
     */
    public $domainUserName;

    /**
     * @var string
     */
    public $domainPassword;

    /**
     * @var string
     */
    public $officeSiteName;

    /**
     * @var bool
     */
    public $enableAdminAccess;

    /**
     * @var string
     */
    public $desktopAccessType;

    /**
     * @var bool
     */
    public $enableInternetAccess;

    /**
     * @var string
     */
    public $subDomainName;

    /**
     * @var bool
     */
    public $mfaEnabled;

    /**
     * @var string[]
     */
    public $dnsAddress;

    /**
     * @var string[]
     */
    public $subDomainDnsAddress;
    protected $_name = [
        'regionId'             => 'RegionId',
        'cidrBlock'            => 'CidrBlock',
        'cenId'                => 'CenId',
        'bandwidth'            => 'Bandwidth',
        'domainName'           => 'DomainName',
        'domainUserName'       => 'DomainUserName',
        'domainPassword'       => 'DomainPassword',
        'officeSiteName'       => 'OfficeSiteName',
        'enableAdminAccess'    => 'EnableAdminAccess',
        'desktopAccessType'    => 'DesktopAccessType',
        'enableInternetAccess' => 'EnableInternetAccess',
        'subDomainName'        => 'SubDomainName',
        'mfaEnabled'           => 'MfaEnabled',
        'dnsAddress'           => 'DnsAddress',
        'subDomainDnsAddress'  => 'SubDomainDnsAddress',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->cidrBlock) {
            $res['CidrBlock'] = $this->cidrBlock;
        }
        if (null !== $this->cenId) {
            $res['CenId'] = $this->cenId;
        }
        if (null !== $this->bandwidth) {
            $res['Bandwidth'] = $this->bandwidth;
        }
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }
        if (null !== $this->domainUserName) {
            $res['DomainUserName'] = $this->domainUserName;
        }
        if (null !== $this->domainPassword) {
            $res['DomainPassword'] = $this->domainPassword;
        }
        if (null !== $this->officeSiteName) {
            $res['OfficeSiteName'] = $this->officeSiteName;
        }
        if (null !== $this->enableAdminAccess) {
            $res['EnableAdminAccess'] = $this->enableAdminAccess;
        }
        if (null !== $this->desktopAccessType) {
            $res['DesktopAccessType'] = $this->desktopAccessType;
        }
        if (null !== $this->enableInternetAccess) {
            $res['EnableInternetAccess'] = $this->enableInternetAccess;
        }
        if (null !== $this->subDomainName) {
            $res['SubDomainName'] = $this->subDomainName;
        }
        if (null !== $this->mfaEnabled) {
            $res['MfaEnabled'] = $this->mfaEnabled;
        }
        if (null !== $this->dnsAddress) {
            $res['DnsAddress'] = $this->dnsAddress;
        }
        if (null !== $this->subDomainDnsAddress) {
            $res['SubDomainDnsAddress'] = $this->subDomainDnsAddress;
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
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['CidrBlock'])) {
            $model->cidrBlock = $map['CidrBlock'];
        }
        if (isset($map['CenId'])) {
            $model->cenId = $map['CenId'];
        }
        if (isset($map['Bandwidth'])) {
            $model->bandwidth = $map['Bandwidth'];
        }
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }
        if (isset($map['DomainUserName'])) {
            $model->domainUserName = $map['DomainUserName'];
        }
        if (isset($map['DomainPassword'])) {
            $model->domainPassword = $map['DomainPassword'];
        }
        if (isset($map['OfficeSiteName'])) {
            $model->officeSiteName = $map['OfficeSiteName'];
        }
        if (isset($map['EnableAdminAccess'])) {
            $model->enableAdminAccess = $map['EnableAdminAccess'];
        }
        if (isset($map['DesktopAccessType'])) {
            $model->desktopAccessType = $map['DesktopAccessType'];
        }
        if (isset($map['EnableInternetAccess'])) {
            $model->enableInternetAccess = $map['EnableInternetAccess'];
        }
        if (isset($map['SubDomainName'])) {
            $model->subDomainName = $map['SubDomainName'];
        }
        if (isset($map['MfaEnabled'])) {
            $model->mfaEnabled = $map['MfaEnabled'];
        }
        if (isset($map['DnsAddress'])) {
            if (!empty($map['DnsAddress'])) {
                $model->dnsAddress = $map['DnsAddress'];
            }
        }
        if (isset($map['SubDomainDnsAddress'])) {
            if (!empty($map['SubDomainDnsAddress'])) {
                $model->subDomainDnsAddress = $map['SubDomainDnsAddress'];
            }
        }

        return $model;
    }
}
