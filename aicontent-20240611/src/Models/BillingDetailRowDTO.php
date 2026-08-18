<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiContent\V20240611\Models;

use AlibabaCloud\Dara\Model;

class BillingDetailRowDTO extends Model
{
    /**
     * @var float
     */
    public $amount;

    /**
     * @var int
     */
    public $apiKeyId;

    /**
     * @var string
     */
    public $apiKeyName;

    /**
     * @var float
     */
    public $cacheCreationTokens;

    /**
     * @var float
     */
    public $cachedTokens;

    /**
     * @var int
     */
    public $clientId;

    /**
     * @var string
     */
    public $clientName;

    /**
     * @var float
     */
    public $discount;

    /**
     * @var float
     */
    public $inputTokens;

    /**
     * @var int
     */
    public $memberUserId;

    /**
     * @var string
     */
    public $memberUserName;

    /**
     * @var string
     */
    public $metrics;

    /**
     * @var string
     */
    public $modelCode;

    /**
     * @var int
     */
    public $modelId;

    /**
     * @var string
     */
    public $modelName;

    /**
     * @var string
     */
    public $modelSymbol;

    /**
     * @var string
     */
    public $modelType;

    /**
     * @var int
     */
    public $modelVersion;

    /**
     * @var float
     */
    public $outputTokens;

    /**
     * @var float
     */
    public $reasoningTokens;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $requestTime;

    /**
     * @var float
     */
    public $totalTokens;

    /**
     * @var string
     */
    public $usageDetail;
    protected $_name = [
        'amount' => 'amount',
        'apiKeyId' => 'apiKeyId',
        'apiKeyName' => 'apiKeyName',
        'cacheCreationTokens' => 'cacheCreationTokens',
        'cachedTokens' => 'cachedTokens',
        'clientId' => 'clientId',
        'clientName' => 'clientName',
        'discount' => 'discount',
        'inputTokens' => 'inputTokens',
        'memberUserId' => 'memberUserId',
        'memberUserName' => 'memberUserName',
        'metrics' => 'metrics',
        'modelCode' => 'modelCode',
        'modelId' => 'modelId',
        'modelName' => 'modelName',
        'modelSymbol' => 'modelSymbol',
        'modelType' => 'modelType',
        'modelVersion' => 'modelVersion',
        'outputTokens' => 'outputTokens',
        'reasoningTokens' => 'reasoningTokens',
        'requestId' => 'requestId',
        'requestTime' => 'requestTime',
        'totalTokens' => 'totalTokens',
        'usageDetail' => 'usageDetail',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->amount) {
            $res['amount'] = $this->amount;
        }

        if (null !== $this->apiKeyId) {
            $res['apiKeyId'] = $this->apiKeyId;
        }

        if (null !== $this->apiKeyName) {
            $res['apiKeyName'] = $this->apiKeyName;
        }

        if (null !== $this->cacheCreationTokens) {
            $res['cacheCreationTokens'] = $this->cacheCreationTokens;
        }

        if (null !== $this->cachedTokens) {
            $res['cachedTokens'] = $this->cachedTokens;
        }

        if (null !== $this->clientId) {
            $res['clientId'] = $this->clientId;
        }

        if (null !== $this->clientName) {
            $res['clientName'] = $this->clientName;
        }

        if (null !== $this->discount) {
            $res['discount'] = $this->discount;
        }

        if (null !== $this->inputTokens) {
            $res['inputTokens'] = $this->inputTokens;
        }

        if (null !== $this->memberUserId) {
            $res['memberUserId'] = $this->memberUserId;
        }

        if (null !== $this->memberUserName) {
            $res['memberUserName'] = $this->memberUserName;
        }

        if (null !== $this->metrics) {
            $res['metrics'] = $this->metrics;
        }

        if (null !== $this->modelCode) {
            $res['modelCode'] = $this->modelCode;
        }

        if (null !== $this->modelId) {
            $res['modelId'] = $this->modelId;
        }

        if (null !== $this->modelName) {
            $res['modelName'] = $this->modelName;
        }

        if (null !== $this->modelSymbol) {
            $res['modelSymbol'] = $this->modelSymbol;
        }

        if (null !== $this->modelType) {
            $res['modelType'] = $this->modelType;
        }

        if (null !== $this->modelVersion) {
            $res['modelVersion'] = $this->modelVersion;
        }

        if (null !== $this->outputTokens) {
            $res['outputTokens'] = $this->outputTokens;
        }

        if (null !== $this->reasoningTokens) {
            $res['reasoningTokens'] = $this->reasoningTokens;
        }

        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        if (null !== $this->requestTime) {
            $res['requestTime'] = $this->requestTime;
        }

        if (null !== $this->totalTokens) {
            $res['totalTokens'] = $this->totalTokens;
        }

        if (null !== $this->usageDetail) {
            $res['usageDetail'] = $this->usageDetail;
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
        if (isset($map['amount'])) {
            $model->amount = $map['amount'];
        }

        if (isset($map['apiKeyId'])) {
            $model->apiKeyId = $map['apiKeyId'];
        }

        if (isset($map['apiKeyName'])) {
            $model->apiKeyName = $map['apiKeyName'];
        }

        if (isset($map['cacheCreationTokens'])) {
            $model->cacheCreationTokens = $map['cacheCreationTokens'];
        }

        if (isset($map['cachedTokens'])) {
            $model->cachedTokens = $map['cachedTokens'];
        }

        if (isset($map['clientId'])) {
            $model->clientId = $map['clientId'];
        }

        if (isset($map['clientName'])) {
            $model->clientName = $map['clientName'];
        }

        if (isset($map['discount'])) {
            $model->discount = $map['discount'];
        }

        if (isset($map['inputTokens'])) {
            $model->inputTokens = $map['inputTokens'];
        }

        if (isset($map['memberUserId'])) {
            $model->memberUserId = $map['memberUserId'];
        }

        if (isset($map['memberUserName'])) {
            $model->memberUserName = $map['memberUserName'];
        }

        if (isset($map['metrics'])) {
            $model->metrics = $map['metrics'];
        }

        if (isset($map['modelCode'])) {
            $model->modelCode = $map['modelCode'];
        }

        if (isset($map['modelId'])) {
            $model->modelId = $map['modelId'];
        }

        if (isset($map['modelName'])) {
            $model->modelName = $map['modelName'];
        }

        if (isset($map['modelSymbol'])) {
            $model->modelSymbol = $map['modelSymbol'];
        }

        if (isset($map['modelType'])) {
            $model->modelType = $map['modelType'];
        }

        if (isset($map['modelVersion'])) {
            $model->modelVersion = $map['modelVersion'];
        }

        if (isset($map['outputTokens'])) {
            $model->outputTokens = $map['outputTokens'];
        }

        if (isset($map['reasoningTokens'])) {
            $model->reasoningTokens = $map['reasoningTokens'];
        }

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        if (isset($map['requestTime'])) {
            $model->requestTime = $map['requestTime'];
        }

        if (isset($map['totalTokens'])) {
            $model->totalTokens = $map['totalTokens'];
        }

        if (isset($map['usageDetail'])) {
            $model->usageDetail = $map['usageDetail'];
        }

        return $model;
    }
}
