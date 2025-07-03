<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtc\V20180111\Models\ModifyAppAgentTemplateRequest;

use AlibabaCloud\Dara\Model;

class llmConfig extends Model
{
    /**
     * @var string
     */
    public $apiKey;

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
    public $name;

    /**
     * @var string
     */
    public $prompt;

    /**
     * @var float
     */
    public $temperature;

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
        'historyDepth' => 'HistoryDepth',
        'maxToken' => 'MaxToken',
        'name' => 'Name',
        'prompt' => 'Prompt',
        'temperature' => 'Temperature',
        'topP' => 'TopP',
        'url' => 'Url',
        'vendor' => 'Vendor',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

        if (isset($map['HistoryDepth'])) {
            $model->historyDepth = $map['HistoryDepth'];
        }

        if (isset($map['MaxToken'])) {
            $model->maxToken = $map['MaxToken'];
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
