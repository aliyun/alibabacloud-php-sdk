<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models;

use AlibabaCloud\Dara\Model;

class UpdateKnowledgeSpaceShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $description;

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
    public $regionId;

    /**
     * @var string
     */
    public $rerankModel;

    /**
     * @var string
     */
    public $shardingStrategyConfigShrink;
    protected $_name = [
        'description' => 'Description',
        'knowledgeSpaceId' => 'KnowledgeSpaceId',
        'LLMModel' => 'LLMModel',
        'name' => 'Name',
        'regionId' => 'RegionId',
        'rerankModel' => 'RerankModel',
        'shardingStrategyConfigShrink' => 'ShardingStrategyConfig',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
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

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->rerankModel) {
            $res['RerankModel'] = $this->rerankModel;
        }

        if (null !== $this->shardingStrategyConfigShrink) {
            $res['ShardingStrategyConfig'] = $this->shardingStrategyConfigShrink;
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
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
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

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['RerankModel'])) {
            $model->rerankModel = $map['RerankModel'];
        }

        if (isset($map['ShardingStrategyConfig'])) {
            $model->shardingStrategyConfigShrink = $map['ShardingStrategyConfig'];
        }

        return $model;
    }
}
