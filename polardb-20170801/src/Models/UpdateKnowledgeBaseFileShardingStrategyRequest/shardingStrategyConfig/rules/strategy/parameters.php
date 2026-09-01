<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models\UpdateKnowledgeBaseFileShardingStrategyRequest\shardingStrategyConfig\rules\strategy;

use AlibabaCloud\Dara\Model;

class parameters extends Model
{
    /**
     * @var string
     */
    public $markdownTables;

    /**
     * @var int
     */
    public $maxTokens;
    protected $_name = [
        'markdownTables' => 'MarkdownTables',
        'maxTokens' => 'MaxTokens',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->markdownTables) {
            $res['MarkdownTables'] = $this->markdownTables;
        }

        if (null !== $this->maxTokens) {
            $res['MaxTokens'] = $this->maxTokens;
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
        if (isset($map['MarkdownTables'])) {
            $model->markdownTables = $map['MarkdownTables'];
        }

        if (isset($map['MaxTokens'])) {
            $model->maxTokens = $map['MaxTokens'];
        }

        return $model;
    }
}
