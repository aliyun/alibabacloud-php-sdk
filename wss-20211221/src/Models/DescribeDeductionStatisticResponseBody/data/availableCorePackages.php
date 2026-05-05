<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wss\V20211221\Models\DescribeDeductionStatisticResponseBody\data;

use AlibabaCloud\Dara\Model;

class availableCorePackages extends Model
{
    /**
     * @var int
     */
    public $aliUid;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $endTime;

    /**
     * @var string
     */
    public $expiredTime;

    /**
     * @var string
     */
    public $groupId;

    /**
     * @var string
     */
    public $groupResourceType;

    /**
     * @var bool
     */
    public $noLx;

    /**
     * @var string
     */
    public $noLxSource;

    /**
     * @var string
     */
    public $resourceId;

    /**
     * @var string
     */
    public $resourceType;

    /**
     * @var string
     */
    public $startTime;

    /**
     * @var string
     */
    public $status;

    /**
     * @var int
     */
    public $totalTime;

    /**
     * @var int
     */
    public $usedTime;
    protected $_name = [
        'aliUid' => 'AliUid',
        'createTime' => 'CreateTime',
        'endTime' => 'EndTime',
        'expiredTime' => 'ExpiredTime',
        'groupId' => 'GroupId',
        'groupResourceType' => 'GroupResourceType',
        'noLx' => 'NoLx',
        'noLxSource' => 'NoLxSource',
        'resourceId' => 'ResourceId',
        'resourceType' => 'ResourceType',
        'startTime' => 'StartTime',
        'status' => 'Status',
        'totalTime' => 'TotalTime',
        'usedTime' => 'UsedTime',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->aliUid) {
            $res['AliUid'] = $this->aliUid;
        }

        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }

        if (null !== $this->expiredTime) {
            $res['ExpiredTime'] = $this->expiredTime;
        }

        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }

        if (null !== $this->groupResourceType) {
            $res['GroupResourceType'] = $this->groupResourceType;
        }

        if (null !== $this->noLx) {
            $res['NoLx'] = $this->noLx;
        }

        if (null !== $this->noLxSource) {
            $res['NoLxSource'] = $this->noLxSource;
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

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->totalTime) {
            $res['TotalTime'] = $this->totalTime;
        }

        if (null !== $this->usedTime) {
            $res['UsedTime'] = $this->usedTime;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AliUid'])) {
            $model->aliUid = $map['AliUid'];
        }

        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }

        if (isset($map['ExpiredTime'])) {
            $model->expiredTime = $map['ExpiredTime'];
        }

        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }

        if (isset($map['GroupResourceType'])) {
            $model->groupResourceType = $map['GroupResourceType'];
        }

        if (isset($map['NoLx'])) {
            $model->noLx = $map['NoLx'];
        }

        if (isset($map['NoLxSource'])) {
            $model->noLxSource = $map['NoLxSource'];
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

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
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
