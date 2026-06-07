<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\CreateSkillResponseBody\skill;

class CreateSkillResponseBody extends Model
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
        'requestId' => 'RequestId',
        'skill' => 'Skill',
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
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->skill) {
            $res['Skill'] = null !== $this->skill ? $this->skill->toArray($noStream) : $this->skill;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['Skill'])) {
            $model->skill = skill::fromMap($map['Skill']);
        }

        return $model;
    }
}
