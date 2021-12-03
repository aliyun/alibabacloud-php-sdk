<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudGameAPI\V20200728\Models;

use AlibabaCloud\Tea\Model;

class ListHistoryContainerStatusRequest extends Model
{
    /**
     * @description 结束时间（Linux时间戳，单位毫秒）
     *
     * @var int
     */
    public $endTime;

    /**
     * @description 上一个游戏会话ID
     *
     * @var string
     */
    public $lastGameSessionId;

    /**
     * @description 每页数量
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description 项目ID
     *
     * @var string
     */
    public $projectId;

    /**
     * @description 开始时间（Linux时间戳，单位毫秒）
     *
     * @var int
     */
    public $startTime;
    protected $_name = [
        'endTime'           => 'EndTime',
        'lastGameSessionId' => 'LastGameSessionId',
        'pageSize'          => 'PageSize',
        'projectId'         => 'ProjectId',
        'startTime'         => 'StartTime',
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
        if (null !== $this->lastGameSessionId) {
            $res['LastGameSessionId'] = $this->lastGameSessionId;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListHistoryContainerStatusRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['LastGameSessionId'])) {
            $model->lastGameSessionId = $map['LastGameSessionId'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}
