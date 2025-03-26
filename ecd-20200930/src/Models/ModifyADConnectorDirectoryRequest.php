<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Dara\Model;

class ModifyADConnectorDirectoryRequest extends Model
{
    /**
     * @var string
     */
    public $adHostname;

    /**
     * @var string
     */
    public $directoryId;

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
    public $mfaEnabled;

    /**
     * @var string
     */
    public $OUName;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string[]
     */
    public $subDomainDnsAddress;

    /**
     * @var string
     */
    public $subDomainName;
    protected $_name = [
        'adHostname' => 'AdHostname',
        'directoryId' => 'DirectoryId',
        'directoryName' => 'DirectoryName',
        'dnsAddress' => 'DnsAddress',
        'domainName' => 'DomainName',
        'domainPassword' => 'DomainPassword',
        'domainUserName' => 'DomainUserName',
        'mfaEnabled' => 'MfaEnabled',
        'OUName' => 'OUName',
        'regionId' => 'RegionId',
        'subDomainDnsAddress' => 'SubDomainDnsAddress',
        'subDomainName' => 'SubDomainName',
    ];

    public function validate()
    {
        if (\is_array($this->dnsAddress)) {
            Model::validateArray($this->dnsAddress);
        }
        if (\is_array($this->subDomainDnsAddress)) {
            Model::validateArray($this->subDomainDnsAddress);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->adHostname) {
            $res['AdHostname'] = $this->adHostname;
        }

        if (null !== $this->directoryId) {
            $res['DirectoryId'] = $this->directoryId;
        }

        if (null !== $this->directoryName) {
            $res['DirectoryName'] = $this->directoryName;
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

        if (null !== $this->mfaEnabled) {
            $res['MfaEnabled'] = $this->mfaEnabled;
        }

        if (null !== $this->OUName) {
            $res['OUName'] = $this->OUName;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
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

        if (isset($map['DirectoryId'])) {
            $model->directoryId = $map['DirectoryId'];
        }

        if (isset($map['DirectoryName'])) {
            $model->directoryName = $map['DirectoryName'];
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

        if (isset($map['MfaEnabled'])) {
            $model->mfaEnabled = $map['MfaEnabled'];
        }

        if (isset($map['OUName'])) {
            $model->OUName = $map['OUName'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
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

        return $model;
    }
}
