<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentLoop\V20260520\Models;

use AlibabaCloud\Dara\Model;

class DeleteEvaluatorSkillRequest extends Model
{
    /**
     * @var string
     */
    public $agentSpace;

    /**
     * @var string
     */
    public $evaluatorVersion;
    protected $_name = [
        'agentSpace' => 'agentSpace',
        'evaluatorVersion' => 'evaluatorVersion',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->agentSpace) {
            $res['agentSpace'] = $this->agentSpace;
        }

        if (null !== $this->evaluatorVersion) {
            $res['evaluatorVersion'] = $this->evaluatorVersion;
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
        if (isset($map['agentSpace'])) {
            $model->agentSpace = $map['agentSpace'];
        }

        if (isset($map['evaluatorVersion'])) {
            $model->evaluatorVersion = $map['evaluatorVersion'];
        }

        return $model;
    }
}
