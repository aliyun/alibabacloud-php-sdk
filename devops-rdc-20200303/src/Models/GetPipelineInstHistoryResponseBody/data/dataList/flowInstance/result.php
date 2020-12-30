<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devopsrdc\V20200303\Models\GetPipelineInstHistoryResponseBody\data\dataList\flowInstance;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @var int
     */
    public $enginePipelineNumber;

    /**
     * @var string
     */
    public $mixFlowInstId;

    /**
     * @var string
     */
    public $enginePipelineName;

    /**
     * @var int
     */
    public $enginePipelineId;

    /**
     * @var int
     */
    public $enginePipelineInstId;

    /**
     * @var string
     */
    public $timeStamp;

    /**
     * @var string
     */
    public $triggerMode;

    /**
     * @var string
     */
    public $sources;

    /**
     * @var string
     */
    public $caches;

    /**
     * @var string
     */
    public $dateTime;
    protected $_name = [
        'enginePipelineNumber' => 'EnginePipelineNumber',
        'mixFlowInstId'        => 'MixFlowInstId',
        'enginePipelineName'   => 'EnginePipelineName',
        'enginePipelineId'     => 'EnginePipelineId',
        'enginePipelineInstId' => 'EnginePipelineInstId',
        'timeStamp'            => 'TimeStamp',
        'triggerMode'          => 'TriggerMode',
        'sources'              => 'Sources',
        'caches'               => 'Caches',
        'dateTime'             => 'DateTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->enginePipelineNumber) {
            $res['EnginePipelineNumber'] = $this->enginePipelineNumber;
        }
        if (null !== $this->mixFlowInstId) {
            $res['MixFlowInstId'] = $this->mixFlowInstId;
        }
        if (null !== $this->enginePipelineName) {
            $res['EnginePipelineName'] = $this->enginePipelineName;
        }
        if (null !== $this->enginePipelineId) {
            $res['EnginePipelineId'] = $this->enginePipelineId;
        }
        if (null !== $this->enginePipelineInstId) {
            $res['EnginePipelineInstId'] = $this->enginePipelineInstId;
        }
        if (null !== $this->timeStamp) {
            $res['TimeStamp'] = $this->timeStamp;
        }
        if (null !== $this->triggerMode) {
            $res['TriggerMode'] = $this->triggerMode;
        }
        if (null !== $this->sources) {
            $res['Sources'] = $this->sources;
        }
        if (null !== $this->caches) {
            $res['Caches'] = $this->caches;
        }
        if (null !== $this->dateTime) {
            $res['DateTime'] = $this->dateTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EnginePipelineNumber'])) {
            $model->enginePipelineNumber = $map['EnginePipelineNumber'];
        }
        if (isset($map['MixFlowInstId'])) {
            $model->mixFlowInstId = $map['MixFlowInstId'];
        }
        if (isset($map['EnginePipelineName'])) {
            $model->enginePipelineName = $map['EnginePipelineName'];
        }
        if (isset($map['EnginePipelineId'])) {
            $model->enginePipelineId = $map['EnginePipelineId'];
        }
        if (isset($map['EnginePipelineInstId'])) {
            $model->enginePipelineInstId = $map['EnginePipelineInstId'];
        }
        if (isset($map['TimeStamp'])) {
            $model->timeStamp = $map['TimeStamp'];
        }
        if (isset($map['TriggerMode'])) {
            $model->triggerMode = $map['TriggerMode'];
        }
        if (isset($map['Sources'])) {
            $model->sources = $map['Sources'];
        }
        if (isset($map['Caches'])) {
            $model->caches = $map['Caches'];
        }
        if (isset($map['DateTime'])) {
            $model->dateTime = $map['DateTime'];
        }

        return $model;
    }
}
