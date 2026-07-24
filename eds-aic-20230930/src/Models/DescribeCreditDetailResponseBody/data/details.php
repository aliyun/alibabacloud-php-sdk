<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsaic\V20230930\Models\DescribeCreditDetailResponseBody\data;

use AlibabaCloud\Dara\Model;

class details extends Model
{
    /**
     * @var string
     */
    public $apiKeyName;

    /**
     * @var int
     */
    public $cachedTokens;

    /**
     * @var string
     */
    public $changeTime;

    /**
     * @var string
     */
    public $creditChange;

    /**
     * @var string
     */
    public $description;

    /**
     * @var int
     */
    public $inputTokens;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $instanceName;

    /**
     * @var string
     */
    public $modelId;

    /**
     * @var int
     */
    public $outputTokens;

    /**
     * @var string
     */
    public $packageId;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $taskId;

    /**
     * @var int
     */
    public $totalTokens;
    protected $_name = [
        'apiKeyName' => 'ApiKeyName',
        'cachedTokens' => 'CachedTokens',
        'changeTime' => 'ChangeTime',
        'creditChange' => 'CreditChange',
        'description' => 'Description',
        'inputTokens' => 'InputTokens',
        'instanceId' => 'InstanceId',
        'instanceName' => 'InstanceName',
        'modelId' => 'ModelId',
        'outputTokens' => 'OutputTokens',
        'packageId' => 'PackageId',
        'requestId' => 'RequestId',
        'taskId' => 'TaskId',
        'totalTokens' => 'TotalTokens',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->apiKeyName) {
            $res['ApiKeyName'] = $this->apiKeyName;
        }

        if (null !== $this->cachedTokens) {
            $res['CachedTokens'] = $this->cachedTokens;
        }

        if (null !== $this->changeTime) {
            $res['ChangeTime'] = $this->changeTime;
        }

        if (null !== $this->creditChange) {
            $res['CreditChange'] = $this->creditChange;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->inputTokens) {
            $res['InputTokens'] = $this->inputTokens;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }

        if (null !== $this->modelId) {
            $res['ModelId'] = $this->modelId;
        }

        if (null !== $this->outputTokens) {
            $res['OutputTokens'] = $this->outputTokens;
        }

        if (null !== $this->packageId) {
            $res['PackageId'] = $this->packageId;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }

        if (null !== $this->totalTokens) {
            $res['TotalTokens'] = $this->totalTokens;
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
        if (isset($map['ApiKeyName'])) {
            $model->apiKeyName = $map['ApiKeyName'];
        }

        if (isset($map['CachedTokens'])) {
            $model->cachedTokens = $map['CachedTokens'];
        }

        if (isset($map['ChangeTime'])) {
            $model->changeTime = $map['ChangeTime'];
        }

        if (isset($map['CreditChange'])) {
            $model->creditChange = $map['CreditChange'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['InputTokens'])) {
            $model->inputTokens = $map['InputTokens'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }

        if (isset($map['ModelId'])) {
            $model->modelId = $map['ModelId'];
        }

        if (isset($map['OutputTokens'])) {
            $model->outputTokens = $map['OutputTokens'];
        }

        if (isset($map['PackageId'])) {
            $model->packageId = $map['PackageId'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        if (isset($map['TotalTokens'])) {
            $model->totalTokens = $map['TotalTokens'];
        }

        return $model;
    }
}
