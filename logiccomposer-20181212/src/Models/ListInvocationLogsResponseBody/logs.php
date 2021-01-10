<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Logiccomposer\V20181212\Models\ListInvocationLogsResponseBody;

use AlibabaCloud\SDK\Logiccomposer\V20181212\Models\ListInvocationLogsResponseBody\logs\invocationError;
use AlibabaCloud\SDK\Logiccomposer\V20181212\Models\ListInvocationLogsResponseBody\logs\tags;
use AlibabaCloud\SDK\Logiccomposer\V20181212\Models\ListInvocationLogsResponseBody\logs\workflow;
use AlibabaCloud\Tea\Model;

class logs extends Model
{
    /**
     * @description 执行状态
     *
     * @var string
     */
    public $status;

    /**
     * @description 执行完成时间
     *
     * @var string
     */
    public $endTime;

    /**
     * @description 开始执行时间
     *
     * @var string
     */
    public $startTime;

    /**
     * @description 执行唯一标识符
     *
     * @var string
     */
    public $invocationId;

    /**
     * @description 返回码
     *
     * @var string
     */
    public $returnCode;

    /**
     * @description 错误信息
     *
     * @var invocationError
     */
    public $invocationError;

    /**
     * @description 工作流详情
     *
     * @var workflow
     */
    public $workflow;

    /**
     * @description 本次执行的标签
     *
     * @var tags[]
     */
    public $tags;
    protected $_name = [
        'status'          => 'Status',
        'endTime'         => 'EndTime',
        'startTime'       => 'StartTime',
        'invocationId'    => 'InvocationId',
        'returnCode'      => 'ReturnCode',
        'invocationError' => 'InvocationError',
        'workflow'        => 'Workflow',
        'tags'            => 'Tags',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->invocationId) {
            $res['InvocationId'] = $this->invocationId;
        }
        if (null !== $this->returnCode) {
            $res['ReturnCode'] = $this->returnCode;
        }
        if (null !== $this->invocationError) {
            $res['InvocationError'] = null !== $this->invocationError ? $this->invocationError->toMap() : null;
        }
        if (null !== $this->workflow) {
            $res['Workflow'] = null !== $this->workflow ? $this->workflow->toMap() : null;
        }
        if (null !== $this->tags) {
            $res['Tags'] = [];
            if (null !== $this->tags && \is_array($this->tags)) {
                $n = 0;
                foreach ($this->tags as $item) {
                    $res['Tags'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return logs
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['InvocationId'])) {
            $model->invocationId = $map['InvocationId'];
        }
        if (isset($map['ReturnCode'])) {
            $model->returnCode = $map['ReturnCode'];
        }
        if (isset($map['InvocationError'])) {
            $model->invocationError = invocationError::fromMap($map['InvocationError']);
        }
        if (isset($map['Workflow'])) {
            $model->workflow = workflow::fromMap($map['Workflow']);
        }
        if (isset($map['Tags'])) {
            if (!empty($map['Tags'])) {
                $model->tags = [];
                $n           = 0;
                foreach ($map['Tags'] as $item) {
                    $model->tags[$n++] = null !== $item ? tags::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
