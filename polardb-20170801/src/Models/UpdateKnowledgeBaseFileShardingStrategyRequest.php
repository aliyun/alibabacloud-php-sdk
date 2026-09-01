<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Polardb\V20170801\Models\UpdateKnowledgeBaseFileShardingStrategyRequest\shardingStrategyConfig;

class UpdateKnowledgeBaseFileShardingStrategyRequest extends Model
{
    /**
     * @var string
     */
    public $fileId;

    /**
     * @var bool
     */
    public $inheritSpaceStrategy;

    /**
     * @var string
     */
    public $knowledgeBaseId;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var shardingStrategyConfig
     */
    public $shardingStrategyConfig;
    protected $_name = [
        'fileId' => 'FileId',
        'inheritSpaceStrategy' => 'InheritSpaceStrategy',
        'knowledgeBaseId' => 'KnowledgeBaseId',
        'regionId' => 'RegionId',
        'shardingStrategyConfig' => 'ShardingStrategyConfig',
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
        if (null !== $this->fileId) {
            $res['FileId'] = $this->fileId;
        }

        if (null !== $this->inheritSpaceStrategy) {
            $res['InheritSpaceStrategy'] = $this->inheritSpaceStrategy;
        }

        if (null !== $this->knowledgeBaseId) {
            $res['KnowledgeBaseId'] = $this->knowledgeBaseId;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->shardingStrategyConfig) {
            $res['ShardingStrategyConfig'] = null !== $this->shardingStrategyConfig ? $this->shardingStrategyConfig->toArray($noStream) : $this->shardingStrategyConfig;
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
        if (isset($map['FileId'])) {
            $model->fileId = $map['FileId'];
        }

        if (isset($map['InheritSpaceStrategy'])) {
            $model->inheritSpaceStrategy = $map['InheritSpaceStrategy'];
        }

        if (isset($map['KnowledgeBaseId'])) {
            $model->knowledgeBaseId = $map['KnowledgeBaseId'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['ShardingStrategyConfig'])) {
            $model->shardingStrategyConfig = shardingStrategyConfig::fromMap($map['ShardingStrategyConfig']);
        }

        return $model;
    }
}
