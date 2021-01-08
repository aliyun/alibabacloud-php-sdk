<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Videosearch\V20200225\Models\GetInstanceResponse;

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
    public $videoNumber;

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
    public $maxVideoCapacity;

    /**
     * @var string
     */
    public $currentVideoCapacity;

    /**
     * @var int
     */
    public $videoInfoUpdateTime;

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
        'videoNumber'          => 'VideoNumber',
        'expireTime'           => 'ExpireTime',
        'concurrencyNumber'    => 'ConcurrencyNumber',
        'maxVideoCapacity'     => 'MaxVideoCapacity',
        'currentVideoCapacity' => 'CurrentVideoCapacity',
        'videoInfoUpdateTime'  => 'VideoInfoUpdateTime',
        'bundlingType'         => 'BundlingType',
    ];

    public function validate()
    {
        Model::validateRequired('instanceId', $this->instanceId, true);
        Model::validateRequired('instanceName', $this->instanceName, true);
        Model::validateRequired('createTime', $this->createTime, true);
        Model::validateRequired('regionId', $this->regionId, true);
        Model::validateRequired('instanceStatus', $this->instanceStatus, true);
        Model::validateRequired('videoNumber', $this->videoNumber, true);
        Model::validateRequired('expireTime', $this->expireTime, true);
        Model::validateRequired('concurrencyNumber', $this->concurrencyNumber, true);
        Model::validateRequired('maxVideoCapacity', $this->maxVideoCapacity, true);
        Model::validateRequired('currentVideoCapacity', $this->currentVideoCapacity, true);
        Model::validateRequired('videoInfoUpdateTime', $this->videoInfoUpdateTime, true);
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
        if (null !== $this->videoNumber) {
            $res['VideoNumber'] = $this->videoNumber;
        }
        if (null !== $this->expireTime) {
            $res['ExpireTime'] = $this->expireTime;
        }
        if (null !== $this->concurrencyNumber) {
            $res['ConcurrencyNumber'] = $this->concurrencyNumber;
        }
        if (null !== $this->maxVideoCapacity) {
            $res['MaxVideoCapacity'] = $this->maxVideoCapacity;
        }
        if (null !== $this->currentVideoCapacity) {
            $res['CurrentVideoCapacity'] = $this->currentVideoCapacity;
        }
        if (null !== $this->videoInfoUpdateTime) {
            $res['VideoInfoUpdateTime'] = $this->videoInfoUpdateTime;
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
        if (isset($map['VideoNumber'])) {
            $model->videoNumber = $map['VideoNumber'];
        }
        if (isset($map['ExpireTime'])) {
            $model->expireTime = $map['ExpireTime'];
        }
        if (isset($map['ConcurrencyNumber'])) {
            $model->concurrencyNumber = $map['ConcurrencyNumber'];
        }
        if (isset($map['MaxVideoCapacity'])) {
            $model->maxVideoCapacity = $map['MaxVideoCapacity'];
        }
        if (isset($map['CurrentVideoCapacity'])) {
            $model->currentVideoCapacity = $map['CurrentVideoCapacity'];
        }
        if (isset($map['VideoInfoUpdateTime'])) {
            $model->videoInfoUpdateTime = $map['VideoInfoUpdateTime'];
        }
        if (isset($map['BundlingType'])) {
            $model->bundlingType = $map['BundlingType'];
        }

        return $model;
    }
}
