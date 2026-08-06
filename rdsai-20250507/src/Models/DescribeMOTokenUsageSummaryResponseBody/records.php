<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RdsAi\V20250507\Models\DescribeMOTokenUsageSummaryResponseBody;

use AlibabaCloud\Dara\Model;

class records extends Model
{
    /**
     * @var string
     */
    public $apiKey;

    /**
     * @var float
     */
    public $cacheTokens;

    /**
     * @var string
     */
    public $date;

    /**
     * @var float
     */
    public $inputTokens;

    /**
     * @var string
     */
    public $keyName;

    /**
     * @var string
     */
    public $model;

    /**
     * @var float
     */
    public $outputTokens;

    /**
     * @var int
     */
    public $requestCount;

    /**
     * @var float
     */
    public $totalTokens;

    /**
     * @var string
     */
    public $usageType;
    protected $_name = [
        'apiKey' => 'ApiKey',
        'cacheTokens' => 'CacheTokens',
        'date' => 'Date',
        'inputTokens' => 'InputTokens',
        'keyName' => 'KeyName',
        'model' => 'Model',
        'outputTokens' => 'OutputTokens',
        'requestCount' => 'RequestCount',
        'totalTokens' => 'TotalTokens',
        'usageType' => 'UsageType',
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

        if (null !== $this->cacheTokens) {
            $res['CacheTokens'] = $this->cacheTokens;
        }

        if (null !== $this->date) {
            $res['Date'] = $this->date;
        }

        if (null !== $this->inputTokens) {
            $res['InputTokens'] = $this->inputTokens;
        }

        if (null !== $this->keyName) {
            $res['KeyName'] = $this->keyName;
        }

        if (null !== $this->model) {
            $res['Model'] = $this->model;
        }

        if (null !== $this->outputTokens) {
            $res['OutputTokens'] = $this->outputTokens;
        }

        if (null !== $this->requestCount) {
            $res['RequestCount'] = $this->requestCount;
        }

        if (null !== $this->totalTokens) {
            $res['TotalTokens'] = $this->totalTokens;
        }

        if (null !== $this->usageType) {
            $res['UsageType'] = $this->usageType;
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

        if (isset($map['CacheTokens'])) {
            $model->cacheTokens = $map['CacheTokens'];
        }

        if (isset($map['Date'])) {
            $model->date = $map['Date'];
        }

        if (isset($map['InputTokens'])) {
            $model->inputTokens = $map['InputTokens'];
        }

        if (isset($map['KeyName'])) {
            $model->keyName = $map['KeyName'];
        }

        if (isset($map['Model'])) {
            $model->model = $map['Model'];
        }

        if (isset($map['OutputTokens'])) {
            $model->outputTokens = $map['OutputTokens'];
        }

        if (isset($map['RequestCount'])) {
            $model->requestCount = $map['RequestCount'];
        }

        if (isset($map['TotalTokens'])) {
            $model->totalTokens = $map['TotalTokens'];
        }

        if (isset($map['UsageType'])) {
            $model->usageType = $map['UsageType'];
        }

        return $model;
    }
}
