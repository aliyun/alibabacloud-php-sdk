<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class AddPrivateRegistryRequest extends Model
{
    /**
     * @var string
     */
    public $domainName;

    /**
     * @var string
     */
    public $extraParam;

    /**
     * @var int
     */
    public $netType;

    /**
     * @var string
     */
    public $password;

    /**
     * @var int
     */
    public $protocolType;

    /**
     * @var string
     */
    public $registryHostIp;

    /**
     * @var string
     */
    public $registryRegionId;

    /**
     * @var string
     */
    public $registryType;

    /**
     * @var string
     */
    public $registryVersion;

    /**
     * @var int
     */
    public $transPerHour;

    /**
     * @var string
     */
    public $userName;

    /**
     * @var string
     */
    public $vpcId;
    protected $_name = [
        'domainName'       => 'DomainName',
        'extraParam'       => 'ExtraParam',
        'netType'          => 'NetType',
        'password'         => 'Password',
        'protocolType'     => 'ProtocolType',
        'registryHostIp'   => 'RegistryHostIp',
        'registryRegionId' => 'RegistryRegionId',
        'registryType'     => 'RegistryType',
        'registryVersion'  => 'RegistryVersion',
        'transPerHour'     => 'TransPerHour',
        'userName'         => 'UserName',
        'vpcId'            => 'VpcId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }
        if (null !== $this->extraParam) {
            $res['ExtraParam'] = $this->extraParam;
        }
        if (null !== $this->netType) {
            $res['NetType'] = $this->netType;
        }
        if (null !== $this->password) {
            $res['Password'] = $this->password;
        }
        if (null !== $this->protocolType) {
            $res['ProtocolType'] = $this->protocolType;
        }
        if (null !== $this->registryHostIp) {
            $res['RegistryHostIp'] = $this->registryHostIp;
        }
        if (null !== $this->registryRegionId) {
            $res['RegistryRegionId'] = $this->registryRegionId;
        }
        if (null !== $this->registryType) {
            $res['RegistryType'] = $this->registryType;
        }
        if (null !== $this->registryVersion) {
            $res['RegistryVersion'] = $this->registryVersion;
        }
        if (null !== $this->transPerHour) {
            $res['TransPerHour'] = $this->transPerHour;
        }
        if (null !== $this->userName) {
            $res['UserName'] = $this->userName;
        }
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AddPrivateRegistryRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }
        if (isset($map['ExtraParam'])) {
            $model->extraParam = $map['ExtraParam'];
        }
        if (isset($map['NetType'])) {
            $model->netType = $map['NetType'];
        }
        if (isset($map['Password'])) {
            $model->password = $map['Password'];
        }
        if (isset($map['ProtocolType'])) {
            $model->protocolType = $map['ProtocolType'];
        }
        if (isset($map['RegistryHostIp'])) {
            $model->registryHostIp = $map['RegistryHostIp'];
        }
        if (isset($map['RegistryRegionId'])) {
            $model->registryRegionId = $map['RegistryRegionId'];
        }
        if (isset($map['RegistryType'])) {
            $model->registryType = $map['RegistryType'];
        }
        if (isset($map['RegistryVersion'])) {
            $model->registryVersion = $map['RegistryVersion'];
        }
        if (isset($map['TransPerHour'])) {
            $model->transPerHour = $map['TransPerHour'];
        }
        if (isset($map['UserName'])) {
            $model->userName = $map['UserName'];
        }
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }

        return $model;
    }
}
