<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models\ChatWithKnowledgeBaseResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\ChatWithKnowledgeBaseResponseBody\multiCollectionRecallResult\matches;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\ChatWithKnowledgeBaseResponseBody\multiCollectionRecallResult\usage;

class multiCollectionRecallResult extends Model
{
    /**
     * @var string[]
     */
    public $entities;

    /**
     * @var matches[]
     */
    public $matches;

    /**
     * @var string[]
     */
    public $relations;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $status;

    /**
     * @var int
     */
    public $tokens;

    /**
     * @var usage
     */
    public $usage;
    protected $_name = [
        'entities' => 'Entities',
        'matches' => 'Matches',
        'relations' => 'Relations',
        'requestId' => 'RequestId',
        'status' => 'Status',
        'tokens' => 'Tokens',
        'usage' => 'Usage',
    ];

    public function validate()
    {
        if (\is_array($this->entities)) {
            Model::validateArray($this->entities);
        }
        if (\is_array($this->matches)) {
            Model::validateArray($this->matches);
        }
        if (\is_array($this->relations)) {
            Model::validateArray($this->relations);
        }
        if (null !== $this->usage) {
            $this->usage->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->entities) {
            if (\is_array($this->entities)) {
                $res['Entities'] = [];
                $n1 = 0;
                foreach ($this->entities as $item1) {
                    $res['Entities'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->matches) {
            if (\is_array($this->matches)) {
                $res['Matches'] = [];
                $n1 = 0;
                foreach ($this->matches as $item1) {
                    $res['Matches'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->relations) {
            if (\is_array($this->relations)) {
                $res['Relations'] = [];
                $n1 = 0;
                foreach ($this->relations as $item1) {
                    $res['Relations'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->tokens) {
            $res['Tokens'] = $this->tokens;
        }

        if (null !== $this->usage) {
            $res['Usage'] = null !== $this->usage ? $this->usage->toArray($noStream) : $this->usage;
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
        if (isset($map['Entities'])) {
            if (!empty($map['Entities'])) {
                $model->entities = [];
                $n1 = 0;
                foreach ($map['Entities'] as $item1) {
                    $model->entities[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Matches'])) {
            if (!empty($map['Matches'])) {
                $model->matches = [];
                $n1 = 0;
                foreach ($map['Matches'] as $item1) {
                    $model->matches[$n1] = matches::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Relations'])) {
            if (!empty($map['Relations'])) {
                $model->relations = [];
                $n1 = 0;
                foreach ($map['Relations'] as $item1) {
                    $model->relations[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['Tokens'])) {
            $model->tokens = $map['Tokens'];
        }

        if (isset($map['Usage'])) {
            $model->usage = usage::fromMap($map['Usage']);
        }

        return $model;
    }
}
