<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\Dara\Model;

class ChatWithDesensitizeShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $desensitizationRule;

    /**
     * @var bool
     */
    public $enableThinking;

    /**
     * @var int
     */
    public $instanceId;

    /**
     * @var int
     */
    public $maxTokens;

    /**
     * @var string
     */
    public $messagesShrink;

    /**
     * @var string
     */
    public $model;

    /**
     * @var bool
     */
    public $needDesensitization;

    /**
     * @var float
     */
    public $presencePenalty;

    /**
     * @var string
     */
    public $responseFormat;

    /**
     * @var int
     */
    public $seed;

    /**
     * @var string
     */
    public $stopShrink;

    /**
     * @var float
     */
    public $temperature;

    /**
     * @var int
     */
    public $thinkingBudget;

    /**
     * @var int
     */
    public $topK;

    /**
     * @var int
     */
    public $topLogprobs;

    /**
     * @var float
     */
    public $topP;
    protected $_name = [
        'desensitizationRule' => 'DesensitizationRule',
        'enableThinking' => 'EnableThinking',
        'instanceId' => 'InstanceId',
        'maxTokens' => 'MaxTokens',
        'messagesShrink' => 'Messages',
        'model' => 'Model',
        'needDesensitization' => 'NeedDesensitization',
        'presencePenalty' => 'PresencePenalty',
        'responseFormat' => 'ResponseFormat',
        'seed' => 'Seed',
        'stopShrink' => 'Stop',
        'temperature' => 'Temperature',
        'thinkingBudget' => 'ThinkingBudget',
        'topK' => 'TopK',
        'topLogprobs' => 'TopLogprobs',
        'topP' => 'TopP',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->desensitizationRule) {
            $res['DesensitizationRule'] = $this->desensitizationRule;
        }

        if (null !== $this->enableThinking) {
            $res['EnableThinking'] = $this->enableThinking;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->maxTokens) {
            $res['MaxTokens'] = $this->maxTokens;
        }

        if (null !== $this->messagesShrink) {
            $res['Messages'] = $this->messagesShrink;
        }

        if (null !== $this->model) {
            $res['Model'] = $this->model;
        }

        if (null !== $this->needDesensitization) {
            $res['NeedDesensitization'] = $this->needDesensitization;
        }

        if (null !== $this->presencePenalty) {
            $res['PresencePenalty'] = $this->presencePenalty;
        }

        if (null !== $this->responseFormat) {
            $res['ResponseFormat'] = $this->responseFormat;
        }

        if (null !== $this->seed) {
            $res['Seed'] = $this->seed;
        }

        if (null !== $this->stopShrink) {
            $res['Stop'] = $this->stopShrink;
        }

        if (null !== $this->temperature) {
            $res['Temperature'] = $this->temperature;
        }

        if (null !== $this->thinkingBudget) {
            $res['ThinkingBudget'] = $this->thinkingBudget;
        }

        if (null !== $this->topK) {
            $res['TopK'] = $this->topK;
        }

        if (null !== $this->topLogprobs) {
            $res['TopLogprobs'] = $this->topLogprobs;
        }

        if (null !== $this->topP) {
            $res['TopP'] = $this->topP;
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
        if (isset($map['DesensitizationRule'])) {
            $model->desensitizationRule = $map['DesensitizationRule'];
        }

        if (isset($map['EnableThinking'])) {
            $model->enableThinking = $map['EnableThinking'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['MaxTokens'])) {
            $model->maxTokens = $map['MaxTokens'];
        }

        if (isset($map['Messages'])) {
            $model->messagesShrink = $map['Messages'];
        }

        if (isset($map['Model'])) {
            $model->model = $map['Model'];
        }

        if (isset($map['NeedDesensitization'])) {
            $model->needDesensitization = $map['NeedDesensitization'];
        }

        if (isset($map['PresencePenalty'])) {
            $model->presencePenalty = $map['PresencePenalty'];
        }

        if (isset($map['ResponseFormat'])) {
            $model->responseFormat = $map['ResponseFormat'];
        }

        if (isset($map['Seed'])) {
            $model->seed = $map['Seed'];
        }

        if (isset($map['Stop'])) {
            $model->stopShrink = $map['Stop'];
        }

        if (isset($map['Temperature'])) {
            $model->temperature = $map['Temperature'];
        }

        if (isset($map['ThinkingBudget'])) {
            $model->thinkingBudget = $map['ThinkingBudget'];
        }

        if (isset($map['TopK'])) {
            $model->topK = $map['TopK'];
        }

        if (isset($map['TopLogprobs'])) {
            $model->topLogprobs = $map['TopLogprobs'];
        }

        if (isset($map['TopP'])) {
            $model->topP = $map['TopP'];
        }

        return $model;
    }
}
