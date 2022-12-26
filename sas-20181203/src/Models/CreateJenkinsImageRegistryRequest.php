<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class CreateJenkinsImageRegistryRequest extends Model
{
    /**
     * @example example.com
     *
     * @var string
     */
    public $domainName;

    /**
     * @example [{\"namespace\":\"aa\",\"authToken\":\"aa\"}]
     *
     * @var string
     */
    public $extraParam;

    /**
     * @example 1
     *
     * @var int
     */
    public $netType;

    /**
     * @example Harbor********
     *
     * @var string
     */
    public $password;

    /**
     * @example 30
     *
     * @var int
     */
    public $persistenceDay;

    /**
     * @example 1
     *
     * @var int
     */
    public $protocolType;

    /**
     * @example cn-shanghai
     *
     * @var string
     */
    public $regionId;

    /**
     * @example 114.55.XXX.XXX
     *
     * @var string
     */
    public $registryHostIp;

    /**
     * @example testRepo
     *
     * @var string
     */
    public $registryName;

    /**
     * @example CI/CD
     *
     * @var string
     */
    public $registryType;

    /**
     * @example V1
     *
     * @var string
     */
    public $registryVersion;

    /**
     * @example 41.121.XXX.XXX
     *
     * @var string
     */
    public $sourceIp;

    /**
     * @example 30
     *
     * @var int
     */
    public $transPerHour;

    /**
     * @example RegistryUser
     *
     * @var string
     */
    public $userName;

    /**
     * @example vpc-2ze4aoqgeu51ydfb8****
     *
     * @var string
     */
    public $vpcId;

    /**
     * @example 192.168.XXX.XXX
     *
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

    /**
     * @param array $map
     *
     * @return CreateJenkinsImageRegistryRequest
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
