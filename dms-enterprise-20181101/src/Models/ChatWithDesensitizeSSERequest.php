<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\Dara\Model;

class ChatWithDesensitizeSSERequest extends Model
{
    /**
     * @var string
     */
    public $audioJson;

    /**
     * @var string
     */
    public $desensitizationRule;

    /**
     * @var bool
     */
    public $enableCodeInterpreter;

    /**
     * @var bool
     */
    public $enableSearch;

    /**
     * @var bool
     */
    public $enableThinking;

    /**
     * @var bool
     */
    public $includeUsage;

    /**
     * @var int
     */
    public $instanceId;

    /**
     * @var bool
     */
    public $logprobs;

    /**
     * @var int
     */
    public $maxTokens;

    /**
     * @var mixed[]
     */
    public $messages;

    /**
     * @var string[]
     */
    public $modalitiesList;

    /**
     * @var string
     */
    public $model;

    /**
     * @var bool
     */
    public $needDesensitization;

    /**
     * @var string
     */
    public $presencePenalty;

    /**
     * @var string
     */
    public $responseFormat;

    /**
     * @var string[]
     */
    public $searchOptions;

    /**
     * @var int
     */
    public $seed;

    /**
     * @var string[]
     */
    public $stop;

    /**
     * @var bool
     */
    public $stream;

    /**
     * @var string
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
     * @var string
     */
    public $topP;

    /**
     * @var bool
     */
    public $vlHighResolutionImages;

    /**
     * @var string
     */
    public $XDashScopeDataInspection;
    protected $_name = [
        'audioJson' => 'AudioJson',
        'desensitizationRule' => 'DesensitizationRule',
        'enableCodeInterpreter' => 'EnableCodeInterpreter',
        'enableSearch' => 'EnableSearch',
        'enableThinking' => 'EnableThinking',
        'includeUsage' => 'IncludeUsage',
        'instanceId' => 'InstanceId',
        'logprobs' => 'Logprobs',
        'maxTokens' => 'MaxTokens',
        'messages' => 'Messages',
        'modalitiesList' => 'ModalitiesList',
        'model' => 'Model',
        'needDesensitization' => 'NeedDesensitization',
        'presencePenalty' => 'PresencePenalty',
        'responseFormat' => 'ResponseFormat',
        'searchOptions' => 'SearchOptions',
        'seed' => 'Seed',
        'stop' => 'Stop',
        'stream' => 'Stream',
        'temperature' => 'Temperature',
        'thinkingBudget' => 'ThinkingBudget',
        'topK' => 'TopK',
        'topLogprobs' => 'TopLogprobs',
        'topP' => 'TopP',
        'vlHighResolutionImages' => 'VlHighResolutionImages',
        'XDashScopeDataInspection' => 'XDashScopeDataInspection',
    ];

