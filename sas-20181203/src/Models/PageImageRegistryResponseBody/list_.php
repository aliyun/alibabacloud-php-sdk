<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\PageImageRegistryResponseBody;

use AlibabaCloud\Tea\Model;

class list_ extends Model
{
    /**
     * @description The blacklist.
     *
     * @example 129.211.XXX.XXX
     *
     * @var string
     */
    public $blackList;

    /**
     * @description The domain name of the image repository.
     *
     * @example sinochem.com
     *
     * @var string
     */
    public $domainName;

    /**
     * @description The creation time. The time is in the yyyy-MM-dd HH:mm:ss format.
     *
     * @example 2022-08-30 10:23:30
     *
     * @var string
     */
    public $gmtCreate;

    /**
     * @description The update time. The time is in the yyyy-MM-dd HH:mm:ss format.
     *
     * @example 2022-09-30 10:23:30
     *
     * @var string
     */
    public $gmtModified;

    /**
     * @description The ID of the image repository.
     *
     * @example 1078312
     *
     * @var int
     */
    public $id;

    /**
     * @description The number of images that are stored in the image repository.
     *
     * @example 1
     *
     * @var int
     */
    public $imageCount;

    /**
     * @description The information about the Jenkins environment.
     *
     * @example projectInfo
     *
     * @var string
     */
    public $jenkinsEnv;

    /**
     * @description The network type. Valid values:
     *
     *   **1**: Internet
     *   **2**: Virtual Private Cloud (VPC)
     *
     * @example 1
     *
     * @var int
     */
    public $netType;

    /**
     * @description The password.
     *
     * @example Harbor******
     *
     * @var string
     */
    public $password;

    /**
     * @description The number of days during which assets can be retained.
     *
     * @example 30
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
     * @example 39.104.XXX.XXX
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
     * @description The authentication token of the user.
     *
     * @example c7b90d29-632f-4e58-88b8-00ad77f6****
     *
     * @var string
     */
    public $token;

    /**
     * @description The number of scan tasks that are performed per hour.
     *
     * @example 30
     *
     * @var int
     */
    public $transPerHour;

    /**
     * @description The username.
     *
     * @example RegistryUser
     *
     * @var string
     */
    public $userName;

    /**
     * @description The ID of the VPC.
     *
     * @example vpc-5gu8iu68w9b472jbb****
     *
     * @var string
     */
    public $vpcId;

    /**
     * @description The whitelist.
     *
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
        'imageCount'     => 'ImageCount',
        'jenkinsEnv'     => 'JenkinsEnv',
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
        if (null !== $this->imageCount) {
            $res['ImageCount'] = $this->imageCount;
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
     * @return list_
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
        if (isset($map['ImageCount'])) {
            $model->imageCount = $map['ImageCount'];
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
