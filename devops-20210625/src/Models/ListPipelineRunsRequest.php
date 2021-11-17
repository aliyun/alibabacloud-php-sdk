<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models;

use AlibabaCloud\Tea\Model;

class ListPipelineRunsRequest extends Model
{
    /**
     * @description 结束时间
     *
     * @var int
     */
    public $endTime;

    /**
     * @description 最大返回数量
     *
     * @var int
     */
    public $maxResults;

    /**
     * @description 分页Token
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description 开始时间
     *
     * @var int
     */
    public $startTime;

    /**
     * @description 状态 状态 FAIL 运行失败 SUCCESS 运行成功 RUNNING 运行中
     *
     * @var string
     */
    public $status;

    /**
     * @description 触发模式 1人工触发 2定时触发 3代码提交触发
     *
     * @var int
     */
    public $triggerMode;
    protected $_name = [
        'endTime'     => 'endTime',
        'maxResults'  => 'maxResults',
        'nextToken'   => 'nextToken',
        'startTime'   => 'startTime',
        'status'      => 'status',
        'triggerMode' => 'triggerMode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->endTime) {
            $res['endTime'] = $this->endTime;
        }
        if (null !== $this->maxResults) {
            $res['maxResults'] = $this->maxResults;
        }
        if (null !== $this->nextToken) {
            $res['nextToken'] = $this->nextToken;
        }
        if (null !== $this->startTime) {
            $res['startTime'] = $this->startTime;
        }
        if (null !== $this->status) {
            $res['status'] = $this->status;
        }
        if (null !== $this->triggerMode) {
            $res['triggerMode'] = $this->triggerMode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListPipelineRunsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['endTime'])) {
            $model->endTime = $map['endTime'];
        }
        if (isset($map['maxResults'])) {
            $model->maxResults = $map['maxResults'];
        }
        if (isset($map['nextToken'])) {
            $model->nextToken = $map['nextToken'];
        }
        if (isset($map['startTime'])) {
            $model->startTime = $map['startTime'];
        }
        if (isset($map['status'])) {
            $model->status = $map['status'];
        }
        if (isset($map['triggerMode'])) {
            $model->triggerMode = $map['triggerMode'];
        }

        return $model;
    }
}
