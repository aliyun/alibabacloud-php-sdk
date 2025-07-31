<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20220926\Models;

use AlibabaCloud\Tea\Model;

class UpdateOssCheckResultsUnfreezeRequest extends Model
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
     * @example P_B6YRVD
     *
     * @var string
     */
    public $taskId;
    protected $_name = [
        'endDate' => 'EndDate',
        'freezeItems' => 'FreezeItems',
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
     * @return UpdateOssCheckResultsUnfreezeRequest
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
