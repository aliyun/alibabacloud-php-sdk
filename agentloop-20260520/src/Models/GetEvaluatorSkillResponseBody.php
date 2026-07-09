<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentLoop\V20260520\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AgentLoop\V20260520\Models\GetEvaluatorSkillResponseBody\skill;

class GetEvaluatorSkillResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var skill
     */
    public $skill;
    protected $_name = [
        'requestId' => 'requestId',
        'skill' => 'skill',
    ];

    public function validate()
    {
        if (null !== $this->skill) {
            $this->skill->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        if (null !== $this->skill) {
            $res['skill'] = null !== $this->skill ? $this->skill->toArray($noStream) : $this->skill;
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
        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        if (isset($map['skill'])) {
            $model->skill = skill::fromMap($map['skill']);
        }

        return $model;
    }
}
