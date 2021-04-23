<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Videosearch\V20200225\Models\GetAudioInstanceResponse;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $instanceName;

    /**
     * @var int
     */
    public $createTime;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var int
     */
    public $instanceStatus;

    /**
     * @var int
     */
    public $audioNumber;

    /**
     * @var int
     */
    public $expireTime;

    /**
     * @var int
     */
    public $concurrencyNumber;

    /**
     * @var string
     */
    public $maxAudioCapacity;

    /**
     * @var string
     */
    public $currentAudioCapacity;

    /**
     * @var int
     */
    public $audioInfoUpdateTime;

    /**
     * @var string
     */
    public $bundlingType;
    protected $_name = [
        'instanceId'           => 'InstanceId',
        'instanceName'         => 'InstanceName',
        'createTime'           => 'CreateTime',
        'regionId'             => 'RegionId',
        'instanceStatus'       => 'InstanceStatus',
        'audioNumber'          => 'AudioNumber',
        'expireTime'           => 'ExpireTime',
        'concurrencyNumber'    => 'ConcurrencyNumber',
        'maxAudioCapacity'     => 'MaxAudioCapacity',
        'currentAudioCapacity' => 'CurrentAudioCapacity',
        'audioInfoUpdateTime'  => 'AudioInfoUpdateTime',
        'bundlingType'         => 'BundlingType',
    ];

    public function validate()
    {
        Model::validateRequired('instanceId', $this->instanceId, true);
        Model::validateRequired('instanceName', $this->instanceName, true);
        Model::validateRequired('createTime', $this->createTime, true);
        Model::validateRequired('regionId', $this->regionId, true);
        Model::validateRequired('instanceStatus', $this->instanceStatus, true);
        Model::validateRequired('audioNumber', $this->audioNumber, true);
        Model::validateRequired('expireTime', $this->expireTime, true);
        Model::validateRequired('concurrencyNumber', $this->concurrencyNumber, true);
        Model::validateRequired('maxAudioCapacity', $this->maxAudioCapacity, true);
        Model::validateRequired('currentAudioCapacity', $this->currentAudioCapacity, true);
        Model::validateRequired('audioInfoUpdateTime', $this->audioInfoUpdateTime, true);
        Model::validateRequired('bundlingType', $this->bundlingType, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->instanceStatus) {
            $res['InstanceStatus'] = $this->instanceStatus;
        }
        if (null !== $this->audioNumber) {
            $res['AudioNumber'] = $this->audioNumber;
        }
        if (null !== $this->expireTime) {
            $res['ExpireTime'] = $this->expireTime;
        }
        if (null !== $this->concurrencyNumber) {
            $res['ConcurrencyNumber'] = $this->concurrencyNumber;
        }
        if (null !== $this->maxAudioCapacity) {
            $res['MaxAudioCapacity'] = $this->maxAudioCapacity;
        }
        if (null !== $this->currentAudioCapacity) {
            $res['CurrentAudioCapacity'] = $this->currentAudioCapacity;
        }
        if (null !== $this->audioInfoUpdateTime) {
            $res['AudioInfoUpdateTime'] = $this->audioInfoUpdateTime;
        }
        if (null !== $this->bundlingType) {
            $res['BundlingType'] = $this->bundlingType;
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
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['InstanceStatus'])) {
            $model->instanceStatus = $map['InstanceStatus'];
        }
        if (isset($map['AudioNumber'])) {
            $model->audioNumber = $map['AudioNumber'];
        }
        if (isset($map['ExpireTime'])) {
            $model->expireTime = $map['ExpireTime'];
        }
        if (isset($map['ConcurrencyNumber'])) {
            $model->concurrencyNumber = $map['ConcurrencyNumber'];
        }
        if (isset($map['MaxAudioCapacity'])) {
            $model->maxAudioCapacity = $map['MaxAudioCapacity'];
        }
        if (isset($map['CurrentAudioCapacity'])) {
            $model->currentAudioCapacity = $map['CurrentAudioCapacity'];
        }
        if (isset($map['AudioInfoUpdateTime'])) {
            $model->audioInfoUpdateTime = $map['AudioInfoUpdateTime'];
        }
        if (isset($map['BundlingType'])) {
            $model->bundlingType = $map['BundlingType'];
        }

        return $model;
    }
}
