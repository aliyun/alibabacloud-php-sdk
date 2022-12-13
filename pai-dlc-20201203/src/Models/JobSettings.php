<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidlc\V20201203\Models;

use AlibabaCloud\Tea\Model;

class JobSettings extends Model
{
    /**
     * @example 166924
     *
     * @var string
     */
    public $businessUserId;

    /**
     * @example SilkFlow
     *
     * @var string
     */
    public $caller;

    /**
     * @example false
     *
     * @var bool
     */
    public $enableErrorMonitoringInAIMaster;

    /**
     * @example true
     *
     * @var bool
     */
    public $enableOssAppend;

    /**
     * @example true
     *
     * @var bool
     */
    public $enableRDMA;

    /**
     * @example true
     *
     * @var bool
     */
    public $enableTideResource;

    /**
     * @example --enable-log-hang-detection true
     *
     * @var string
     */
    public $errorMonitoringArgs;

    /**
     * @example pid-123456
     *
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
        'enableOssAppend'                 => 'EnableOssAppend',
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
        if (null !== $this->enableOssAppend) {
            $res['EnableOssAppend'] = $this->enableOssAppend;
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
        if (isset($map['EnableOssAppend'])) {
            $model->enableOssAppend = $map['EnableOssAppend'];
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
