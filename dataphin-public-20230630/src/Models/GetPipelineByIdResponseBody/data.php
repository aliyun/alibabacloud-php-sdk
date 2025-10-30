<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetPipelineByIdResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetPipelineByIdResponseBody\data\nodeInfo;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetPipelineByIdResponseBody\data\pipelineConfig;

class data extends Model
{
    /**
     * @var string
     */
    public $mode;

    /**
     * @var nodeInfo
     */
    public $nodeInfo;

    /**
     * @var pipelineConfig
     */
    public $pipelineConfig;

    /**
     * @var string
     */
    public $pipelineJson;

    /**
     * @var int
     */
    public $pipelineType;

    /**
     * @var string
     */
    public $scheduleConfig;

    /**
     * @var string
     */
    public $settings;
    protected $_name = [
        'mode' => 'Mode',
        'nodeInfo' => 'NodeInfo',
        'pipelineConfig' => 'PipelineConfig',
        'pipelineJson' => 'PipelineJson',
        'pipelineType' => 'PipelineType',
        'scheduleConfig' => 'ScheduleConfig',
        'settings' => 'Settings',
    ];

    public function validate()
    {
        if (null !== $this->nodeInfo) {
            $this->nodeInfo->validate();
        }
        if (null !== $this->pipelineConfig) {
            $this->pipelineConfig->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->mode) {
            $res['Mode'] = $this->mode;
        }

        if (null !== $this->nodeInfo) {
            $res['NodeInfo'] = null !== $this->nodeInfo ? $this->nodeInfo->toArray($noStream) : $this->nodeInfo;
        }

        if (null !== $this->pipelineConfig) {
            $res['PipelineConfig'] = null !== $this->pipelineConfig ? $this->pipelineConfig->toArray($noStream) : $this->pipelineConfig;
        }

        if (null !== $this->pipelineJson) {
            $res['PipelineJson'] = $this->pipelineJson;
        }

        if (null !== $this->pipelineType) {
            $res['PipelineType'] = $this->pipelineType;
        }

        if (null !== $this->scheduleConfig) {
            $res['ScheduleConfig'] = $this->scheduleConfig;
        }

        if (null !== $this->settings) {
            $res['Settings'] = $this->settings;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Mode'])) {
            $model->mode = $map['Mode'];
        }

        if (isset($map['NodeInfo'])) {
            $model->nodeInfo = nodeInfo::fromMap($map['NodeInfo']);
        }

        if (isset($map['PipelineConfig'])) {
            $model->pipelineConfig = pipelineConfig::fromMap($map['PipelineConfig']);
        }

        if (isset($map['PipelineJson'])) {
            $model->pipelineJson = $map['PipelineJson'];
        }

        if (isset($map['PipelineType'])) {
            $model->pipelineType = $map['PipelineType'];
        }

        if (isset($map['ScheduleConfig'])) {
            $model->scheduleConfig = $map['ScheduleConfig'];
        }

        if (isset($map['Settings'])) {
            $model->settings = $map['Settings'];
        }

        return $model;
    }
}
