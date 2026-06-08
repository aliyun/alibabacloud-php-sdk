<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eventbridge\V20200401\Models\ListAgentsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\Agent;

class data extends Model
{
    /**
     * @var Agent[]
     */
    public $agents;

    /**
     * @var string
     */
    public $firstId;

    /**
     * @var string
     */
    public $hasMore;

    /**
     * @var string
     */
    public $lastId;
    protected $_name = [
        'agents' => 'Agents',
        'firstId' => 'FirstId',
        'hasMore' => 'HasMore',
        'lastId' => 'LastId',
    ];

    public function validate()
    {
        if (\is_array($this->agents)) {
            Model::validateArray($this->agents);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->agents) {
            if (\is_array($this->agents)) {
                $res['Agents'] = [];
                $n1 = 0;
                foreach ($this->agents as $item1) {
                    $res['Agents'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->firstId) {
            $res['FirstId'] = $this->firstId;
        }

        if (null !== $this->hasMore) {
            $res['HasMore'] = $this->hasMore;
        }

        if (null !== $this->lastId) {
            $res['LastId'] = $this->lastId;
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
        if (isset($map['Agents'])) {
            if (!empty($map['Agents'])) {
                $model->agents = [];
                $n1 = 0;
                foreach ($map['Agents'] as $item1) {
                    $model->agents[$n1] = Agent::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['FirstId'])) {
            $model->firstId = $map['FirstId'];
        }

        if (isset($map['HasMore'])) {
            $model->hasMore = $map['HasMore'];
        }

        if (isset($map['LastId'])) {
            $model->lastId = $map['LastId'];
        }

        return $model;
    }
}
