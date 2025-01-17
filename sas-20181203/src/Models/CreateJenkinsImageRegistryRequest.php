<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;

class CreateJenkinsImageRegistryRequest extends Model
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
    public $persistenceDay;
    /**
     * @var int
     */
    public $protocolType;
    /**
     * @var string
     */
    public $regionId;
    /**
     * @var string
     */
    public $registryHostIp;
    /**
     * @var string
     */
    public $registryName;
    /**
     * @var string
     */
    public $registryType;
    /**
     * @var string
     */
    public $registryVersion;
    /**
     * @var string
     */
    public $sourceIp;
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
    /**
     * @var string
     */
    public $whiteList;
    protected $_name = [
        'domainName'      => 'DomainName',
        'extraParam'      => 'ExtraParam',
        'netType'         => 'NetType',
        'password'        => 'Password',
        'persistenceDay'  => 'PersistenceDay',
        'protocolType'    => 'ProtocolType',
        'regionId'        => 'RegionId',
        'registryHostIp'  => 'RegistryHostIp',
        'registryName'    => 'RegistryName',
        'registryType'    => 'RegistryType',
        'registryVersion' => 'RegistryVersion',
        'sourceIp'        => 'SourceIp',
        'transPerHour'    => 'TransPerHour',
        'userName'        => 'UserName',
        'vpcId'           => 'VpcId',
        'whiteList'       => 'WhiteList',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

        if (null !== $this->persistenceDay) {
            $res['PersistenceDay'] = $this->persistenceDay;
        }

        if (null !== $this->protocolType) {
            $res['ProtocolType'] = $this->protocolType;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->registryHostIp) {
            $res['RegistryHostIp'] = $this->registryHostIp;
        }

        if (null !== $this->registryName) {
            $res['RegistryName'] = $this->registryName;
        }

        if (null !== $this->registryType) {
            $res['RegistryType'] = $this->registryType;
        }

        if (null !== $this->registryVersion) {
            $res['RegistryVersion'] = $this->registryVersion;
        }

        if (null !== $this->sourceIp) {
            $res['SourceIp'] = $this->sourceIp;
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

        if (null !== $this->whiteList) {
            $res['WhiteList'] = $this->whiteList;
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

        if (isset($map['PersistenceDay'])) {
            $model->persistenceDay = $map['PersistenceDay'];
        }

        if (isset($map['ProtocolType'])) {
            $model->protocolType = $map['ProtocolType'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['RegistryHostIp'])) {
            $model->registryHostIp = $map['RegistryHostIp'];
        }

        if (isset($map['RegistryName'])) {
            $model->registryName = $map['RegistryName'];
        }

        if (isset($map['RegistryType'])) {
            $model->registryType = $map['RegistryType'];
        }

        if (isset($map['RegistryVersion'])) {
            $model->registryVersion = $map['RegistryVersion'];
        }

        if (isset($map['SourceIp'])) {
            $model->sourceIp = $map['SourceIp'];
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

        if (isset($map['WhiteList'])) {
            $model->whiteList = $map['WhiteList'];
        }

        return $model;
    }
}
