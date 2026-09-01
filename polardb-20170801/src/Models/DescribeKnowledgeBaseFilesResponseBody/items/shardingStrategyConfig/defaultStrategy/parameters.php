<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeKnowledgeBaseFilesResponseBody\items\shardingStrategyConfig\defaultStrategy;

use AlibabaCloud\Dara\Model;

class parameters extends Model
{
    /**
     * @var int
     */
    public $maxTokens;

    /**
     * @var bool
     */
    public $mergePeers;
    protected $_name = [
        'maxTokens' => 'MaxTokens',
        'mergePeers' => 'MergePeers',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->maxTokens) {
            $res['MaxTokens'] = $this->maxTokens;
        }

        if (null !== $this->mergePeers) {
            $res['MergePeers'] = $this->mergePeers;
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
        if (isset($map['MaxTokens'])) {
            $model->maxTokens = $map['MaxTokens'];
        }

        if (isset($map['MergePeers'])) {
            $model->mergePeers = $map['MergePeers'];
        }

        return $model;
    }
}
