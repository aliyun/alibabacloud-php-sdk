<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models;

use AlibabaCloud\Dara\Model;

class CreateKnowledgeSpaceRequest extends Model
{
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
     * @var bool
     */
    public $enforceAcl;

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
    public $OSSAccessKey;

    /**
     * @var string
     */
    public $OSSBucket;

    /**
     * @var string
     */
    public $OSSSecretKey;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $rerankModel;

    /**
     * @var string
     */
    public $securityGroupId;

    /**
     * @var int
     */
    public $shardingSize;

    /**
     * @var string
     */
    public $shardingStrategy;

    /**
     * @var string
     */
    public $vSwitchId;

    /**
     * @var string
     */
    public $vpcId;

    /**
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'DBType' => 'DBType',
        'description' => 'Description',
        'embeddingDimension' => 'EmbeddingDimension',
        'embeddingModel' => 'EmbeddingModel',
        'enforceAcl' => 'EnforceAcl',
        'LLMModel' => 'LLMModel',
        'name' => 'Name',
        'OSSAccessKey' => 'OSSAccessKey',
        'OSSBucket' => 'OSSBucket',
        'OSSSecretKey' => 'OSSSecretKey',
        'regionId' => 'RegionId',
        'rerankModel' => 'RerankModel',
        'securityGroupId' => 'SecurityGroupId',
        'shardingSize' => 'ShardingSize',
        'shardingStrategy' => 'ShardingStrategy',
        'vSwitchId' => 'VSwitchId',
        'vpcId' => 'VpcId',
        'zoneId' => 'ZoneId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
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

        if (null !== $this->enforceAcl) {
            $res['EnforceAcl'] = $this->enforceAcl;
        }

        if (null !== $this->LLMModel) {
            $res['LLMModel'] = $this->LLMModel;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->OSSAccessKey) {
            $res['OSSAccessKey'] = $this->OSSAccessKey;
        }

        if (null !== $this->OSSBucket) {
            $res['OSSBucket'] = $this->OSSBucket;
        }

        if (null !== $this->OSSSecretKey) {
            $res['OSSSecretKey'] = $this->OSSSecretKey;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->rerankModel) {
            $res['RerankModel'] = $this->rerankModel;
        }

        if (null !== $this->securityGroupId) {
            $res['SecurityGroupId'] = $this->securityGroupId;
        }

        if (null !== $this->shardingSize) {
            $res['ShardingSize'] = $this->shardingSize;
        }

        if (null !== $this->shardingStrategy) {
            $res['ShardingStrategy'] = $this->shardingStrategy;
        }

        if (null !== $this->vSwitchId) {
            $res['VSwitchId'] = $this->vSwitchId;
        }

        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }

        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
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

        if (isset($map['EnforceAcl'])) {
            $model->enforceAcl = $map['EnforceAcl'];
        }

        if (isset($map['LLMModel'])) {
            $model->LLMModel = $map['LLMModel'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['OSSAccessKey'])) {
            $model->OSSAccessKey = $map['OSSAccessKey'];
        }

        if (isset($map['OSSBucket'])) {
            $model->OSSBucket = $map['OSSBucket'];
        }

        if (isset($map['OSSSecretKey'])) {
            $model->OSSSecretKey = $map['OSSSecretKey'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['RerankModel'])) {
            $model->rerankModel = $map['RerankModel'];
        }

        if (isset($map['SecurityGroupId'])) {
            $model->securityGroupId = $map['SecurityGroupId'];
        }

        if (isset($map['ShardingSize'])) {
            $model->shardingSize = $map['ShardingSize'];
        }

        if (isset($map['ShardingStrategy'])) {
            $model->shardingStrategy = $map['ShardingStrategy'];
        }

        if (isset($map['VSwitchId'])) {
            $model->vSwitchId = $map['VSwitchId'];
        }

        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }

        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}
