<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Tea\Model;

class RestartLivePullToPushRequest extends Model
{
    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The region of the live center. Valid values:
     *
     *   ap-southeast-1: Singapore
     *   ap-southeast-5: Indonesia (Jakarta)
     *   cn-beijing: China (Beijing)
     *   cn-shanghai: China (Shanghai)
     *
     * This parameter is required.
     *
     * @example preregion
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
     * @example 6f869419-0692-4fd5-8cf0-66cab659****
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
     * @return RestartLivePullToPushRequest
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
