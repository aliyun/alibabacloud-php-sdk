<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListKnowledgePointsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListKnowledgePointsResponseBody\data\knowledgePoints;

class data extends Model
{
    /**
     * @var knowledgePoints[]
     */
    public $knowledgePoints;

    /**
     * @var string
     */
    public $nextToken;
    protected $_name = [
        'knowledgePoints' => 'KnowledgePoints',
        'nextToken' => 'NextToken',
    ];

    public function validate()
    {
        if (\is_array($this->knowledgePoints)) {
            Model::validateArray($this->knowledgePoints);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->knowledgePoints) {
            if (\is_array($this->knowledgePoints)) {
                $res['KnowledgePoints'] = [];
                $n1 = 0;
                foreach ($this->knowledgePoints as $item1) {
                    $res['KnowledgePoints'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
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
        if (isset($map['KnowledgePoints'])) {
            if (!empty($map['KnowledgePoints'])) {
                $model->knowledgePoints = [];
                $n1 = 0;
                foreach ($map['KnowledgePoints'] as $item1) {
                    $model->knowledgePoints[$n1] = knowledgePoints::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }

        return $model;
    }
}
