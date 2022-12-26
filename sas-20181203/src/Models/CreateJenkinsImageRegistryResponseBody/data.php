<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\CreateJenkinsImageRegistryResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example 61.9.XXX.XXX
     *
     * @var string
     */
    public $blackList;

    /**
     * @example example.com
     *
     * @var string
     */
    public $domainName;

    /**
     * @example 2022-10-16 18:17:16
     *
     * @var string
     */
    public $gmtCreate;

    /**
     * @example 2022-11-21 10:40:01
     *
     * @var string
     */
    public $gmtModified;

    /**
     * @example 443496
     *
     * @var int
     */
    public $id;

    /**
     * @example 1
     *
     * @var int
     */
    public $netType;

    /**
     * @example Harbor******
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
     * @example 1.13.XXX.XXX
     *
     * @var string
     */
    public $registryHostIp;

    /**
     * @example fanyi
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
     * @example 3c3c602c-fa1f-4bc0-992f-b4b2cac7****
     *
     * @var string
     */
    public $token;

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
     * @example vpc-2vchkxmf2j9yjt3x2****
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
        'blackList'      => 'BlackList',
        'domainName'     => 'DomainName',
        'gmtCreate'      => 'GmtCreate',
        'gmtModified'    => 'GmtModified',
        'id'             => 'Id',
        'netType'        => 'NetType',
        'password'       => 'Password',
        'persistenceDay' => 'PersistenceDay',
        'protocolType'   => 'ProtocolType',
        'regionId'       => 'RegionId',
        'registryHostIp' => 'RegistryHostIp',
        'registryName'   => 'RegistryName',
        'registryType'   => 'RegistryType',
        'token'          => 'Token',
        'transPerHour'   => 'TransPerHour',
        'userName'       => 'UserName',
        'vpcId'          => 'VpcId',
        'whiteList'      => 'WhiteList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->blackList) {
            $res['BlackList'] = $this->blackList;
        }
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
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
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BlackList'])) {
            $model->blackList = $map['BlackList'];
        }
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
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
