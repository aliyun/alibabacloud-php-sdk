<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Tea\Model;

class DeleteLivePullToPushRequest extends Model
{
    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The region where the task is started. Valid values:
     *
     *   ap-southeast-1: Singapore
     *   ap-southeast-5: Indonesia (Jakarta)
     *   cn-beijing: China (Beijing)
     *   cn-shanghai: China (Shanghai)
     *
     * This parameter is required.
     *
     * @example cn-shanghai
     *
     * @var string
     */
    public $region;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @description The task ID.
     *
     * This parameter is required.
     *
     * @example 3efb43c5-18ff-49eb-92a6-005f6521****
     *
     * @var string
     */
    public $taskId;
    protected $_name = [
        'ownerId' => 'OwnerId',
        'region' => 'Region',
        'regionId' => 'RegionId',
        'taskId' => 'TaskId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteLivePullToPushRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        return $model;
    }
}
