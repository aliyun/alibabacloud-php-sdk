<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20220926\Models;

use AlibabaCloud\Tea\Model;

class UpdateOssCheckResultsFreezeRequest extends Model
{
    /**
     * @example 2023-10-21 16:08:38
     *
     * @var string
     */
    public $endDate;

    /**
     * @example []
     *
     * @var string
     */
    public $freezeItems;

    /**
     * @var string
     */
    public $freezeRestorePath;

    /**
     * @example ACL
     *
     * @var string
     */
    public $freezeType;

    /**
     * @example cn-shanghai
     *
     * @var string
     */
    public $regionId;

    /**
     * @example 2023-08-21 16:08:38
     *
     * @var string
     */
    public $startDate;

    /**
     * @example P_15BU42
     *
     * @var string
     */
    public $taskId;
    protected $_name = [
        'endDate' => 'EndDate',
        'freezeItems' => 'FreezeItems',
        'freezeRestorePath' => 'FreezeRestorePath',
        'freezeType' => 'FreezeType',
        'regionId' => 'RegionId',
        'startDate' => 'StartDate',
        'taskId' => 'TaskId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->endDate) {
            $res['EndDate'] = $this->endDate;
        }
        if (null !== $this->freezeItems) {
            $res['FreezeItems'] = $this->freezeItems;
        }
        if (null !== $this->freezeRestorePath) {
            $res['FreezeRestorePath'] = $this->freezeRestorePath;
        }
        if (null !== $this->freezeType) {
            $res['FreezeType'] = $this->freezeType;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->startDate) {
            $res['StartDate'] = $this->startDate;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateOssCheckResultsFreezeRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EndDate'])) {
            $model->endDate = $map['EndDate'];
        }
        if (isset($map['FreezeItems'])) {
            $model->freezeItems = $map['FreezeItems'];
        }
        if (isset($map['FreezeRestorePath'])) {
            $model->freezeRestorePath = $map['FreezeRestorePath'];
        }
        if (isset($map['FreezeType'])) {
            $model->freezeType = $map['FreezeType'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['StartDate'])) {
            $model->startDate = $map['StartDate'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        return $model;
    }
}
