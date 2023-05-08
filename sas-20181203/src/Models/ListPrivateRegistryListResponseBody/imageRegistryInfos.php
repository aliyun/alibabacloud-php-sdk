<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\ListPrivateRegistryListResponseBody;

use AlibabaCloud\Tea\Model;

class imageRegistryInfos extends Model
{
    /**
     * @description The ID of the user.
     *
     * @example 1766185894******
     *
     * @var int
     */
    public $aliUid;

    /**
     * @description The domain name of the image repository.
     *
     * @example example.com
     *
     * @var string
     */
    public $domainName;

    /**
     * @description The ID of the image repository.
     *
     * @example 66485
     *
     * @var int
     */
    public $id;

    /**
     * @description The information about the Jenkins environment.
     *
     * @example JenkinsInfo
     *
     * @var string
     */
    public $jenkinsEnv;

    /**
     * @description The network type. Valid values:
     *
     *   **1**: Internet
     *   **2**: VPC
     *
     * @example 1
     *
     * @var int
     */
    public $netType;

    /**
     * @description The password used to log on to the image repository.
     *
     * @example Harbor******
     *
     * @var string
     */
    public $password;

    /**
     * @description The number of days during which assets can be retained.
     *
     * @example 90
     *
     * @var int
     */
    public $persistenceDay;

    /**
     * @description The type of the protocol. Valid values:
     *
     *   **1**: HTTP
     *   **2**: HTTPS
     *
     * @example 1
     *
     * @var int
     */
    public $protocolType;

    /**
     * @description The region ID of the server.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The IP address of the image repository.
     *
     * @example 114.55.XXX.XXX
     *
     * @var string
     */
    public $registryHostIp;

    /**
     * @description The alias of the image repository.
     *
     * @example test1
     *
     * @var string
     */
    public $registryName;

    /**
     * @description The type of the image repository. Valid values:
     *
     *   **acr**: Container Registry
     *   **harbor**: Harbor
     *   **quay**: Quay
     *   **CI/CD**: Jenkins
     *
     * @example harbor
     *
     * @var string
     */
    public $registryType;

    /**
     * @description The version of the image repository. Valid values:
     *
     *   **V1**: V1.0
     *   **V2**: V2.0
     *
     * @example V1
     *
     * @var string
     */
    public $registryVersion;

    /**
     * @description The authentication token of the user.
     *
     * @example 0da12bce-cc36-4c48-b3e6-2215fc3a****
     *
     * @var string
     */
    public $token;

    /**
     * @description The number of images that can be scanned per hour.
     *
     * @example 30
     *
     * @var int
     */
    public $transPerHour;

    /**
     * @description The username used to log on to the image repository.
     *
     * @example RegistryUser
     *
     * @var string
     */
    public $userName;

    /**
     * @description The ID of the virtual private cloud (VPC).
     *
     * @example vpc-bp12897gqrex01zn0****
     *
     * @var string
     */
    public $vpcId;

    /**
     * @description The whitelist of IP addresses.
     *
     * @example 100.104.XXX.XXX
     *
     * @var string
     */
    public $whiteList;
    protected $_name = [
        'aliUid'          => 'AliUid',
        'domainName'      => 'DomainName',
        'id'              => 'Id',
        'jenkinsEnv'      => 'JenkinsEnv',
        'netType'         => 'NetType',
        'password'        => 'Password',
        'persistenceDay'  => 'PersistenceDay',
        'protocolType'    => 'ProtocolType',
        'regionId'        => 'RegionId',
        'registryHostIp'  => 'RegistryHostIp',
        'registryName'    => 'RegistryName',
        'registryType'    => 'RegistryType',
        'registryVersion' => 'RegistryVersion',
        'token'           => 'Token',
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
        if (null !== $this->aliUid) {
            $res['AliUid'] = $this->aliUid;
        }
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->jenkinsEnv) {
            $res['JenkinsEnv'] = $this->jenkinsEnv;
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
        if (null !== $this->token) {
            $res['Token'] = $this->token;
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
     * @return imageRegistryInfos
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AliUid'])) {
            $model->aliUid = $map['AliUid'];
        }
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['JenkinsEnv'])) {
            $model->jenkinsEnv = $map['JenkinsEnv'];
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
        if (isset($map['Token'])) {
            $model->token = $map['Token'];
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
