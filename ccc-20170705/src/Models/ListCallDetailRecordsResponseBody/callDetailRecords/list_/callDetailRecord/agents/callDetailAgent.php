<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20170705\Models\ListCallDetailRecordsResponseBody\callDetailRecords\list_\callDetailRecord\agents;

use AlibabaCloud\Tea\Model;

class callDetailAgent extends Model
{
    /**
     * @var string
     */
    public $agentId;

    /**
     * @var string
     */
    public $feedback;

    /**
     * @var string
     */
    public $satisfaction;
    protected $_name = [
        'agentId'      => 'AgentId',
        'feedback'     => 'Feedback',
        'satisfaction' => 'Satisfaction',
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
        if (null !== $this->feedback) {
            $res['Feedback'] = $this->feedback;
        }
        if (null !== $this->satisfaction) {
            $res['Satisfaction'] = $this->satisfaction;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return callDetailAgent
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AgentId'])) {
            $model->agentId = $map['AgentId'];
        }
        if (isset($map['Feedback'])) {
            $model->feedback = $map['Feedback'];
        }
        if (isset($map['Satisfaction'])) {
            $model->satisfaction = $map['Satisfaction'];
        }

        return $model;
    }
}
