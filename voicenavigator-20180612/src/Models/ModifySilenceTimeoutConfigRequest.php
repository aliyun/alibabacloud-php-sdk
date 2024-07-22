<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\VoiceNavigator\V20180612\Models;

use AlibabaCloud\Tea\Model;

class ModifySilenceTimeoutConfigRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example TransferToAgent
     *
     * @var string
     */
    public $finalAction;

    /**
     * @example {}
     *
     * @var string
     */
    public $finalActionParams;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $finalPrompt;

    /**
     * @description This parameter is required.
     *
     * @example 12f407b22cbe4890ac595f09985848d5
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example Timeout
     *
     * @var string
     */
    public $intentTrigger;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $prompt;

    /**
     * @description This parameter is required.
     *
     * @example chatbotIntent
     *
     * @var string
     */
    public $sourceType;

    /**
     * @description This parameter is required.
     *
     * @example 3
     *
     * @var int
     */
    public $threshold;

    /**
     * @description This parameter is required.
     *
     * @example 20
     *
     * @var int
     */
    public $timeout;
    protected $_name = [
        'finalAction'       => 'FinalAction',
        'finalActionParams' => 'FinalActionParams',
        'finalPrompt'       => 'FinalPrompt',
        'instanceId'        => 'InstanceId',
        'intentTrigger'     => 'IntentTrigger',
        'prompt'            => 'Prompt',
        'sourceType'        => 'SourceType',
        'threshold'         => 'Threshold',
        'timeout'           => 'Timeout',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->finalAction) {
            $res['FinalAction'] = $this->finalAction;
        }
        if (null !== $this->finalActionParams) {
            $res['FinalActionParams'] = $this->finalActionParams;
        }
        if (null !== $this->finalPrompt) {
            $res['FinalPrompt'] = $this->finalPrompt;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->intentTrigger) {
            $res['IntentTrigger'] = $this->intentTrigger;
        }
        if (null !== $this->prompt) {
            $res['Prompt'] = $this->prompt;
        }
        if (null !== $this->sourceType) {
            $res['SourceType'] = $this->sourceType;
        }
        if (null !== $this->threshold) {
            $res['Threshold'] = $this->threshold;
        }
        if (null !== $this->timeout) {
            $res['Timeout'] = $this->timeout;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifySilenceTimeoutConfigRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FinalAction'])) {
            $model->finalAction = $map['FinalAction'];
        }
        if (isset($map['FinalActionParams'])) {
            $model->finalActionParams = $map['FinalActionParams'];
        }
        if (isset($map['FinalPrompt'])) {
            $model->finalPrompt = $map['FinalPrompt'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['IntentTrigger'])) {
            $model->intentTrigger = $map['IntentTrigger'];
        }
        if (isset($map['Prompt'])) {
            $model->prompt = $map['Prompt'];
        }
        if (isset($map['SourceType'])) {
            $model->sourceType = $map['SourceType'];
        }
        if (isset($map['Threshold'])) {
            $model->threshold = $map['Threshold'];
        }
        if (isset($map['Timeout'])) {
            $model->timeout = $map['Timeout'];
        }

        return $model;
    }
}
