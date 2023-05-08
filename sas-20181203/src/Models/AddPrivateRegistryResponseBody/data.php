<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\AddPrivateRegistryResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The ID of the user.
     *
     * @example 1766185894104***
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
     * @example 273698***
     *
     * @var int
     */
    public $id;

    /**
     * @description The network type. Valid values:
     *
     *   **1**: Internet
     *   **2**: VPC
     *
     * @example 2
     *
     * @var int
     */
    public $netType;

    /**
     * @description The password.
     *
     * @example ***********
     *
     * @var string
     */
    public $password;

    /**
     * @description The type of the protocol. Valid values:
     *
     *   **1**: HTTP
     *   **2**: HTTPS
     *
     * @example 2
     *
     * @var int
     */
    public $protocolType;

    /**
     * @description The region ID of the image repository.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The IP address of the image repository.
     *
     * @example 114.55.**.**
     *
     * @var string
     */
    public $registryHostIp;

    /**
     * @description The type of the image repository. Valid values:
     *
     *   **harbor**
     *   **quay**
     *
     * @example harbor
     *
     * @var string
     */
    public $registryType;

    /**
     * @description The version of the image repository. Default value: -. Valid values:
     *
     *   **-**: the default version
     *   **V1**
     *   **V2**
     *
     * @example V2
     *
     * @var string
     */
    public $registryVersion;

    /**
     * @description The value of the token.
     *
     * @example 3c3c602c-fa1f-4bc0-992f-b4b2cac7****
     *
     * @var string
     */
    public $token;

    /**
     * @description The number of scan tasks that are performed per hour.
     *
     * @example 10
     *
     * @var int
     */
    public $transPerHour;

    /**
     * @description The username.
     *
     * @example ******
     *
     * @var string
     */
    public $userName;

    /**
     * @description The ID of the VPC.
     *
     * @example vpc-2vchkxmf2j9yjt3x2****
     *
     * @var string
     */
    public $vpcId;
    protected $_name = [
        'aliUid'          => 'AliUid',
        'domainName'      => 'DomainName',
        'id'              => 'Id',
        'netType'         => 'NetType',
        'password'        => 'Password',
        'protocolType'    => 'ProtocolType',
        'regionId'        => 'RegionId',
        'registryHostIp'  => 'RegistryHostIp',
        'registryType'    => 'RegistryType',
        'registryVersion' => 'RegistryVersion',
        'token'           => 'Token',
        'transPerHour'    => 'TransPerHour',
        'userName'        => 'UserName',
        'vpcId'           => 'VpcId',
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
        if (null !== $this->netType) {
            $res['NetType'] = $this->netType;
        }
        if (null !== $this->password) {
            $res['Password'] = $this->password;
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
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
        if (isset($map['NetType'])) {
            $model->netType = $map['NetType'];
        }
        if (isset($map['Password'])) {
            $model->password = $map['Password'];
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

        return $model;
    }
}
