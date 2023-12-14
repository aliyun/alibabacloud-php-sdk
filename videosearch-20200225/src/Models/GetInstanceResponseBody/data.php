<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Videosearch\V20200225\Models\GetInstanceResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example PREPAY
     *
     * @var string
     */
    public $bundlingType;

    /**
     * @example 5
     *
     * @var int
     */
    public $concurrencyNumber;

    /**
     * @example 1618396147000
     *
     * @var int
     */
    public $createTime;

    /**
     * @example 1235701
     *
     * @var string
     */
    public $currentVideoCapacity;

    /**
     * @example 1618396147000
     *
     * @var int
     */
    public $expireTime;

    /**
     * @example vs-123
     *
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $instanceName;

    /**
     * @example 3
     *
     * @var int
     */
    public $instanceStatus;

    /**
     * @example 2000
     *
     * @var string
     */
    public $maxVideoCapacity;

    /**
     * @example cn-beijing
     *
     * @var string
     */
    public $regionId;

    /**
     * @example 1618396147000
     *
     * @var int
     */
    public $videoInfoUpdateTime;

    /**
     * @example 12356
     *
     * @var int
     */
    public $videoNumber;
    protected $_name = [
        'bundlingType'         => 'BundlingType',
        'concurrencyNumber'    => 'ConcurrencyNumber',
        'createTime'           => 'CreateTime',
        'currentVideoCapacity' => 'CurrentVideoCapacity',
        'expireTime'           => 'ExpireTime',
        'instanceId'           => 'InstanceId',
        'instanceName'         => 'InstanceName',
        'instanceStatus'       => 'InstanceStatus',
        'maxVideoCapacity'     => 'MaxVideoCapacity',
        'regionId'             => 'RegionId',
        'videoInfoUpdateTime'  => 'VideoInfoUpdateTime',
        'videoNumber'          => 'VideoNumber',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bundlingType) {
            $res['BundlingType'] = $this->bundlingType;
        }
        if (null !== $this->concurrencyNumber) {
            $res['ConcurrencyNumber'] = $this->concurrencyNumber;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->currentVideoCapacity) {
            $res['CurrentVideoCapacity'] = $this->currentVideoCapacity;
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
        if (null !== $this->maxVideoCapacity) {
            $res['MaxVideoCapacity'] = $this->maxVideoCapacity;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->videoInfoUpdateTime) {
            $res['VideoInfoUpdateTime'] = $this->videoInfoUpdateTime;
        }
        if (null !== $this->videoNumber) {
            $res['VideoNumber'] = $this->videoNumber;
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
        if (isset($map['BundlingType'])) {
            $model->bundlingType = $map['BundlingType'];
        }
        if (isset($map['ConcurrencyNumber'])) {
            $model->concurrencyNumber = $map['ConcurrencyNumber'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['CurrentVideoCapacity'])) {
            $model->currentVideoCapacity = $map['CurrentVideoCapacity'];
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
        if (isset($map['MaxVideoCapacity'])) {
            $model->maxVideoCapacity = $map['MaxVideoCapacity'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['VideoInfoUpdateTime'])) {
            $model->videoInfoUpdateTime = $map['VideoInfoUpdateTime'];
        }
        if (isset($map['VideoNumber'])) {
            $model->videoNumber = $map['VideoNumber'];
        }

        return $model;
    }
}
