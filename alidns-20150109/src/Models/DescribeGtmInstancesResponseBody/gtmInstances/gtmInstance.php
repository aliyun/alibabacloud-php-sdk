<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeGtmInstancesResponseBody\gtmInstances;

use AlibabaCloud\Tea\Model;

class gtmInstance extends Model
{
    /**
     * @var string
     */
    public $expireTime;

    /**
     * @var int
     */
    public $accessStrategyNum;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $cnameMode;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var int
     */
    public $expireTimestamp;

    /**
     * @var int
     */
    public $ttl;

    /**
     * @var string
     */
    public $alertGroup;

    /**
     * @var int
     */
    public $addressPoolNum;

    /**
     * @var string
     */
    public $instanceName;

    /**
     * @var string
     */
    public $lbaStrategy;

    /**
     * @var string
     */
    public $cname;

    /**
     * @var string
     */
    public $versionCode;

    /**
     * @var string
     */
    public $userDomainName;

    /**
     * @var int
     */
    public $createTimestamp;
    protected $_name = [
        'expireTime'        => 'ExpireTime',
        'accessStrategyNum' => 'AccessStrategyNum',
        'createTime'        => 'CreateTime',
        'cnameMode'         => 'CnameMode',
        'instanceId'        => 'InstanceId',
        'expireTimestamp'   => 'ExpireTimestamp',
        'ttl'               => 'Ttl',
        'alertGroup'        => 'AlertGroup',
        'addressPoolNum'    => 'AddressPoolNum',
        'instanceName'      => 'InstanceName',
        'lbaStrategy'       => 'LbaStrategy',
        'cname'             => 'Cname',
        'versionCode'       => 'VersionCode',
        'userDomainName'    => 'UserDomainName',
        'createTimestamp'   => 'CreateTimestamp',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->expireTime) {
            $res['ExpireTime'] = $this->expireTime;
        }
        if (null !== $this->accessStrategyNum) {
            $res['AccessStrategyNum'] = $this->accessStrategyNum;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->cnameMode) {
            $res['CnameMode'] = $this->cnameMode;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->expireTimestamp) {
            $res['ExpireTimestamp'] = $this->expireTimestamp;
        }
        if (null !== $this->ttl) {
            $res['Ttl'] = $this->ttl;
        }
        if (null !== $this->alertGroup) {
            $res['AlertGroup'] = $this->alertGroup;
        }
        if (null !== $this->addressPoolNum) {
            $res['AddressPoolNum'] = $this->addressPoolNum;
        }
        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }
        if (null !== $this->lbaStrategy) {
            $res['LbaStrategy'] = $this->lbaStrategy;
        }
        if (null !== $this->cname) {
            $res['Cname'] = $this->cname;
        }
        if (null !== $this->versionCode) {
            $res['VersionCode'] = $this->versionCode;
        }
        if (null !== $this->userDomainName) {
            $res['UserDomainName'] = $this->userDomainName;
        }
        if (null !== $this->createTimestamp) {
            $res['CreateTimestamp'] = $this->createTimestamp;
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
        if (isset($map['ExpireTime'])) {
            $model->expireTime = $map['ExpireTime'];
        }
        if (isset($map['AccessStrategyNum'])) {
            $model->accessStrategyNum = $map['AccessStrategyNum'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['CnameMode'])) {
            $model->cnameMode = $map['CnameMode'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['ExpireTimestamp'])) {
            $model->expireTimestamp = $map['ExpireTimestamp'];
        }
        if (isset($map['Ttl'])) {
            $model->ttl = $map['Ttl'];
        }
        if (isset($map['AlertGroup'])) {
            $model->alertGroup = $map['AlertGroup'];
        }
        if (isset($map['AddressPoolNum'])) {
            $model->addressPoolNum = $map['AddressPoolNum'];
        }
        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }
        if (isset($map['LbaStrategy'])) {
            $model->lbaStrategy = $map['LbaStrategy'];
        }
        if (isset($map['Cname'])) {
            $model->cname = $map['Cname'];
        }
        if (isset($map['VersionCode'])) {
            $model->versionCode = $map['VersionCode'];
        }
        if (isset($map['UserDomainName'])) {
            $model->userDomainName = $map['UserDomainName'];
        }
        if (isset($map['CreateTimestamp'])) {
            $model->createTimestamp = $map['CreateTimestamp'];
        }

        return $model;
    }
}
