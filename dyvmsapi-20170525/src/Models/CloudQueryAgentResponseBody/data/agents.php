<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\CloudQueryAgentResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\CloudQueryAgentResponseBody\data\agents\agent;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\CloudQueryAgentResponseBody\data\agents\queueList;

class agents extends Model
{
    /**
     * @var agent
     */
    public $agent;

    /**
     * @var queueList[]
     */
    public $queueList;
    protected $_name = [
        'agent' => 'Agent',
        'queueList' => 'QueueList',
    ];

    public function validate()
    {
        if (null !== $this->agent) {
            $this->agent->validate();
        }
        if (\is_array($this->queueList)) {
            Model::validateArray($this->queueList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->agent) {
            $res['Agent'] = null !== $this->agent ? $this->agent->toArray($noStream) : $this->agent;
        }

        if (null !== $this->queueList) {
            if (\is_array($this->queueList)) {
                $res['QueueList'] = [];
                $n1 = 0;
                foreach ($this->queueList as $item1) {
                    $res['QueueList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['Agent'])) {
            $model->agent = agent::fromMap($map['Agent']);
        }

        if (isset($map['QueueList'])) {
            if (!empty($map['QueueList'])) {
                $model->queueList = [];
                $n1 = 0;
                foreach ($map['QueueList'] as $item1) {
                    $model->queueList[$n1] = queueList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
