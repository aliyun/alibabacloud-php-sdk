<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Dara\Model;

class CreateADConnectorDirectoryRequest extends Model
{
    /**
     * @var string
     */
    public $desktopAccessType;

    /**
     * @var string
     */
    public $directoryName;

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
    public $mfaEnabled;

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
    protected $_name = [
        'desktopAccessType' => 'DesktopAccessType',
        'directoryName' => 'DirectoryName',
        'dnsAddress' => 'DnsAddress',
        'domainName' => 'DomainName',
        'domainPassword' => 'DomainPassword',
        'domainUserName' => 'DomainUserName',
        'enableAdminAccess' => 'EnableAdminAccess',
        'mfaEnabled' => 'MfaEnabled',
        'regionId' => 'RegionId',
        'specification' => 'Specification',
        'subDomainDnsAddress' => 'SubDomainDnsAddress',
        'subDomainName' => 'SubDomainName',
        'vSwitchId' => 'VSwitchId',
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
        if (null !== $this->desktopAccessType) {
            $res['DesktopAccessType'] = $this->desktopAccessType;
        }

        if (null !== $this->directoryName) {
            $res['DirectoryName'] = $this->directoryName;
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

        if (null !== $this->mfaEnabled) {
            $res['MfaEnabled'] = $this->mfaEnabled;
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
                    $res['SubDomainDnsAddress'][$n1] = $item1;
                    ++$n1;
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
                    $res['VSwitchId'][$n1] = $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['DesktopAccessType'])) {
            $model->desktopAccessType = $map['DesktopAccessType'];
        }

        if (isset($map['DirectoryName'])) {
            $model->directoryName = $map['DirectoryName'];
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

        if (isset($map['MfaEnabled'])) {
            $model->mfaEnabled = $map['MfaEnabled'];
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
                    $model->subDomainDnsAddress[$n1] = $item1;
                    ++$n1;
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
                    $model->vSwitchId[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
