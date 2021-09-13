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
    public $agentName;

    /**
     * @var string
     */
    public $agentId;

    /**
     * @var string
     */
    public $skillGroupId;

    /**
     * @var eventSequence[]
     */
    public $eventSequence;
    protected $_name = [
        'agentName'     => 'AgentName',
        'agentId'       => 'AgentId',
        'skillGroupId'  => 'SkillGroupId',
        'eventSequence' => 'EventSequence',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->agentName) {
            $res['AgentName'] = $this->agentName;
        }
        if (null !== $this->agentId) {
            $res['AgentId'] = $this->agentId;
        }
        if (null !== $this->skillGroupId) {
            $res['SkillGroupId'] = $this->skillGroupId;
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
        if (isset($map['AgentName'])) {
            $model->agentName = $map['AgentName'];
        }
        if (isset($map['AgentId'])) {
            $model->agentId = $map['AgentId'];
        }
        if (isset($map['SkillGroupId'])) {
            $model->skillGroupId = $map['SkillGroupId'];
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

        return $model;
    }
}
