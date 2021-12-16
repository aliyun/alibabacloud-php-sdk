<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20200701\Models\GetCallDetailRecordResponseBody\data;

use AlibabaCloud\SDK\CCC\V20200701\Models\GetCallDetailRecordResponseBody\data\agentEvents\eventSequence;
use AlibabaCloud\Tea\Model;

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
        'agentId'       => 'AgentId',
        'agentName'     => 'AgentName',
        'eventSequence' => 'EventSequence',
        'skillGroupId'  => 'SkillGroupId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->agentId) {
            $res['AgentId'] = $this->agentId;
        }
        if (null !== $this->agentName) {
            $res['AgentName'] = $this->agentName;
        }
        if (null !== $this->eventSequence) {
            $res['EventSequence'] = [];
            if (null !== $this->eventSequence && \is_array($this->eventSequence)) {
                $n = 0;
                foreach ($this->eventSequence as $item) {
                    $res['EventSequence'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->skillGroupId) {
            $res['SkillGroupId'] = $this->skillGroupId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return agentEvents
     */
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
                $n                    = 0;
                foreach ($map['EventSequence'] as $item) {
                    $model->eventSequence[$n++] = null !== $item ? eventSequence::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['SkillGroupId'])) {
            $model->skillGroupId = $map['SkillGroupId'];
        }

        return $model;
    }
}
