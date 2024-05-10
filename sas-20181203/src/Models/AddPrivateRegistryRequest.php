<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class AddPrivateRegistryRequest extends Model
{
    /**
     * @description The domain name of the image repository.
     *
     * This parameter is required.
     * @example example.com
     *
     * @var string
     */
    public $domainName;

    /**
     * @description The additional parameter of the image repository. This parameter is required when you set the RegistryType parameter to **quay**. Valid values:
     *
     *   **namespace**
     *   **authToken**
     *
     * @example [{"namespace":"aa","authToken":"aa"}]
     *
     * @var string
     */
    public $extraParam;

    /**
     * @description The network type. Valid values:
     *
     *   **1**: Internet
     *   **2**: virtual private cloud (VPC)
     *
     * This parameter is required.
     * @example 2
     *
     * @var int
     */
    public $netType;

    /**
     * @description The password that is used to log on to the image repository.
     *
     * This parameter is required.
     * @example ******
     *
     * @var string
     */
    public $password;

    /**
     * @description The port number.
     *
     * @example 80
     *
     * @var int
     */
    public $port;

    /**
     * @description The type of the protocol. Valid values:
     *
     *   **1**: HTTP
     *   **2**: HTTPS
     *
     * This parameter is required.
     * @example 2
     *
     * @var int
     */
    public $protocolType;

    /**
     * @description The IP address of the image repository.
     *
     * This parameter is required.
     * @example 114.55.\*\*.**
     *
     * @var string
     */
    public $registryHostIp;

    /**
     * @description The region ID.
     *
     * This parameter is required.
     * @example cn-hangzhou
     *
     * @var string
     */
    public $registryRegionId;

    /**
     * @description The type of the private image repository. Valid values:
     *
     *   **harbor**
     *   **quay**
     *
     * This parameter is required.
     * @example harbor
     *
     * @var string
     */
    public $registryType;

    /**
     * @description The version of the image repository. Valid values:
     *
     *   **V1**
     *   **V2**
     *
     * This parameter is required.
     * @example V2
     *
     * @var string
     */
    public $registryVersion;

    /**
     * @description The number of images that are scanned per hour.
     *
     * @example 10
     *
     * @var int
     */
    public $transPerHour;

    /**
     * @description The username that is used to log on to the image repository.
     *
     * This parameter is required.
     * @example xxxxx
     *
     * @var string
     */
    public $userName;

    /**
     * @description The ID of the VPC.
     *
     * @example vpc-wz9hs3e5*******908kd
     *
     * @var string
     */
    public $vpcId;
    protected $_name = [
        'domainName'       => 'DomainName',
        'extraParam'       => 'ExtraParam',
        'netType'          => 'NetType',
        'password'         => 'Password',
        'port'             => 'Port',
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
        if (null !== $this->port) {
            $res['Port'] = $this->port;
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
        if (isset($map['Port'])) {
            $model->port = $map['Port'];
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
