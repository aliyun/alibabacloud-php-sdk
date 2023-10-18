<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\Tea\Model;

class DescribeEdgeMachineActiveProcessResponseBody extends Model
{
    /**
     * @description The activation progress list.
     *
     * @example [{\"content\":\"步骤 \"颁发激活凭证\" 执行开始\",\"id\":0,\"level\":3,\"timestamp\":1625994913000},{\"content\":\"步骤 \"颁发激活凭证\" 执行成功\",\"id\":1,\"level\":3,\"timestamp\":1625994914000},{\"content\":\"步骤 \"初始化主机配置\" 执行开始\",\"id\":2,\"level\":3,\"timestamp\":1625994975000},{\"content\":\"步骤 \"初始化主机配置\" 执行成功\",\"id\":3,\"level\":3,\"timestamp\":1625994975000}]
     *
     * @var string
     */
    public $logs;

    /**
     * @description The activation progress.
     *
     * @example 100
     *
     * @var int
     */
    public $progress;

    /**
     * @description The request ID.
     *
     * @example b62796a8-c5a6-4d3f-beb2-7650e4309cb1
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The activation status.
     *
     * @example ACTIVATED
     *
     * @var string
     */
    public $state;

    /**
     * @description The activation step.
     *
     * @example 步骤 \"初始化主机配置\" 执行成功
     *
     * @var string
     */
    public $step;
    protected $_name = [
        'logs'      => 'logs',
        'progress'  => 'progress',
        'requestId' => 'request_id',
        'state'     => 'state',
        'step'      => 'step',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->logs) {
            $res['logs'] = $this->logs;
        }
        if (null !== $this->progress) {
            $res['progress'] = $this->progress;
        }
        if (null !== $this->requestId) {
            $res['request_id'] = $this->requestId;
        }
        if (null !== $this->state) {
            $res['state'] = $this->state;
        }
        if (null !== $this->step) {
            $res['step'] = $this->step;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeEdgeMachineActiveProcessResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['logs'])) {
            $model->logs = $map['logs'];
        }
        if (isset($map['progress'])) {
            $model->progress = $map['progress'];
        }
        if (isset($map['request_id'])) {
            $model->requestId = $map['request_id'];
        }
        if (isset($map['state'])) {
            $model->state = $map['state'];
        }
        if (isset($map['step'])) {
            $model->step = $map['step'];
        }

        return $model;
    }
}
