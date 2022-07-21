<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidlc\V20201203\Models;

use AlibabaCloud\Tea\Model;

class JobSettings extends Model
{
    /**
     * @description 作业关联用户ID
     *
     * @var string
     */
    public $businessUserId;

    /**
     * @description 调用方
     *
     * @var string
     */
    public $caller;

    /**
     * @description 允许打开作业容错监控
     *
     * @var bool
     */
    public $enableErrorMonitoringInAIMaster;

    /**
     * @description 允许作业使用RDMA
     *
     * @var bool
     */
    public $enableRDMA;

    /**
     * @description 允许作业使用潮汐资源
     *
     * @var bool
     */
    public $enableTideResource;

    /**
     * @description 用户指定容错监控的配置参数，比如指定是否启动基于log hang的检测
     *
     * @var string
     */
    public $errorMonitoringArgs;

    /**
     * @description 工作流ID
     *
     * @var string
     */
    public $pipelineId;

    /**
     * @description 自定义标签
     *
     * @var string[]
     */
    public $tags;
    protected $_name = [
        'businessUserId'                  => 'BusinessUserId',
        'caller'                          => 'Caller',
        'enableErrorMonitoringInAIMaster' => 'EnableErrorMonitoringInAIMaster',
        'enableRDMA'                      => 'EnableRDMA',
        'enableTideResource'              => 'EnableTideResource',
        'errorMonitoringArgs'             => 'ErrorMonitoringArgs',
        'pipelineId'                      => 'PipelineId',
        'tags'                            => 'Tags',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->businessUserId) {
            $res['BusinessUserId'] = $this->businessUserId;
        }
        if (null !== $this->caller) {
            $res['Caller'] = $this->caller;
        }
        if (null !== $this->enableErrorMonitoringInAIMaster) {
            $res['EnableErrorMonitoringInAIMaster'] = $this->enableErrorMonitoringInAIMaster;
        }
        if (null !== $this->enableRDMA) {
            $res['EnableRDMA'] = $this->enableRDMA;
        }
        if (null !== $this->enableTideResource) {
            $res['EnableTideResource'] = $this->enableTideResource;
        }
        if (null !== $this->errorMonitoringArgs) {
            $res['ErrorMonitoringArgs'] = $this->errorMonitoringArgs;
        }
        if (null !== $this->pipelineId) {
            $res['PipelineId'] = $this->pipelineId;
        }
        if (null !== $this->tags) {
            $res['Tags'] = $this->tags;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return JobSettings
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BusinessUserId'])) {
            $model->businessUserId = $map['BusinessUserId'];
        }
        if (isset($map['Caller'])) {
            $model->caller = $map['Caller'];
        }
        if (isset($map['EnableErrorMonitoringInAIMaster'])) {
            $model->enableErrorMonitoringInAIMaster = $map['EnableErrorMonitoringInAIMaster'];
        }
        if (isset($map['EnableRDMA'])) {
            $model->enableRDMA = $map['EnableRDMA'];
        }
        if (isset($map['EnableTideResource'])) {
            $model->enableTideResource = $map['EnableTideResource'];
        }
        if (isset($map['ErrorMonitoringArgs'])) {
            $model->errorMonitoringArgs = $map['ErrorMonitoringArgs'];
        }
        if (isset($map['PipelineId'])) {
            $model->pipelineId = $map['PipelineId'];
        }
        if (isset($map['Tags'])) {
            $model->tags = $map['Tags'];
        }

        return $model;
    }
}
