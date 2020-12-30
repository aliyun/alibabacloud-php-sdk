<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20170705\Models\ListCallDetailRecordsResponseBody\callDetailRecords\list_\callDetailRecord\agents;

use AlibabaCloud\Tea\Model;

class callDetailAgent extends Model
{
    /**
     * @var string
     */
    public $satisfaction;

    /**
     * @var string
     */
    public $agentId;

    /**
     * @var string
     */
    public $feedback;
    protected $_name = [
        'satisfaction' => 'Satisfaction',
        'agentId'      => 'AgentId',
        'feedback'     => 'Feedback',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->satisfaction) {
            $res['Satisfaction'] = $this->satisfaction;
        }
        if (null !== $this->agentId) {
            $res['AgentId'] = $this->agentId;
        }
        if (null !== $this->feedback) {
            $res['Feedback'] = $this->feedback;
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
        if (isset($map['Satisfaction'])) {
            $model->satisfaction = $map['Satisfaction'];
        }
        if (isset($map['AgentId'])) {
            $model->agentId = $map['AgentId'];
        }
        if (isset($map['Feedback'])) {
            $model->feedback = $map['Feedback'];
        }

        return $model;
    }
}
