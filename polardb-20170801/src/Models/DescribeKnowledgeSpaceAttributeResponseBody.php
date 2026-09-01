<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeKnowledgeSpaceAttributeResponseBody\shardingStrategyConfig;

class DescribeKnowledgeSpaceAttributeResponseBody extends Model
{
    /**
     * @var string
     */
    public $ACLMode;

    /**
     * @var string
     */
    public $creationTime;

    /**
     * @var string
     */
    public $DBClusterId;

    /**
     * @var string
     */
    public $DBName;

    /**
     * @var string
     */
    public $DBType;

    /**
     * @var string
     */
    public $description;

    /**
     * @var int
     */
    public $embeddingDimension;

    /**
     * @var string
     */
    public $embeddingModel;

    /**
     * @var int
     */
    public $knowledgeBaseCount;

    /**
     * @var string
     */
    public $knowledgeSpaceId;

    /**
     * @var string
     */
    public $LLMModel;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $OSSBucket;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $rerankModel;

    /**
     * @var int
     */
    public $shardSize;

    /**
     * @var shardingStrategyConfig
     */
    public $shardingStrategyConfig;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $strategy;

    /**
     * @var int
     */
    public $totalDocs;

    /**
     * @var int
     */
    public $totalSizeBytes;
    protected $_name = [
        'ACLMode' => 'ACLMode',
        'creationTime' => 'CreationTime',
        'DBClusterId' => 'DBClusterId',
        'DBName' => 'DBName',
        'DBType' => 'DBType',
        'description' => 'Description',
        'embeddingDimension' => 'EmbeddingDimension',
        'embeddingModel' => 'EmbeddingModel',
        'knowledgeBaseCount' => 'KnowledgeBaseCount',
        'knowledgeSpaceId' => 'KnowledgeSpaceId',
        'LLMModel' => 'LLMModel',
        'name' => 'Name',
        'OSSBucket' => 'OSSBucket',
        'requestId' => 'RequestId',
        'rerankModel' => 'RerankModel',
        'shardSize' => 'ShardSize',
        'shardingStrategyConfig' => 'ShardingStrategyConfig',
        'status' => 'Status',
        'strategy' => 'Strategy',
        'totalDocs' => 'TotalDocs',
        'totalSizeBytes' => 'TotalSizeBytes',
    ];

    public function validate()
    {
        if (null !== $this->shardingStrategyConfig) {
            $this->shardingStrategyConfig->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->ACLMode) {
            $res['ACLMode'] = $this->ACLMode;
        }

        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }

        if (null !== $this->DBClusterId) {
            $res['DBClusterId'] = $this->DBClusterId;
        }

        if (null !== $this->DBName) {
            $res['DBName'] = $this->DBName;
        }

        if (null !== $this->DBType) {
            $res['DBType'] = $this->DBType;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->embeddingDimension) {
            $res['EmbeddingDimension'] = $this->embeddingDimension;
        }

        if (null !== $this->embeddingModel) {
            $res['EmbeddingModel'] = $this->embeddingModel;
        }

        if (null !== $this->knowledgeBaseCount) {
            $res['KnowledgeBaseCount'] = $this->knowledgeBaseCount;
        }

        if (null !== $this->knowledgeSpaceId) {
            $res['KnowledgeSpaceId'] = $this->knowledgeSpaceId;
        }

        if (null !== $this->LLMModel) {
            $res['LLMModel'] = $this->LLMModel;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->OSSBucket) {
            $res['OSSBucket'] = $this->OSSBucket;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->rerankModel) {
            $res['RerankModel'] = $this->rerankModel;
        }

        if (null !== $this->shardSize) {
            $res['ShardSize'] = $this->shardSize;
        }

        if (null !== $this->shardingStrategyConfig) {
            $res['ShardingStrategyConfig'] = null !== $this->shardingStrategyConfig ? $this->shardingStrategyConfig->toArray($noStream) : $this->shardingStrategyConfig;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->strategy) {
            $res['Strategy'] = $this->strategy;
        }

        if (null !== $this->totalDocs) {
            $res['TotalDocs'] = $this->totalDocs;
        }

        if (null !== $this->totalSizeBytes) {
            $res['TotalSizeBytes'] = $this->totalSizeBytes;
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
        if (isset($map['ACLMode'])) {
            $model->ACLMode = $map['ACLMode'];
        }

        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }

        if (isset($map['DBClusterId'])) {
            $model->DBClusterId = $map['DBClusterId'];
        }

        if (isset($map['DBName'])) {
            $model->DBName = $map['DBName'];
        }

        if (isset($map['DBType'])) {
            $model->DBType = $map['DBType'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['EmbeddingDimension'])) {
            $model->embeddingDimension = $map['EmbeddingDimension'];
        }

        if (isset($map['EmbeddingModel'])) {
            $model->embeddingModel = $map['EmbeddingModel'];
        }

        if (isset($map['KnowledgeBaseCount'])) {
            $model->knowledgeBaseCount = $map['KnowledgeBaseCount'];
        }

        if (isset($map['KnowledgeSpaceId'])) {
            $model->knowledgeSpaceId = $map['KnowledgeSpaceId'];
        }

        if (isset($map['LLMModel'])) {
            $model->LLMModel = $map['LLMModel'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['OSSBucket'])) {
            $model->OSSBucket = $map['OSSBucket'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['RerankModel'])) {
            $model->rerankModel = $map['RerankModel'];
        }

        if (isset($map['ShardSize'])) {
            $model->shardSize = $map['ShardSize'];
        }

        if (isset($map['ShardingStrategyConfig'])) {
            $model->shardingStrategyConfig = shardingStrategyConfig::fromMap($map['ShardingStrategyConfig']);
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['Strategy'])) {
            $model->strategy = $map['Strategy'];
        }

        if (isset($map['TotalDocs'])) {
            $model->totalDocs = $map['TotalDocs'];
        }

        if (isset($map['TotalSizeBytes'])) {
            $model->totalSizeBytes = $map['TotalSizeBytes'];
        }

        return $model;
    }
}
