<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\ChatWithKnowledgeBaseStreamRequest\knowledgeParams;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\ChatWithKnowledgeBaseStreamRequest\modelParams;

class ChatWithKnowledgeBaseStreamRequest extends Model
{
    /**
     * @var string
     */
    public $DBInstanceId;

    /**
     * @var bool
     */
    public $includeKnowledgeBaseResults;

    /**
     * @var knowledgeParams
     */
    public $knowledgeParams;

    /**
     * @var modelParams
     */
    public $modelParams;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $promptParams;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'DBInstanceId' => 'DBInstanceId',
        'includeKnowledgeBaseResults' => 'IncludeKnowledgeBaseResults',
        'knowledgeParams' => 'KnowledgeParams',
        'modelParams' => 'ModelParams',
        'ownerId' => 'OwnerId',
        'promptParams' => 'PromptParams',
        'regionId' => 'RegionId',
    ];

    public function validate()
    {
        if (null !== $this->knowledgeParams) {
            $this->knowledgeParams->validate();
        }
        if (null !== $this->modelParams) {
            $this->modelParams->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->DBInstanceId) {
            $res['DBInstanceId'] = $this->DBInstanceId;
        }

        if (null !== $this->includeKnowledgeBaseResults) {
            $res['IncludeKnowledgeBaseResults'] = $this->includeKnowledgeBaseResults;
        }

        if (null !== $this->knowledgeParams) {
            $res['KnowledgeParams'] = null !== $this->knowledgeParams ? $this->knowledgeParams->toArray($noStream) : $this->knowledgeParams;
        }

        if (null !== $this->modelParams) {
            $res['ModelParams'] = null !== $this->modelParams ? $this->modelParams->toArray($noStream) : $this->modelParams;
        }

        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }

        if (null !== $this->promptParams) {
            $res['PromptParams'] = $this->promptParams;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
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
        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
        }

        if (isset($map['IncludeKnowledgeBaseResults'])) {
            $model->includeKnowledgeBaseResults = $map['IncludeKnowledgeBaseResults'];
        }

        if (isset($map['KnowledgeParams'])) {
            $model->knowledgeParams = knowledgeParams::fromMap($map['KnowledgeParams']);
        }

        if (isset($map['ModelParams'])) {
            $model->modelParams = modelParams::fromMap($map['ModelParams']);
        }

        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }

        if (isset($map['PromptParams'])) {
            $model->promptParams = $map['PromptParams'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