    public function validate()
    {
        if (\is_array($this->messages)) {
            Model::validateArray($this->messages);
        }
        if (\is_array($this->modalitiesList)) {
            Model::validateArray($this->modalitiesList);
        }
        if (\is_array($this->searchOptions)) {
            Model::validateArray($this->searchOptions);
        }
        if (\is_array($this->stop)) {
            Model::validateArray($this->stop);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->audioJson) {
            $res['AudioJson'] = $this->audioJson;
        }

        if (null !== $this->desensitizationRule) {
            $res['DesensitizationRule'] = $this->desensitizationRule;
        }

        if (null !== $this->enableCodeInterpreter) {
            $res['EnableCodeInterpreter'] = $this->enableCodeInterpreter;
        }

        if (null !== $this->enableSearch) {
            $res['EnableSearch'] = $this->enableSearch;
        }

        if (null !== $this->enableThinking) {
            $res['EnableThinking'] = $this->enableThinking;
        }

        if (null !== $this->includeUsage) {
            $res['IncludeUsage'] = $this->includeUsage;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->logprobs) {
            $res['Logprobs'] = $this->logprobs;
        }

        if (null !== $this->maxTokens) {
            $res['MaxTokens'] = $this->maxTokens;
        }

        if (null !== $this->messages) {
            if (\is_array($this->messages)) {
                $res['Messages'] = [];
                $n1 = 0;
                foreach ($this->messages as $item1) {
                    $res['Messages'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->modalitiesList) {
            if (\is_array($this->modalitiesList)) {
                $res['ModalitiesList'] = [];
                $n1 = 0;
                foreach ($this->modalitiesList as $item1) {
                    $res['ModalitiesList'][$n1] = $item1;
                    ++$n1;
                }
            }
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

        if (null !== $this->searchOptions) {
            if (\is_array($this->searchOptions)) {
                $res['SearchOptions'] = [];
                foreach ($this->searchOptions as $key1 => $value1) {
                    $res['SearchOptions'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->seed) {
            $res['Seed'] = $this->seed;
        }

        if (null !== $this->stop) {
            if (\is_array($this->stop)) {
                $res['Stop'] = [];
                $n1 = 0;
                foreach ($this->stop as $item1) {
                    $res['Stop'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->stream) {
            $res['Stream'] = $this->stream;
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

        if (null !== $this->vlHighResolutionImages) {
            $res['VlHighResolutionImages'] = $this->vlHighResolutionImages;
        }

        if (null !== $this->XDashScopeDataInspection) {
            $res['XDashScopeDataInspection'] = $this->XDashScopeDataInspection;
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
        if (isset($map['AudioJson'])) {
            $model->audioJson = $map['AudioJson'];
        }

        if (isset($map['DesensitizationRule'])) {
            $model->desensitizationRule = $map['DesensitizationRule'];
        }

        if (isset($map['EnableCodeInterpreter'])) {
            $model->enableCodeInterpreter = $map['EnableCodeInterpreter'];
        }

        if (isset($map['EnableSearch'])) {
            $model->enableSearch = $map['EnableSearch'];
        }

        if (isset($map['EnableThinking'])) {
            $model->enableThinking = $map['EnableThinking'];
        }

        if (isset($map['IncludeUsage'])) {
            $model->includeUsage = $map['IncludeUsage'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['Logprobs'])) {
            $model->logprobs = $map['Logprobs'];
        }

        if (isset($map['MaxTokens'])) {
            $model->maxTokens = $map['MaxTokens'];
        }

        if (isset($map['Messages'])) {
            if (!empty($map['Messages'])) {
                $model->messages = [];
                $n1 = 0;
                foreach ($map['Messages'] as $item1) {
                    $model->messages[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['ModalitiesList'])) {
            if (!empty($map['ModalitiesList'])) {
                $model->modalitiesList = [];
                $n1 = 0;
                foreach ($map['ModalitiesList'] as $item1) {
                    $model->modalitiesList[$n1] = $item1;
                    ++$n1;
                }
            }
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

        if (isset($map['SearchOptions'])) {
            if (!empty($map['SearchOptions'])) {
                $model->searchOptions = [];
                foreach ($map['SearchOptions'] as $key1 => $value1) {
                    $model->searchOptions[$key1] = $value1;
                }
            }
        }

        if (isset($map['Seed'])) {
            $model->seed = $map['Seed'];
        }

        if (isset($map['Stop'])) {
            if (!empty($map['Stop'])) {
                $model->stop = [];
                $n1 = 0;
                foreach ($map['Stop'] as $item1) {
                    $model->stop[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Stream'])) {
            $model->stream = $map['Stream'];
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

        if (isset($map['VlHighResolutionImages'])) {
            $model->vlHighResolutionImages = $map['VlHighResolutionImages'];
        }

        if (isset($map['XDashScopeDataInspection'])) {
            $model->XDashScopeDataInspection = $map['XDashScopeDataInspection'];
        }

        return $model;
    }
}
