<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\VoiceNavigator\V20180612\Models\DescribeNavigationConfigResponseBody;

use AlibabaCloud\Tea\Model;

class silenceTimeoutConfig extends Model
{
    /**
     * @var int
     */
    public $timeout;

    /**
     * @var string
     */
    public $intentTrigger;

    /**
     * @var string
     */
    public $finalPrompt;

    /**
     * @var string
     */
    public $sourceType;

    /**
     * @var string
     */
    public $finalAction;

    /**
     * @var string
     */
    public $prompt;

    /**
     * @var int
     */
    public $threshold;

    /**
     * @var string
     */
    public $finalActionParams;
    protected $_name = [
        'timeout'           => 'Timeout',
        'intentTrigger'     => 'IntentTrigger',
        'finalPrompt'       => 'FinalPrompt',
        'sourceType'        => 'SourceType',
        'finalAction'       => 'FinalAction',
        'prompt'            => 'Prompt',
        'threshold'         => 'Threshold',
        'finalActionParams' => 'FinalActionParams',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->timeout) {
            $res['Timeout'] = $this->timeout;
        }
        if (null !== $this->intentTrigger) {
            $res['IntentTrigger'] = $this->intentTrigger;
        }
        if (null !== $this->finalPrompt) {
            $res['FinalPrompt'] = $this->finalPrompt;
        }
        if (null !== $this->sourceType) {
            $res['SourceType'] = $this->sourceType;
        }
        if (null !== $this->finalAction) {
            $res['FinalAction'] = $this->finalAction;
        }
        if (null !== $this->prompt) {
            $res['Prompt'] = $this->prompt;
        }
        if (null !== $this->threshold) {
            $res['Threshold'] = $this->threshold;
        }
        if (null !== $this->finalActionParams) {
            $res['FinalActionParams'] = $this->finalActionParams;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return silenceTimeoutConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Timeout'])) {
            $model->timeout = $map['Timeout'];
        }
        if (isset($map['IntentTrigger'])) {
            $model->intentTrigger = $map['IntentTrigger'];
        }
        if (isset($map['FinalPrompt'])) {
            $model->finalPrompt = $map['FinalPrompt'];
        }
        if (isset($map['SourceType'])) {
            $model->sourceType = $map['SourceType'];
        }
        if (isset($map['FinalAction'])) {
            $model->finalAction = $map['FinalAction'];
        }
        if (isset($map['Prompt'])) {
            $model->prompt = $map['Prompt'];
        }
        if (isset($map['Threshold'])) {
            $model->threshold = $map['Threshold'];
        }
        if (isset($map['FinalActionParams'])) {
            $model->finalActionParams = $map['FinalActionParams'];
        }

        return $model;
    }
}
