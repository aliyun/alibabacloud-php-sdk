<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\Tea\Model;

class DescribeGtmInstanceResponseBody extends Model
{
    /**
     * @description The number of access policies of the GTM instance.
     *
     * @example 5
     *
     * @var int
     */
    public $accessStrategyNum;

    /**
     * @description The number of address pools of the GTM instance.
     *
     * @example 5
     *
     * @var int
     */
    public $addressPoolNum;

    /**
     * @description The alert group of the GTM instance.
     *
     * @example \[\\"Daily test - R\&D group\\"]
     *
     * @var string
     */
    public $alertGroup;

    /**
     * @description The domain name of the GTM instance to which the service domain name is mapped by using a CNAME record.
     *
     * @example instance1.14.com
     *
     * @var string
     */
    public $cname;

    /**
     * @description Indicates whether the CNAME is a custom domain name or is assigned by the system. Valid values:
     *
     *   **SYSTEM_ASSIGN**
     *   **CUSTOM**
     *
     * @example SYSTEM_ASSIGN
     *
     * @var string
     */
    public $cnameMode;

    /**
     * @description The time when the GTM instance was created.
     *
     * @example 2018-06-06T11:34Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @description The timestamp that indicates the time when the GTM instance was created.
     *
     * @example 1528284856000
     *
     * @var int
     */
    public $createTimestamp;

    /**
     * @description The time when the GTM instance expires.
     *
     * @example 2018-06-06T11:34Z
     *
     * @var string
     */
    public $expireTime;

    /**
     * @description The timestamp that indicates the time when the GTM instance expires.
     *
     * @example 1528284856000
     *
     * @var int
     */
    public $expireTimestamp;

    /**
     * @description The ID of the GTM instance.
     *
     * @example instance1
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The name of the GTM instance.
     *
     * @example test
     *
     * @var string
     */
    public $instanceName;

    /**
     * @description The load balancing policy. Valid values:
     *
     *   **ALL_RR**: round robin
     *   **RATIO**: weighted round-robin
     *
     * @example RATIO
     *
     * @var string
     */
    public $lbaStrategy;

    /**
     * @description The ID of the request.
     *
     * @example E41AA251-F9BA-48C6-99B2-2B82B26A573A
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The ID of the resource group.
     *
     * @example rg-testgroupid
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
     * @description The domain name of the application.
     *
     * @example www.example.com
     *
     * @var string
     */
    public $userDomainName;

    /**
     * @description The version code.
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
        'requestId'         => 'RequestId',
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
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
     * @return DescribeGtmInstanceResponseBody
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
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
