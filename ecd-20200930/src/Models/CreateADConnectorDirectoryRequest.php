<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Tea\Model;

class CreateADConnectorDirectoryRequest extends Model
{
    /**
     * @var string
     */
    public $regionId;

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
     * @var string[]
     */
    public $dnsAddress;

    /**
     * @var string[]
     */
    public $vSwitchId;

    /**
     * @var string
     */
    public $directoryName;
    protected $_name = [
        'regionId'       => 'RegionId',
        'domainName'     => 'DomainName',
        'domainUserName' => 'DomainUserName',
        'domainPassword' => 'DomainPassword',
        'dnsAddress'     => 'DnsAddress',
        'vSwitchId'      => 'VSwitchId',
        'directoryName'  => 'DirectoryName',
    ];

    public function validate()
    {
        Model::validateRequired('regionId', $this->regionId, true);
        Model::validateRequired('domainName', $this->domainName, true);
        Model::validateRequired('domainUserName', $this->domainUserName, true);
        Model::validateRequired('domainPassword', $this->domainPassword, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
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
        if (null !== $this->dnsAddress) {
            $res['DnsAddress'] = $this->dnsAddress;
        }
        if (null !== $this->vSwitchId) {
            $res['VSwitchId'] = $this->vSwitchId;
        }
        if (null !== $this->directoryName) {
            $res['DirectoryName'] = $this->directoryName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateADConnectorDirectoryRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
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
        if (isset($map['DnsAddress'])) {
            if (!empty($map['DnsAddress'])) {
                $model->dnsAddress = $map['DnsAddress'];
            }
        }
        if (isset($map['VSwitchId'])) {
            if (!empty($map['VSwitchId'])) {
                $model->vSwitchId = $map['VSwitchId'];
            }
        }
        if (isset($map['DirectoryName'])) {
            $model->directoryName = $map['DirectoryName'];
        }

        return $model;
    }
}
