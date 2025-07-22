<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeAppAgentTemplatesResponseBody\templates;

use AlibabaCloud\Tea\Model;

class llmConfig extends Model
{
    /**
     * @example qW8GpBOdHK/pv9gdUSVLvQ==
     *
     * @var string
     */
    public $apiKey;

    /**
     * @example 8
     *
     * @var int
     */
    public $historyDepth;

    /**
     * @example 1024
     *
     * @var int
     */
    public $maxToken;

    /**
     * @example deepseek-r1
     *
     * @var string
     */
    public $model;

    /**
     * @example llm
     *
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $prompt;

    /**
     * @example 0.8
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
     * @example https://test.com
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
        'name' => 'Name',
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
        if (null !== $this->name) {
            $res['Name'] = $this->name;
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
     * @return llmConfig
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
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
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
