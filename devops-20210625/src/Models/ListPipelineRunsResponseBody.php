<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models;

use AlibabaCloud\SDK\Devops\V20210625\Models\ListPipelineRunsResponseBody\pipelineRuns;
use AlibabaCloud\Tea\Model;

class ListPipelineRunsResponseBody extends Model
{
    /**
     * @description 请求id，每次请求都是唯一值，便于后续排查问题
     *
     * @var string
     */
    public $requestId;

    /**
     * @description 错误信息
     *
     * @var string
     */
    public $errorMessage;

    /**
     * @description 错误码
     *
     * @var string
     */
    public $errorCode;

    /**
     * @description true 接口调用成功，false 接口调用失败
     *
     * @var bool
     */
    public $success;

    /**
     * @description 总数
     *
     * @var int
     */
    public $totalCount;

    /**
     * @description 下一个分页token，为空时，表示没有下一页
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description 流水线运行实例
     *
     * @var pipelineRuns[]
     */
    public $pipelineRuns;
    protected $_name = [
        'requestId'    => 'requestId',
        'errorMessage' => 'errorMessage',
        'errorCode'    => 'errorCode',
        'success'      => 'success',
        'totalCount'   => 'totalCount',
        'nextToken'    => 'nextToken',
        'pipelineRuns' => 'pipelineRuns',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }
        if (null !== $this->errorMessage) {
            $res['errorMessage'] = $this->errorMessage;
        }
        if (null !== $this->errorCode) {
            $res['errorCode'] = $this->errorCode;
        }
        if (null !== $this->success) {
            $res['success'] = $this->success;
        }
        if (null !== $this->totalCount) {
            $res['totalCount'] = $this->totalCount;
        }
        if (null !== $this->nextToken) {
            $res['nextToken'] = $this->nextToken;
        }
        if (null !== $this->pipelineRuns) {
            $res['pipelineRuns'] = [];
            if (null !== $this->pipelineRuns && \is_array($this->pipelineRuns)) {
                $n = 0;
                foreach ($this->pipelineRuns as $item) {
                    $res['pipelineRuns'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListPipelineRunsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }
        if (isset($map['errorMessage'])) {
            $model->errorMessage = $map['errorMessage'];
        }
        if (isset($map['errorCode'])) {
            $model->errorCode = $map['errorCode'];
        }
        if (isset($map['success'])) {
            $model->success = $map['success'];
        }
        if (isset($map['totalCount'])) {
            $model->totalCount = $map['totalCount'];
        }
        if (isset($map['nextToken'])) {
            $model->nextToken = $map['nextToken'];
        }
        if (isset($map['pipelineRuns'])) {
            if (!empty($map['pipelineRuns'])) {
                $model->pipelineRuns = [];
                $n                   = 0;
                foreach ($map['pipelineRuns'] as $item) {
                    $model->pipelineRuns[$n++] = null !== $item ? pipelineRuns::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
