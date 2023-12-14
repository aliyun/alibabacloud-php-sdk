<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Videosearch\V20200225\Models\GetAudioInstanceResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example 1618396147
     *
     * @var int
     */
    public $audioInfoUpdateTime;

    /**
     * @example 123
     *
     * @var int
     */
    public $audioNumber;

    /**
     * @example PREPAY
     *
     * @var string
     */
    public $bundlingType;

    /**
     * @example 1
     *
     * @var int
     */
    public $concurrencyNumber;

    /**
     * @example 1618396147
     *
     * @var int
     */
    public $createTime;

    /**
     * @example 1
     *
     * @var string
     */
    public $currentAudioCapacity;

    /**
     * @example 1618396147
     *
     * @var int
     */
    public $expireTime;

    /**
     * @example 123
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example test
     *
     * @var string
     */
    public $instanceName;

    /**
     * @example 1
     *
     * @var int
     */
    public $instanceStatus;

    /**
     * @example 1
     *
     * @var string
     */
    public $maxAudioCapacity;

    /**
     * @example 123
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'audioInfoUpdateTime'  => 'AudioInfoUpdateTime',
        'audioNumber'          => 'AudioNumber',
        'bundlingType'         => 'BundlingType',
        'concurrencyNumber'    => 'ConcurrencyNumber',
        'createTime'           => 'CreateTime',
        'currentAudioCapacity' => 'CurrentAudioCapacity',
        'expireTime'           => 'ExpireTime',
        'instanceId'           => 'InstanceId',
        'instanceName'         => 'InstanceName',
        'instanceStatus'       => 'InstanceStatus',
        'maxAudioCapacity'     => 'MaxAudioCapacity',
        'regionId'             => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->audioInfoUpdateTime) {
            $res['AudioInfoUpdateTime'] = $this->audioInfoUpdateTime;
        }
        if (null !== $this->audioNumber) {
            $res['AudioNumber'] = $this->audioNumber;
        }
        if (null !== $this->bundlingType) {
            $res['BundlingType'] = $this->bundlingType;
        }
        if (null !== $this->concurrencyNumber) {
            $res['ConcurrencyNumber'] = $this->concurrencyNumber;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->currentAudioCapacity) {
            $res['CurrentAudioCapacity'] = $this->currentAudioCapacity;
        }
        if (null !== $this->expireTime) {
            $res['ExpireTime'] = $this->expireTime;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }
        if (null !== $this->instanceStatus) {
            $res['InstanceStatus'] = $this->instanceStatus;
        }
        if (null !== $this->maxAudioCapacity) {
            $res['MaxAudioCapacity'] = $this->maxAudioCapacity;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
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
        if (isset($map['AudioInfoUpdateTime'])) {
            $model->audioInfoUpdateTime = $map['AudioInfoUpdateTime'];
        }
        if (isset($map['AudioNumber'])) {
            $model->audioNumber = $map['AudioNumber'];
        }
        if (isset($map['BundlingType'])) {
            $model->bundlingType = $map['BundlingType'];
        }
        if (isset($map['ConcurrencyNumber'])) {
            $model->concurrencyNumber = $map['ConcurrencyNumber'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['CurrentAudioCapacity'])) {
            $model->currentAudioCapacity = $map['CurrentAudioCapacity'];
        }
        if (isset($map['ExpireTime'])) {
            $model->expireTime = $map['ExpireTime'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }
        if (isset($map['InstanceStatus'])) {
            $model->instanceStatus = $map['InstanceStatus'];
        }
        if (isset($map['MaxAudioCapacity'])) {
            $model->maxAudioCapacity = $map['MaxAudioCapacity'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
