<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20200701\Models\GetCallDetailRecordResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\CCC\V20200701\Models\GetCallDetailRecordResponseBody\data\agentEvents\eventSequence;

class agentEvents extends Model
{
    /**
     * @var string
     */
    public $agentId;

    /**
     * @var string
     */
    public $agentName;

    /**
     * @var eventSequence[]
     */
    public $eventSequence;

    /**
     * @var string
     */
    public $skillGroupId;
    protected $_name = [
        'agentId' => 'AgentId',
        'agentName' => 'AgentName',
        'eventSequence' => 'EventSequence',
        'skillGroupId' => 'SkillGroupId',
    ];

    public function validate()
    {
        if (\is_array($this->eventSequence)) {
            Model::validateArray($this->eventSequence);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->agentId) {
            $res['AgentId'] = $this->agentId;
        }

        if (null !== $this->agentName) {
            $res['AgentName'] = $this->agentName;
        }

        if (null !== $this->eventSequence) {
            if (\is_array($this->eventSequence)) {
                $res['EventSequence'] = [];
                $n1 = 0;
                foreach ($this->eventSequence as $item1) {
                    $res['EventSequence'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->skillGroupId) {
            $res['SkillGroupId'] = $this->skillGroupId;
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
        if (isset($map['AgentId'])) {
            $model->agentId = $map['AgentId'];
        }

        if (isset($map['AgentName'])) {
            $model->agentName = $map['AgentName'];
        }

        if (isset($map['EventSequence'])) {
            if (!empty($map['EventSequence'])) {
                $model->eventSequence = [];
                $n1 = 0;
                foreach ($map['EventSequence'] as $item1) {
                    $model->eventSequence[$n1++] = eventSequence::fromMap($item1);
                }
            }
        }

        if (isset($map['SkillGroupId'])) {
            $model->skillGroupId = $map['SkillGroupId'];
        }

        return $model;
    }
}
