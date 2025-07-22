<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtc\V20180111\Models\StartAgentRequest\voiceChatConfig;

use AlibabaCloud\Tea\Model;

class LLMConfig extends Model
{
    /**
     * @example xxxxxxxxxxx
     *
     * @var string
     */
    public $apiKey;

    /**
     * @example 3
     *
     * @var int
     */
    public $historyDepth;

    /**
     * @example 500
     *
     * @var int
     */
    public $maxToken;

    /**
     * @example qwen-plus
     *
     * @var string
     */
    public $model;

    /**
     * @example xxxx
     *
     * @var string
     */
    public $prompt;

    /**
     * @example 0.7
     *
     * @var float
     */
    public $temperature;

    /**
     * @example 0.8
     *
     * @var float
     */
    public $topP;

    /**
     * @example https://xxxxx
     *
     * @var string
     */
    public $url;

    /**
     * @example aliyun
     *
     * @var string
     */
    public $vendor;
    protected $_name = [
        'apiKey' => 'ApiKey',
        'historyDepth' => 'HistoryDepth',
        'maxToken' => 'MaxToken',
        'model' => 'Model',
        'prompt' => 'Prompt',
        'temperature' => 'Temperature',
        'topP' => 'TopP',
        'url' => 'Url',
        'vendor' => 'Vendor',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->apiKey) {
            $res['ApiKey'] = $this->apiKey;
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
        if (null !== $this->prompt) {
            $res['Prompt'] = $this->prompt;
        }
        if (null !== $this->temperature) {
            $res['Temperature'] = $this->temperature;
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

    /**
     * @param array $map
     *
     * @return LLMConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApiKey'])) {
            $model->apiKey = $map['ApiKey'];
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
        if (isset($map['Prompt'])) {
            $model->prompt = $map['Prompt'];
        }
        if (isset($map['Temperature'])) {
            $model->temperature = $map['Temperature'];
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
