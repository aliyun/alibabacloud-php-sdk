<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\Tea\Model;

class DescribeGtmInstanceResponseBody extends Model
{
    /**
     * @var int
     */
    public $expireTimestamp;

    /**
     * @var string
     */
    public $userDomainName;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $lbaStrategy;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $cnameMode;

    /**
     * @var int
     */
    public $ttl;

    /**
     * @var string
     */
    public $cname;

    /**
     * @var string
     */
    public $instanceName;

    /**
     * @var string
     */
    public $versionCode;

    /**
     * @var string
     */
    public $alertGroup;

    /**
     * @var int
     */
    public $addressPoolNum;

    /**
     * @var int
     */
    public $accessStrategyNum;

    /**
     * @var string
     */
    public $expireTime;

    /**
     * @var int
     */
    public $createTimestamp;
    protected $_name = [
        'expireTimestamp'   => 'ExpireTimestamp',
        'userDomainName'    => 'UserDomainName',
        'requestId'         => 'RequestId',
        'lbaStrategy'       => 'LbaStrategy',
        'instanceId'        => 'InstanceId',
        'createTime'        => 'CreateTime',
        'cnameMode'         => 'CnameMode',
        'ttl'               => 'Ttl',
        'cname'             => 'Cname',
        'instanceName'      => 'InstanceName',
        'versionCode'       => 'VersionCode',
        'alertGroup'        => 'AlertGroup',
        'addressPoolNum'    => 'AddressPoolNum',
        'accessStrategyNum' => 'AccessStrategyNum',
        'expireTime'        => 'ExpireTime',
        'createTimestamp'   => 'CreateTimestamp',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->expireTimestamp) {
            $res['ExpireTimestamp'] = $this->expireTimestamp;
        }
        if (null !== $this->userDomainName) {
            $res['UserDomainName'] = $this->userDomainName;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->lbaStrategy) {
            $res['LbaStrategy'] = $this->lbaStrategy;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->cnameMode) {
            $res['CnameMode'] = $this->cnameMode;
        }
        if (null !== $this->ttl) {
            $res['Ttl'] = $this->ttl;
        }
        if (null !== $this->cname) {
            $res['Cname'] = $this->cname;
        }
        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }
        if (null !== $this->versionCode) {
            $res['VersionCode'] = $this->versionCode;
        }
        if (null !== $this->alertGroup) {
            $res['AlertGroup'] = $this->alertGroup;
        }
        if (null !== $this->addressPoolNum) {
            $res['AddressPoolNum'] = $this->addressPoolNum;
        }
        if (null !== $this->accessStrategyNum) {
            $res['AccessStrategyNum'] = $this->accessStrategyNum;
        }
        if (null !== $this->expireTime) {
            $res['ExpireTime'] = $this->expireTime;
        }
        if (null !== $this->createTimestamp) {
            $res['CreateTimestamp'] = $this->createTimestamp;
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
        if (isset($map['ExpireTimestamp'])) {
            $model->expireTimestamp = $map['ExpireTimestamp'];
        }
        if (isset($map['UserDomainName'])) {
            $model->userDomainName = $map['UserDomainName'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['LbaStrategy'])) {
            $model->lbaStrategy = $map['LbaStrategy'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['CnameMode'])) {
            $model->cnameMode = $map['CnameMode'];
        }
        if (isset($map['Ttl'])) {
            $model->ttl = $map['Ttl'];
        }
        if (isset($map['Cname'])) {
            $model->cname = $map['Cname'];
        }
        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }
        if (isset($map['VersionCode'])) {
            $model->versionCode = $map['VersionCode'];
        }
        if (isset($map['AlertGroup'])) {
            $model->alertGroup = $map['AlertGroup'];
        }
        if (isset($map['AddressPoolNum'])) {
            $model->addressPoolNum = $map['AddressPoolNum'];
        }
        if (isset($map['AccessStrategyNum'])) {
            $model->accessStrategyNum = $map['AccessStrategyNum'];
        }
        if (isset($map['ExpireTime'])) {
            $model->expireTime = $map['ExpireTime'];
        }
        if (isset($map['CreateTimestamp'])) {
            $model->createTimestamp = $map['CreateTimestamp'];
        }

        return $model;
    }
}
