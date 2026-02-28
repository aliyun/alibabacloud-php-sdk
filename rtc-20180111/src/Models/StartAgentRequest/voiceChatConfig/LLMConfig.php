<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtc\V20180111\Models\StartAgentRequest\voiceChatConfig;

use AlibabaCloud\Dara\Model;

class LLMConfig extends Model
{
    /**
     * @var string
     */
    public $apiKey;

    /**
     * @var string
     */
    public $appId;

    /**
     * @var int
     */
    public $historyDepth;

    /**
     * @var int
     */
    public $maxToken;

    /**
     * @var string
     */
    public $model;

    /**
     * @var mixed[]
     */
    public $params;

    /**
     * @var string
     */
    public $prompt;

    /**
     * @var float
     */
    public $temperature;

    /**
     * @var mixed
     */
    public $toolExecutionConfig;

    /**
     * @var mixed[]
     */
    public $tools;

    /**
     * @var float
     */
    public $topP;

    /**
     * @var string
     */
    public $url;

    /**
     * @var string
     */
    public $vendor;
    protected $_name = [
        'apiKey' => 'ApiKey',
        'appId' => 'AppId',
        'historyDepth' => 'HistoryDepth',
        'maxToken' => 'MaxToken',
        'model' => 'Model',
        'params' => 'Params',
        'prompt' => 'Prompt',
        'temperature' => 'Temperature',
        'toolExecutionConfig' => 'ToolExecutionConfig',
        'tools' => 'Tools',
        'topP' => 'TopP',
        'url' => 'Url',
        'vendor' => 'Vendor',
    ];

    public function validate()
    {
        if (\is_array($this->params)) {
            Model::validateArray($this->params);
        }
        if (\is_array($this->tools)) {
            Model::validateArray($this->tools);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->apiKey) {
            $res['ApiKey'] = $this->apiKey;
        }

        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }

        if (null !== $this->historyDepth) {
            $res['HistoryDepth'] = $this->historyDepth;
        }

        if (null !== $this->maxToken) {
            $res['MaxToken'] = $this->maxToken;
        }

        if (null !== $this->model) {
            $res['Model'] = $this->model;
        }

        if (null !== $this->params) {
            if (\is_array($this->params)) {
                $res['Params'] = [];
                foreach ($this->params as $key1 => $value1) {
                    $res['Params'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->prompt) {
            $res['Prompt'] = $this->prompt;
        }

        if (null !== $this->temperature) {
            $res['Temperature'] = $this->temperature;
        }

        if (null !== $this->toolExecutionConfig) {
            $res['ToolExecutionConfig'] = $this->toolExecutionConfig;
        }

        if (null !== $this->tools) {
            if (\is_array($this->tools)) {
                $res['Tools'] = [];
                $n1 = 0;
                foreach ($this->tools as $item1) {
                    $res['Tools'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->topP) {
            $res['TopP'] = $this->topP;
        }

        if (null !== $this->url) {
            $res['Url'] = $this->url;
        }

        if (null !== $this->vendor) {
            $res['Vendor'] = $this->vendor;
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
        if (isset($map['ApiKey'])) {
            $model->apiKey = $map['ApiKey'];
        }

        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }

        if (isset($map['HistoryDepth'])) {
            $model->historyDepth = $map['HistoryDepth'];
        }

        if (isset($map['MaxToken'])) {
            $model->maxToken = $map['MaxToken'];
        }

        if (isset($map['Model'])) {
            $model->model = $map['Model'];
        }

        if (isset($map['Params'])) {
            if (!empty($map['Params'])) {
                $model->params = [];
                foreach ($map['Params'] as $key1 => $value1) {
                    $model->params[$key1] = $value1;
                }
            }
        }

        if (isset($map['Prompt'])) {
            $model->prompt = $map['Prompt'];
        }

        if (isset($map['Temperature'])) {
            $model->temperature = $map['Temperature'];
        }

        if (isset($map['ToolExecutionConfig'])) {
            $model->toolExecutionConfig = $map['ToolExecutionConfig'];
        }

        if (isset($map['Tools'])) {
            if (!empty($map['Tools'])) {
                $model->tools = [];
                $n1 = 0;
                foreach ($map['Tools'] as $item1) {
                    $model->tools[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['TopP'])) {
            $model->topP = $map['TopP'];
        }

        if (isset($map['Url'])) {
            $model->url = $map['Url'];
        }

        if (isset($map['Vendor'])) {
            $model->vendor = $map['Vendor'];
        }

        return $model;
    }
}
