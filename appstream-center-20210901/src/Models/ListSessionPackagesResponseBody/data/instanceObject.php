<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ListSessionPackagesResponseBody\data;

use AlibabaCloud\Tea\Model;

class instanceObject extends Model
{
    /**
     * @example 2024-05-28T16:00:00Z
     *
     * @var string
     */
    public $expiredTime;

    /**
     * @example tp-xxxxxxxxxxx
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example appstreaming.general.entry
     *
     * @var string
     */
    public $instanceType;

    /**
     * @example p-xxxxxxxxxx
     *
     * @var string
     */
    public $resourceId;

    /**
     * @example AppSessionPackage
     *
     * @var string
     */
    public $resourceType;

    /**
     * @example 2023-11-28T04:14:07Z
     *
     * @var string
     */
    public $startTime;

    /**
     * @example 3600000
     *
     * @var int
     */
    public $totalTime;

    /**
     * @example 1021
     *
     * @var int
     */
    public $usedTime;
    protected $_name = [
        'expiredTime'  => 'ExpiredTime',
        'instanceId'   => 'InstanceId',
        'instanceType' => 'InstanceType',
        'resourceId'   => 'ResourceId',
        'resourceType' => 'ResourceType',
        'startTime'    => 'StartTime',
        'totalTime'    => 'TotalTime',
        'usedTime'     => 'UsedTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->expiredTime) {
            $res['ExpiredTime'] = $this->expiredTime;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }
        if (null !== $this->resourceId) {
            $res['ResourceId'] = $this->resourceId;
        }
        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->totalTime) {
            $res['TotalTime'] = $this->totalTime;
        }
        if (null !== $this->usedTime) {
            $res['UsedTime'] = $this->usedTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return instanceObject
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ExpiredTime'])) {
            $model->expiredTime = $map['ExpiredTime'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }
        if (isset($map['ResourceId'])) {
            $model->resourceId = $map['ResourceId'];
        }
        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['TotalTime'])) {
            $model->totalTime = $map['TotalTime'];
        }
        if (isset($map['UsedTime'])) {
            $model->usedTime = $map['UsedTime'];
        }

        return $model;
    }
}
