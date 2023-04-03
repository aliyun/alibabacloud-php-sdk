<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeGtmInstancesResponseBody\gtmInstances;

use AlibabaCloud\Tea\Model;

class gtmInstance extends Model
{
    /**
     * @description The number of access policies.
     *
     * @example 5
     *
     * @var int
     */
    public $accessStrategyNum;

    /**
     * @description The number of address pools.
     *
     * @example 5
     *
     * @var int
     */
    public $addressPoolNum;

    /**
     * @description The name of the alert group.
     *
     * @example \[\\"R\&D group\\"]
     *
     * @var string
     */
    public $alertGroup;

    /**
     * @description The CNAME domain name that is used to access the instance.
     *
     * @example instance1.14.com
     *
     * @var string
     */
    public $cname;

    /**
     * @description The CNAME domain name used to access the instance. Valid values:
     *
     *   **SYSTEM_ASSIGN**: A CNAME domain name assigned by the system is used.
     *   **CUSTOM**: A custom CNAME domain name is used.
     *
     * @example SYSTEM_ASSIGN
     *
     * @var string
     */
    public $cnameMode;

    /**
     * @description The time when the instance was created.
     *
     * @example 2018-06-06T11:34Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @description The UNIX timestamp that indicates when the instance was created.
     *
     * @example 1528284856000
     *
     * @var int
     */
    public $createTimestamp;

    /**
     * @description The time when the instance expires.
     *
     * @example 2018-06-06T11:34Z
     *
     * @var string
     */
    public $expireTime;

    /**
     * @description The UNIX timestamp that indicates when the instance expires.
     *
     * @example 1528284856000
     *
     * @var int
     */
    public $expireTimestamp;

    /**
     * @description The ID of the instance.
     *
     * @example instance1
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The name of the instance.
     *
     * @example test
     *
     * @var string
     */
    public $instanceName;

    /**
     * @description The load balancing policy that is used. Valid values:
     *
     *   **ALL_RR**: Load balancing
     *   **RATIO**: Weighted round-robin
     *
     * @example RATIO
     *
     * @var string
     */
    public $lbaStrategy;

    /**
     * @description The ID of the resource group to which the instance belongs.
     *
     * @example rg-acfm2q2jqpjh***
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The global time to live (TTL).
     *
     * @example 60
     *
     * @var int
     */
    public $ttl;

    /**
     * @description The domain name of the user.
     *
     * @example www.example.com
     *
     * @var string
     */
    public $userDomainName;

    /**
     * @description The version code of the instance.
     *
     * @example biaozhun
     *
     * @var string
     */
    public $versionCode;
    protected $_name = [
        'accessStrategyNum' => 'AccessStrategyNum',
        'addressPoolNum'    => 'AddressPoolNum',
        'alertGroup'        => 'AlertGroup',
        'cname'             => 'Cname',
        'cnameMode'         => 'CnameMode',
        'createTime'        => 'CreateTime',
        'createTimestamp'   => 'CreateTimestamp',
        'expireTime'        => 'ExpireTime',
        'expireTimestamp'   => 'ExpireTimestamp',
        'instanceId'        => 'InstanceId',
        'instanceName'      => 'InstanceName',
        'lbaStrategy'       => 'LbaStrategy',
        'resourceGroupId'   => 'ResourceGroupId',
        'ttl'               => 'Ttl',
        'userDomainName'    => 'UserDomainName',
        'versionCode'       => 'VersionCode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accessStrategyNum) {
            $res['AccessStrategyNum'] = $this->accessStrategyNum;
        }
        if (null !== $this->addressPoolNum) {
            $res['AddressPoolNum'] = $this->addressPoolNum;
        }
        if (null !== $this->alertGroup) {
            $res['AlertGroup'] = $this->alertGroup;
        }
        if (null !== $this->cname) {
            $res['Cname'] = $this->cname;
        }
        if (null !== $this->cnameMode) {
            $res['CnameMode'] = $this->cnameMode;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->createTimestamp) {
            $res['CreateTimestamp'] = $this->createTimestamp;
        }
        if (null !== $this->expireTime) {
            $res['ExpireTime'] = $this->expireTime;
        }
        if (null !== $this->expireTimestamp) {
            $res['ExpireTimestamp'] = $this->expireTimestamp;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }
        if (null !== $this->lbaStrategy) {
            $res['LbaStrategy'] = $this->lbaStrategy;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->ttl) {
            $res['Ttl'] = $this->ttl;
        }
        if (null !== $this->userDomainName) {
            $res['UserDomainName'] = $this->userDomainName;
        }
        if (null !== $this->versionCode) {
            $res['VersionCode'] = $this->versionCode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return gtmInstance
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccessStrategyNum'])) {
            $model->accessStrategyNum = $map['AccessStrategyNum'];
        }
        if (isset($map['AddressPoolNum'])) {
            $model->addressPoolNum = $map['AddressPoolNum'];
        }
        if (isset($map['AlertGroup'])) {
            $model->alertGroup = $map['AlertGroup'];
        }
        if (isset($map['Cname'])) {
            $model->cname = $map['Cname'];
        }
        if (isset($map['CnameMode'])) {
            $model->cnameMode = $map['CnameMode'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['CreateTimestamp'])) {
            $model->createTimestamp = $map['CreateTimestamp'];
        }
        if (isset($map['ExpireTime'])) {
            $model->expireTime = $map['ExpireTime'];
        }
        if (isset($map['ExpireTimestamp'])) {
            $model->expireTimestamp = $map['ExpireTimestamp'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }
        if (isset($map['LbaStrategy'])) {
            $model->lbaStrategy = $map['LbaStrategy'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['Ttl'])) {
            $model->ttl = $map['Ttl'];
        }
        if (isset($map['UserDomainName'])) {
            $model->userDomainName = $map['UserDomainName'];
        }
        if (isset($map['VersionCode'])) {
            $model->versionCode = $map['VersionCode'];
        }

        return $model;
    }
}
