<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidlc\V20201203\Models;

use AlibabaCloud\Tea\Model;

class JobSettings extends Model
{
    /**
     * @var string
     */
    public $businessUserId;

    /**
     * @var string
     */
    public $caller;

    /**
     * @var bool
     */
    public $enableErrorMonitoringInAIMaster;

    /**
     * @var bool
     */
    public $enableRDMA;

    /**
     * @var bool
     */
    public $enableTideResource;

    /**
     * @var string
     */
    public $errorMonitoringArgs;

    /**
     * @var string
     */
    public $pipelineId;

    /**
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
