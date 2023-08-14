<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidsw\V20220101\Models;

use AlibabaCloud\Tea\Model;

class GetResourceGroupStatisticsRequest extends Model
{
    /**
     * @example 2020-11-08T15:00:00Z
     *
     * @var string
     */
    public $endTime;

    /**
     * @example rg-123456789
     *
     * @var string
     */
    public $resourceId;

    /**
     * @example 2020-11-08T15:00:00Z
     *
     * @var string
     */
    public $startTime;

    /**
     * @example 27218,34956
     *
     * @var string
     */
    public $workspaceIds;
    protected $_name = [
        'endTime'      => 'EndTime',
        'resourceId'   => 'ResourceId',
        'startTime'    => 'StartTime',
        'workspaceIds' => 'WorkspaceIds',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->resourceId) {
            $res['ResourceId'] = $this->resourceId;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->workspaceIds) {
            $res['WorkspaceIds'] = $this->workspaceIds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetResourceGroupStatisticsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['ResourceId'])) {
            $model->resourceId = $map['ResourceId'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['WorkspaceIds'])) {
            $model->workspaceIds = $map['WorkspaceIds'];
        }

        return $model;
    }
}
